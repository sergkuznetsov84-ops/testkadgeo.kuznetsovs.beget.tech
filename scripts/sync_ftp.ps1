param(
    [Parameter(Mandatory = $true)]
    [string]$FtpHost,

    [Parameter(Mandatory = $true)]
    [string]$FtpUser,

    [Parameter(Mandatory = $true)]
    [string]$FtpPassword,

    [Parameter(Mandatory = $true)]
    [string]$RemoteRoot,

    [string]$LocalRoot = (Split-Path -Parent $PSScriptRoot)
)

$ErrorActionPreference = 'Stop'

$excludedPrefixes = @(
    'upload',
    'bitrix/cache',
    'bitrix/managed_cache',
    'bitrix/stack_cache',
    'bitrix/tmp',
    'bitrix/updates',
    'bitrix/backup'
)

$downloaded = 0
$skipped = 0
$dirsProcessed = 0

function Normalize-RelativePath {
    param([string]$Path)
    return ($Path -replace '\\', '/').Trim('/')
}

function Test-IsExcluded {
    param([string]$RelativePath)
    $candidate = Normalize-RelativePath $RelativePath
    foreach ($prefix in $excludedPrefixes) {
        if ($candidate -eq $prefix -or $candidate.StartsWith("$prefix/")) {
            return $true
        }
    }
    return $false
}

function Join-RemotePath {
    param(
        [string]$BasePath,
        [string]$RelativePath
    )
    $base = Normalize-RelativePath $BasePath
    if ([string]::IsNullOrWhiteSpace($RelativePath)) {
        return $base
    }
    return "$base/$(Normalize-RelativePath $RelativePath)"
}

function Invoke-FtpList {
    param([string]$PathOnFtp)
    $remotePath = Join-RemotePath -BasePath $PathOnFtp -RelativePath ''
    $url = "ftp://$FtpHost/$remotePath/"
    $lines = & curl.exe --silent --show-error --ftp-method nocwd --user "$FtpUser`:$FtpPassword" $url
    if ($LASTEXITCODE -ne 0) {
        throw "FTP list failed: $remotePath"
    }
    return $lines
}

function Parse-FtpLine {
    param([string]$Line)
    if ($Line -match '^(?<type>[d\-l])[rwx\-]{9}\s+\d+\s+\S+\s+\S+\s+(?<size>\d+)\s+\w+\s+\d+\s+(?:\d{4}|\d{2}:\d{2})\s+(?<name>.+)$') {
        return [PSCustomObject]@{
            Type = $matches['type']
            Size = [int64]$matches['size']
            Name = $matches['name']
        }
    }
    return $null
}

if (-not (Test-Path -LiteralPath $LocalRoot)) {
    New-Item -ItemType Directory -Path $LocalRoot -Force | Out-Null
}

$queue = [System.Collections.Generic.Queue[string]]::new()
$queue.Enqueue('')

while ($queue.Count -gt 0) {
    $currentRelativeDir = $queue.Dequeue()
    if (Test-IsExcluded -RelativePath $currentRelativeDir) {
        continue
    }

    $dirsProcessed++
    $localDir = if ([string]::IsNullOrWhiteSpace($currentRelativeDir)) { $LocalRoot } else { Join-Path $LocalRoot ($currentRelativeDir -replace '/', '\\') }
    if (-not (Test-Path -LiteralPath $localDir)) {
        New-Item -ItemType Directory -Path $localDir -Force | Out-Null
    }

    $remoteDir = Join-RemotePath -BasePath $RemoteRoot -RelativePath $currentRelativeDir
    $listing = Invoke-FtpList -PathOnFtp $remoteDir

    foreach ($line in $listing) {
        $entry = Parse-FtpLine -Line $line
        if ($null -eq $entry) {
            continue
        }

        $childRelativePath = if ([string]::IsNullOrWhiteSpace($currentRelativeDir)) { $entry.Name } else { "$currentRelativeDir/$($entry.Name)" }
        $childRelativePath = Normalize-RelativePath $childRelativePath

        if (Test-IsExcluded -RelativePath $childRelativePath) {
            continue
        }

        if ($entry.Type -eq 'd') {
            $queue.Enqueue($childRelativePath)
            continue
        }

        $localFile = Join-Path $LocalRoot ($childRelativePath -replace '/', '\\')
        $localParent = Split-Path -Parent $localFile
        if (-not (Test-Path -LiteralPath $localParent)) {
            New-Item -ItemType Directory -Path $localParent -Force | Out-Null
        }

        if (Test-Path -LiteralPath $localFile) {
            $existingSize = (Get-Item -LiteralPath $localFile).Length
            if ($existingSize -eq $entry.Size) {
                $skipped++
                continue
            }
        }

        $remoteFile = Join-RemotePath -BasePath $RemoteRoot -RelativePath $childRelativePath
        $tmpFile = "$localFile.__tmp_download"
        & curl.exe --silent --show-error --ftp-method nocwd --user "$FtpUser`:$FtpPassword" --output $tmpFile "ftp://$FtpHost/$remoteFile"
        if ($LASTEXITCODE -ne 0) {
            if (Test-Path -LiteralPath $tmpFile) {
                Remove-Item -LiteralPath $tmpFile -Force
            }
            throw "FTP file download failed: $remoteFile"
        }

        Move-Item -LiteralPath $tmpFile -Destination $localFile -Force
        $downloaded++
    }
}

Write-Host "Done. Dirs processed: $dirsProcessed, downloaded: $downloaded, skipped by size: $skipped"
