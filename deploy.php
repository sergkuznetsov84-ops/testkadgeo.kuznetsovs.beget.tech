<?php
declare(strict_types=1);

ignore_user_abort(true);
set_time_limit(300);

$branch = 'main';
$path = __DIR__;

header('Content-Type: text/plain; charset=utf-8');

$tokenFile = __DIR__ . DIRECTORY_SEPARATOR . '.deploy_token';
$expectedToken = (string)(is_file($tokenFile) ? trim((string)file_get_contents($tokenFile)) : '');

if ($expectedToken === '') {
	http_response_code(500);
	echo "Deploy token is not configured\n";
	exit;
}

$token = $_POST['token'] ?? ($_GET['token'] ?? ($_SERVER['HTTP_X_DEPLOY_TOKEN'] ?? ''));
if (!is_string($token) || !hash_equals($expectedToken, $token)) {
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
	"cd {$safePath} && GIT_TERMINAL_PROMPT=0 git fetch origin",
	"cd {$safePath} && git reset --hard origin/{$branch}",
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
