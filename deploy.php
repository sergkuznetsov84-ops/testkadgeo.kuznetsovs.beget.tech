<?php
declare(strict_types=1);

ignore_user_abort(true);
set_time_limit(300);

$deployToken = 'CHANGE_ME_TO_LONG_RANDOM_TOKEN';
$branch = 'main';
$path = __DIR__;

header('Content-Type: text/plain; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
	http_response_code(405);
	echo "Method Not Allowed\nUse POST request.\n";
	exit;
}

$token = $_POST['token'] ?? ($_SERVER['HTTP_X_DEPLOY_TOKEN'] ?? '');
if (!is_string($token) || !hash_equals($deployToken, $token)) {
	http_response_code(403);
	echo "Forbidden\n";
	exit;
}

if (!preg_match('/^[A-Za-z0-9._\\/-]+$/', $branch)) {
	http_response_code(500);
	echo "Invalid branch value\n";
	exit;
}

if (!is_dir($path . DIRECTORY_SEPARATOR . '.git')) {
	http_response_code(500);
	echo "Directory is not a git repository: {$path}\n";
	exit;
}

function runCommand(string $command): array
{
	$output = [];
	$exitCode = 0;
	exec($command . ' 2>&1', $output, $exitCode);

	return [
		'command' => $command,
		'output' => $output,
		'exit' => $exitCode,
	];
}

$safePath = escapeshellarg($path);
$steps = [
	"cd {$safePath} && git rev-parse --is-inside-work-tree",
	"cd {$safePath} && git fetch origin",
	"cd {$safePath} && git reset --hard origin/{$branch}",
	"cd {$safePath} && git clean -fd",
];

echo "Deploy path: {$path}\n";
echo "Branch: {$branch}\n\n";

foreach ($steps as $step) {
	$result = runCommand($step);
	echo '$ ' . $result['command'] . "\n";
	foreach ($result['output'] as $line) {
		echo $line . "\n";
	}
	echo "Exit code: " . $result['exit'] . "\n\n";
	if ($result['exit'] !== 0) {
		http_response_code(500);
		echo "Deploy failed\n";
		exit;
	}
}

echo "Deploy finished successfully\n";
