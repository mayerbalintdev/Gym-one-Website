<?php
// GitHub repository URL
$repo_url = 'https://api.github.com/repos/mayerbalintdev/Gym-one-Website/releases/latest';

// Lekérdezés küldése a GitHub API-hoz
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $repo_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP');

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Ellenőrzés a válasz kódjára
if ($httpcode == 200) {
    // JSON válasz feldolgozása
    $data = json_decode($response);

    // Legfrissebb verziószám kinyerése
    $latest_version = $data->tag_name;

    // Legfrissebb verziószám megjelenítése
    echo "A legfrissebb verzió: $latest_version";
} else {
    // Hiba esetén hibaüzenet megjelenítése
    echo "Hiba történt a GitHub API lekérdezése közben.";
}
?>
