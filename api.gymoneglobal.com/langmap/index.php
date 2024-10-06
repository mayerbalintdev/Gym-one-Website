<!DOCTYPE html>
<html>

<head>
    <title>Országok Színezése</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Google Charts betöltése
        google.charts.load('current', {
            'packages': ['geochart'],
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
            // Országok és színezési értékek (0-100)
            var data = google.visualization.arrayToDataTable([
                ['Country', 'Fordítások (0-100%)'],
                ['HU', 100],
                ['SK', 0],
                ['RO', 13],
                ['GB', 100],
                ['DE', 70],
                ['AT', 100],
                ['CH', 100],
                ['US', 100],
                ['IT', 9],
                ['TR', 3],
                ['DZ', 5],
                ['BH', 5],
                ['DJ', 5],
                ['EG', 5],
                ['ER', 5],
                ['IQ', 5],
                ['IL', 5],
                ['JO', 5],
                ['KW', 5],
                ['LB', 5],
                ['LY', 5],
                ['MA', 5],
                ['MR', 5],
                ['OM', 5],
                ['QA', 5],
                ['SA', 5],
                ['SD', 5],
                ['SY', 5],
                ['TN', 5],
                ['AE', 5],
                ['YE', 5],


            ]);

            var options = {
                colorAxis: {
                    colors: ['#ffffff', '#0950DC']
                }, // Fehérből Sötétkék
                region: "150",
                backgroundColor: '#ADD8E6', // Világoskék háttér
                datalessRegionColor: '#fffff', // Országok, amik nincsenek megadva
                defaultColor: '#f5f5f5', // Alapértelmezett szín
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="regions_div" style="width: auto; height: 800px;"></div>
</body>

</html>