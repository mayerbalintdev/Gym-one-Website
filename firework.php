<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tüzijáték</title>
    <script src="https://cdn.jsdelivr.net/npm/fireworks-js@2.x/dist/index.umd.js"></script>
</head>

<body>
    <div class="fireworks"></div>
    <script>
        const container = document.querySelector('.fireworks');
        const fireworks = new Fireworks.default(container, {
            autoresize: true,
            opacity: 0.5,
            acceleration: 1.05,
            friction: 0.97,
            gravity: 1.5,
            particles: 50,
            traceLength: 3,
            traceSpeed: 10,
            explosion: 5,
            intensity: 30,
            flickering: 50,
            lineStyle: 'round',
            hue: {
                min: 0,
                max: 360
            }
        })
        fireworks.start();

        // Tüzijáték 5 másodpercig
        setTimeout(() => {
            fireworks.stop();
        }, 5000);
    </script>
</body>

</html>