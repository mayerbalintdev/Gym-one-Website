<?php

$username = 'mayerbalintdev';
$repository = 'GYM-One';

$versionFile = 'version.txt';

$url = "https://api.github.com/repos/{$username}/{$repository}/releases/latest";
$options = [
    'http' => [
        'header' => "User-Agent: PHP"
    ]
];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === false) {
    die('Nem sikerült kapcsolódni a GitHub-hoz');
}

$release = json_decode($response, true);

if (isset($release['tag_name'])) {
    $latestVersion = $release['tag_name'];

    file_put_contents($versionFile, $latestVersion);
    echo "Legújabb verziószám sikeresen mentve: {$latestVersion}";
} else {
    echo 'Nem sikerült megszerezni a legújabb verziószámot a GitHub-ról';
}
