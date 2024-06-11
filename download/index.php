<?php
// DEF INFO

$github_url = "https://github.com/mayerbalintdev/";
$discord_url = "";
$twitter_url = "";

$langDir = __DIR__ . "/../assets/lang/";
$langFiles = glob($langDir . "*.json");
$languages = [];

foreach ($langFiles as $file) {
    $code = strtoupper(pathinfo($file, PATHINFO_FILENAME));
    $languages[$code] = $code;
}

$lang = 'HU';
if (isset($_GET['lang']) && file_exists($langDir . "{$_GET['lang']}.json")) {
    $lang = $_GET['lang'];
}

$langFile = $langDir . "$lang.json";
if (file_exists($langFile)) {
    $translations = json_decode(file_get_contents($langFile), true);
} else {
    die("A nyelvi fájl nem található: $langFile");
}
?>
<?php
// GitHub repository URL
$repo_url = 'https://api.github.com/repos/mayerbalintdev/Gym-one/releases/latest';

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
} else {
    $latest_version = "Nincsen kiadás";
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMOne - <?php echo $translations['downloadpage']; ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR START -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-gradient">
        <div class="container">
            <a class="navbar-brand" href="https://GYM.One.com/en/">
                <img src="assets/img/logo.png" height="45" width="45" alt="GYM.One">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://GYM.One.com/en/">
                            <?php echo $translations["mainpage"]; ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="https://GYM.One.com/en/download">
                            <?php echo $translations["downloadpage"]; ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="https://GYM.One.com/en/docs">
                            <?php echo $translations["docspage"]; ?>
                        </a>
                    </li>

                </ul>


                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a href="https://market.GYM.One.com/profile" title="Login" class="nav-link ps-0 ps-lg-3 pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1">
                                </path>
                            </svg>

                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="https://github.com/GYM.One" target="_blank" rel="noopener noreferrer" title="GitHub" class="nav-link ps-0 ps-lg-3 pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8">
                                </path>
                            </svg>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://GYM.One.com/discord" target="_blank" rel="noopener noreferrer" title="Discord" class="nav-link pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612">
                                </path>
                            </svg>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/GYM.One" target="_blank" rel="noopener noreferrer" title="Twitter" class="nav-link pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15">
                                </path>
                            </svg>

                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="langDropdown" class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/<?php echo strtolower($lang); ?>.svg" class="svg country" alt="<?php echo $lang; ?>">
                        </a>

                        <div class="dropdown-menu dropdown-menu-end locale-selector" aria-labelledby="langDropdown">
                            <?php foreach ($languages as $code => $name) : ?>
                                <a class="dropdown-item" href="#" onclick="changeLanguage('<?php echo $code; ?>')">
                                    <img src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/<?php echo strtolower($code); ?>.svg" class="svg" alt="<?php echo $name; ?>">
                                    <?php echo $translations[$name]; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-7 offset-md-2">
                <h1 class="display-3 fw-semibold mb-4">GYM One - <?php echo $translations["download"]; ?></h1>

                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 fs-3 lh-1 text-warning bg-warning bg-opacity-25 p-3 rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                            <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1">
                            </path>
                        </svg>

                    </div>
                    <p class="flex-grow-1 lead ms-3 mb-0">
                        <?php echo $translations["install-one"]; ?>
                    </p>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 fs-3 lh-1 text-primary bg-primary bg-opacity-25 p-3 rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612">
                            </path>
                        </svg>

                    </div>
                    <p class="flex-grow-1 lead ms-3 mb-0">
                        <?php echo $translations["install-two"]; ?>
                    </p>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 fs-3 lh-1 text-success bg-success bg-opacity-25 p-3 rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                            <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434m6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434">
                            </path>
                        </svg>

                    </div>
                    <p class="flex-grow-1 lead ms-3 mb-0">
                        <?php echo $translations["install-three"]; ?>
                    </p>
                </div>

                <a href="https://github.com/GYM.One/GYM.OneInstaller/releases/latest/download/GYM.OneInstaller.zip" target="_blank" class="btn btn-lg btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5">
                        </path>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                        </path>
                    </svg>
                    <span class="version">GYM One - <?php echo $latest_version; ?></span>
                </a>
            </div>
        </div>
        <!-- FOOTER -->
    </div>
    <div class="footer pt-5 pb-3">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4 mb-1">
                    <h2 class="mb-4">
                        <img src="../assets/img/logo.png" alt="GYM.One" height="50">
                    </h2>

                    <p><?php echo $translations["herotext"]; ?></p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h2 class="text-light mb-4">Our Partner</h2>
                </div>

                <div class="col-md-2 offset-md-1">
                    <h2 class="text-light mb-4"><?php echo $translations["links"]; ?></h2>

                    <ul class="list-unstyled links">
                        <li><a href="<?php echo $github_url; ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </li>
                        <li><a href="<?php echo $discord_url; ?>" target="_blank" rel="noopener noreferrer">Discord</a>
                        </li>
                        <li><a href="<?php echo $twitter_url; ?>" target="_blank" rel="noopener noreferrer">Twitter</a>
                        </li>
                        <li><a href="/support-us"><?php echo $translations["support-us"]; ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="border-top border-secondary pt-3 mt-3">
                <p class="small text-center mb-0">
                    Copyright © 2024 GYM One - <?php echo $translations["copyright"]; ?>. &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314">
                        </path>
                    </svg>
                    - <a href="https://www.mayerbalint.hu/">Mayer Bálint</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        function changeLanguage(lang) {
            window.location.href = '?lang=' + lang;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>