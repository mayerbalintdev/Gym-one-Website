<?php
session_start(); // Session kezdése vagy folytatása

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

// Nyelv beállítás session-ben tárolása
if (isset($_GET['lang']) && file_exists($langDir . "{$_GET['lang']}.json")) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Ha a session-ben van tárolt nyelv, használjuk azt, különben alapértelmezett (HU)
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'HU';
$langFile = $langDir . "$lang.json";

if (file_exists($langFile)) {
    $translations = json_decode(file_get_contents($langFile), true);
} else {
    die("A nyelvi fájl nem található: $langFile");
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMOne - <?php echo $translations['docspage']; ?></title>
    <link rel="stylesheet" href="../assets/css/docs_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR START -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-gradient">
        <div class="container">
            <a class="navbar-brand" href="https://GYM.One.com/en/">
                <img src="../assets/img/logo.png" height="45" width="45" alt="GYM.One">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <?php echo $translations["mainpage"]; ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="download/">
                            <?php echo $translations["downloadpage"]; ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="docs/">
                            <?php echo $translations["docspage"]; ?>
                        </a>
                    </li>

                </ul>


                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo $github_url; ?>" target="_blank" rel="noopener noreferrer" title="GitHub"
                            class="nav-link ps-0 ps-lg-3 pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8">
                                </path>
                            </svg>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $discord_url; ?>" target="_blank" rel="noopener noreferrer" title="Discord"
                            class="nav-link pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-discord" viewBox="0 0 16 16">
                                <path
                                    d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612">
                                </path>
                            </svg>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $twitter_url; ?>" target="_blank" rel="noopener noreferrer" title="Twitter"
                            class="nav-link pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15">
                                </path>
                            </svg>

                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="langDropdown" class="nav-link dropdown-toggle px-3" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/<?php echo strtolower($lang); ?>.svg"
                                class="svg country" alt="<?php echo $lang; ?>">
                        </a>

                        <div class="dropdown-menu dropdown-menu-end locale-selector" aria-labelledby="langDropdown">
                            <?php foreach ($languages as $code => $name): ?>
                                <a class="dropdown-item" href="#" onclick="changeLanguage('<?php echo $code; ?>')">
                                    <img src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/<?php echo strtolower($code); ?>.svg"
                                        class="svg" alt="<?php echo $name; ?>">
                                    <?php echo $translations[$name]; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- CODE START -->
    <main class="container content">

        <div class="row">
            <aside class="col-md-3 col-xl-2 bd-sidebar">
                <nav>
                    <ul class="nav nav-pills flex-column">

                        <li class="nav-item">

                            <a class="nav-link active" href="#">
                                <?php echo $translations["mainpage"]; ?>
                            </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="install/">
                                <?php echo $translations["installpage"]; ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="https://azuriom.com/en/docs/server-link">
                                Server link
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="faq/">
                                <?php echo $translations["faqpage"]; ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="https://azuriom.com/en/docs/api-auth">
                                Auth API
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="https://azuriom.com/en/docs/update">
                                Azuriom 1.0
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="https://azuriom.com/en/docs/games">
                                Custom games
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="https://azuriom.com/en/docs/mails">
                                Mails
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="https://azuriom.com/en/docs/plugins">
                                Plugins
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="https://azuriom.com/en/docs/themes">
                                Themes
                            </a>
                        </li>


                    </ul>
                </nav>
            </aside>

            <main class="col-md-9 col-xl-9 markdown-content">
                <h1 id="home"><?php echo $translations["mainpage"]; ?></h1>
                <h2 id="introduction">
                    <a class="heading-permalink" href="#introduction"></a><?php echo $translations["introduction"]; ?>
                </h2>
                <p><?php echo $translations["introduction_first"]; ?></p>
                <p><?php echo $translations["introduction_second"]; ?></p>
                <p><?php echo $translations["introduction_third"]; ?></p>
                <h2 id="credits">
                    <a class="heading-permalink" href="#credits"></a><?php echo $translations["credits"]; ?>
                </h2>
                <p><?php echo $translations["credits_first"]; ?></p>
                <h3 id="donors">
                    <a class="heading-permalink" href="#donors"></a><?php echo $translations["donors"]; ?>
                </h3>
                <p><?php echo $translations["donors_first"]; ?>
                </p>
            </main>
        </div>

    </main>

    <div class="footer-waves">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 8" fill="#252525">
            <path opacity="0.7" d="M0 8 V8 C20 0, 40 0, 60 8 V8z"></path>
            <path d="M0 8 V5 Q25 10 55 5 T100 4 V8z"></path>
        </svg>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4 mb-1">
                    <h2 class="mb-4">
                        <img src="https://GYM.One.com/assets/svg/logo-text.svg" alt="GYM.One" height="50">
                    </h2>

                    <p><?php echo $translations["herotext"]; ?></p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h2 class="text-light mb-4"></h2>
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
                        <li><a href="support/"><?php echo $translations["support-us"]; ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="border-top border-secondary pt-3 mt-3">
                <p class="small text-center mb-0">
                    Copyright © 2024 GYM One - <?php echo $translations["copyright"]; ?>. &nbsp;<svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>