<?php
session_start(); // Session kezdése vagy folytatása

// DEF INFO
$github_url = "https://github.com/mayerbalintdev/";
$discord_url = "";
$twitter_url = "";

$langDir = __DIR__ . "/../../assets/lang/";
$langFiles = glob($langDir . "*.json");
$languages = [];

foreach ($langFiles as $file) {
    $code = strtoupper(pathinfo($file, PATHINFO_FILENAME));
    $languages[$code] = $code;
}

if (isset($_GET['lang']) && file_exists($langDir . "{$_GET['lang']}.json")) {
    $_SESSION['lang'] = $_GET['lang'];
}

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
    <link rel="stylesheet" href="../../assets/css/docs_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://gymoneglobal.com/assets/img/logo.png" type="image/x-icon">
</head>

<body>
    <!-- NAVBAR START -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-gradient">
        <div class="container">
            <a class="navbar-brand" href="../../">
                <img src="../../assets/img/logo.png" height="45" width="45" alt="GYM.One">
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

                            <a class="nav-link" href="../">
                                <?php echo $translations["mainpage"]; ?>
                            </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="../install/">
                                <?php echo $translations["installpage"]; ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <?php echo $translations["translatepage"]; ?>
                            </a>
                        </li>

                    </ul>
                </nav>
            </aside>

            <main class="col-md-9 col-xl-9 markdown-content">
                <h1 id="translate"><?php echo $translations["translatepage"]; ?></h1>
                <h2 id="howhelp">
                    <a class="heading-permalink" href="#howhelp"></a><?php echo $translations["translatehowto"]; ?>
                </h2>
                <blockquote class="alert alert-secondary d-flex align-items-center documentation-alert">
                    <div class="flex-shrink-0">
                        <div class="fs-3 lh-1 text-danger border border-danger border-2 p-3 rounded-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                <path
                                    d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z">
                                </path>
                                <path
                                    d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z">
                                </path>
                            </svg>

                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3 text-body"><?php echo $translations["translatewar"]; ?></div>
                </blockquote>
                <p><?php echo $translations["crowdininfo"]; ?></p>
                <ol>
                    <li>
                        <p><?php echo $translations["translatefirst"]; ?></p>
                    </li>
                    <li>
                        <p><?php echo $translations["translatesecond"]; ?></p>
                    </li>
                    <li>
                        <p><?php echo $translations["translatethird"]; ?></p>
                    </li>
                    <li>
                        <p><?php echo $translations["translatefourth"]; ?></p>
                        <p><?php echo $translations["translatefourthlangs"]; ?></p>
                        <div class="row alert bg-secondary">
                            <?php
                            $file_path = 'langs.txt';

                            if (file_exists($file_path)) {
                                $language_codes = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                                $halfway_point = ceil(count($language_codes) / 2);
                                $first_half = array_slice($language_codes, 0, $halfway_point);
                                $second_half = array_slice($language_codes, $halfway_point);

                                foreach ($first_half as $code) {
                                    echo '<div class="col">';
                                    echo '<img class="img img-fluid" src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/' . strtolower($code) . '.svg">';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>

                        <div class="row alert bg-secondary">
                            <?php
                            if (file_exists($file_path)) {
                                foreach ($second_half as $code) {
                                    echo '<div class="col">';
                                    echo '<img class="img img-fluid" src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/' . strtolower($code) . '.svg">';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <p><?php echo $translations["translatefifth"]; ?></p>
                    </li>
                    <li>
                        <p><?php echo $translations["translatesixth"]; ?></p>
                    </li>
                    <li>
                        <p><b><?php echo $translations["translateseventh"]; ?></b></p>
                    </li>
                </ol>

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
                        <img src="../../assets/img/text-color-logo.png" alt="GYM.One" height="105">
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
                        <li class="d-none"><a href="support/"><?php echo $translations["support-us"]; ?></a></li>
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