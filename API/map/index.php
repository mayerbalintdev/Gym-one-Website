<?php
// JSON fájl betöltése
$jsonData = file_get_contents('locations.json');
$locations = json_decode($jsonData, true);

// Függvény a geokódolási kéréshez cURL-lel
function geocodeAddress($address) {
    $geocodeUrl = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($address);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $geocodeUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; cURL)');
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Geokódolás végrehajtása a címekre
foreach ($locations as &$location) {
    $geocodeData = geocodeAddress($location['address']);
    if (!empty($geocodeData)) {
        $location['lat'] = $geocodeData[0]['lat'];
        $location['lon'] = $geocodeData[0]['lon'];
    } else {
        $location['lat'] = null;
        $location['lon'] = null;
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Screen Map with Custom Markers using OpenStreetMap</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* A térkép teljes képernyős megjelenítése */
        html, body {
            height: 100%;
            margin: 0;
        }
        #map {
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Inicializáljuk a térképet
        var map = L.map('map').setView([47.1625, 19.5033], 8); // Magyarország középpontja

        // OpenStreetMap csempék hozzáadása
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var customIcon = L.icon({
            iconUrl: 'https://gymoneglobal.com/assets/img/logo.png', // Saját logó URL-je
            iconSize: [50, 50], // Logó mérete
            iconAnchor: [25, 50], // Az ikon pozíciója
            popupAnchor: [0, -50] // Popup elhelyezése az ikonhoz képest
        });

        // Címek feldolgozása és marker-ek hozzáadása
        var locations = <?php echo json_encode($locations); ?>;
        locations.forEach(function(location) {
            if (location.lat && location.lon) {
                var latLng = [location.lat, location.lon];
                var marker = L.marker(latLng, { icon: customIcon }).addTo(map)
                    .bindPopup('<b>' + location.name + '</b><br>' + location.address);
            } else {
                console.error('Geocode was not successful for the following address: ' + location.address);
            }
        });
    </script>
</body>
</html>
