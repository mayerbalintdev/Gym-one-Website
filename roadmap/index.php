<?php
session_start();
// DEF INFO
$github_url = "https://github.com/mayerbalintdev/";
$discord_url = "https://discord.gg/h5GSPtKPdc";

$langDir = __DIR__ . "/../assets/lang/";
$langFiles = glob($langDir . "*.json");
$languages = [];

foreach ($langFiles as $file) {
    $code = strtoupper(pathinfo($file, PATHINFO_FILENAME));
    $languages[$code] = $code;
}

if (isset($_GET['lang']) && file_exists($langDir . "{$_GET['lang']}.json")) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'GB';
$langFile = $langDir . "$lang.json";

if (file_exists($langFile)) {
    $translations = json_decode(file_get_contents($langFile), true);
} else {
    die("A nyelvi fájl nem található: $langFile");
}
?>

<?php
$target_date = new DateTime('2025-10-10 10:10:00');

$current_date = new DateTime();
$interval = $current_date->diff($target_date);

$days = $interval->days;
$hours = $interval->h;
$minutes = $interval->i;

function convertNumPlaceholder($input)
{
    $conversion = array(
        'num' => '<strong>1</strong>'
    );

    foreach ($conversion as $from => $to) {
        $input = str_replace($from, $to, $input);
    }

    return $input;
}

$input_string = $translations["worldwide-main"];
$output_string = convertNumPlaceholder($input_string);
?>



<!DOCTYPE html>
<html lang="hu">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GYMOne - <?php echo $translations['contactpage']; ?></title>
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="shortcut icon" href="http://gymoneglobal.com/assets/img/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="shortcut icon" href="https://gymoneglobal.com/assets/img/logo.png" type="image/x-icon">

<meta name="description"
    content="GYM One is an open source web solution for gyms. Enjoy dozens of extensions for endless possibilities. Already trusted by more than 20 gyms with over 900 users.">
<meta name="keywords"
    content="open-source, free gym software, GYM One, fitness studio management, client management, booking system, financial tracking, gym software, fitness club management, personal trainer software, sports club management, membership management, gym administration, digital gym, fitness app, gymnasium software, online booking, comprehensive fitness management, workout tracking, membership system">
<meta name="author" content="GYMOne">
<meta name="theme-color" content="#004de6">
<link rel="icon" href="http://gymoneglobal.com/assets/img/logo.png">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@GYMOne">
<meta name="twitter:creator" content="@GYMOne">
<meta name="twitter:title" content="Contact">
<meta name="twitter:description"
    content="GYM One is an open source web solution for gyms. Enjoy dozens of extensions for endless possibilities. Already trusted by more than 20 gyms with over 900 users.">
<meta name="twitter:image" content="http://gymoneglobal.com/assets/img/logo.png">

<meta property="og:title" content="Contact">
<meta property="og:type" content="website">
<meta property="og:url" content="http://gymoneglobal.com/contact">
<meta property="og:site_name" content="GYM One">
<meta property="og:description"
    content="GYM One is an open source web solution for gyms. Enjoy dozens of extensions for endless possibilities. Already trusted by more than 20 gyms with over 900 users.">
<meta property="og:image" content="http://gymoneglobal.com/assets/img/logo.png">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-75NV275ZQS"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-75NV275ZQS');
</script>

<body>
    <!-- NAVBAR START -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-gradient">
        <div class="container">
            <a class="navbar-brand" href="https://gymoneglobal.com">
                <img src="../assets/img/text-logo.png" width="105" alt="GYM One">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../">
                            <?php echo $translations["mainpage"]; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <?php echo $translations["contactpage"]; ?>
                        </a>
                    </li>

                    <li class="d-none nav-item">
                        <a class="nav-link " href="download/">
                            <?php echo $translations["downloadpage"]; ?>
                        </a>
                    </li>

                    <li class="d-none nav-item">
                        <a class="nav-link " href="docs/">
                            <?php echo $translations["docspage"]; ?>
                        </a>
                    </li>

                </ul>


                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo $github_url; ?>" target="_blank" rel="noopener noreferrer" title="GitHub"
                            class="nav-link ps-0 ps-lg-3 pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8">
                                </path>
                            </svg>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $discord_url; ?>" target="_blank" rel="noopener noreferrer" title="Discord"
                            class="nav-link pe-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612">
                                </path>
                            </svg>

                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="langDropdown" class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img
                                src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/<?php echo strtolower($lang); ?>.svg"
                                class="svg country" alt="<?php echo $lang; ?>">
                        </a>

                        <div class="dropdown-menu dropdown-menu-end locale-selector" aria-labelledby="langDropdown">
                            <?php foreach ($languages as $code => $name): ?>
                                <a class="dropdown-item" href="#" onclick="changeLanguage('<?php echo $code; ?>')">
                                    <img
                                        src="https://raw.githubusercontent.com/lipis/flag-icons/main/flags/4x3/<?php echo strtolower($code); ?>.svg"
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
    <div class="container">
        <div class="row text-center">
            <div class="mt-5"></div>
            <div class="col-md-8 mx-auto text-center mb-5">
                <h1 class="mb-3 fw-semibold"><?php echo $translations["developerroadmap"]; ?></h1>
            </div>
            <div class="row">
                <div class="col">
                    <a href="<?php echo $github_url; ?>" target="_blank" class="btn"><i class="bi bi-github"></i></a>
                    <a href="<?php echo $discord_url; ?>" target="_blank" class="btn"><i class="bi bi-discord"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-waves">
        <svg viewBox="0 0 1000 90" xmlns="http://www.w3.org/2000/svg" fill="#E9ECEF">
            <path
                d="M1000,53.893c-5.811,-2.777 -11.849,-5.257 -17.717,-7.315c-23.556,-8.258 -53.919,-11.928 -80.808,-7.291c-41.443,7.191 -64.629,31.319 -104.135,41.089c-34.75,8.58 -75.994,4.563 -111.713,-2.802c-69.471,-14.333 -135.695,-31.021 -212.601,-27.525c-42.156,1.91 -82.887,9.621 -120.03,20.334c-38.31,11.059 -83.684,26.458 -127.805,14.457c-37.541,-10.242 -57.081,-32.757 -91.831,-45.131c-25.977,-9.249 -59.189,-12.572 -89.752,-9.001c-15.694,1.834 -30.591,5.504 -43.608,10.563l0,48.9l1000,0l0,-36.278Z">
            </path>
            <path opacity="0.4"
                d="M438.248,90c-2.421,-1.652 -4.843,-3.276 -7.235,-4.899c-57.281,-38.168 -126.211,-57.85 -194.571,-55.629c-64.8,2.137 -127.179,24.439 -180.956,60.5l382.762,0l0,0.028Z">
            </path>
            <path opacity="0.4"
                d="M1000,71.314c-33.468,-27.125 -68.794,-47.564 -113.741,-40.658c-31.731,4.874 -56.619,23.28 -84.533,36.369c-36.259,16.988 -64.686,-4.706 -97.129,-19.299c-43.779,-19.661 -97.869,-14.314 -136.92,13.534c-12.077,8.633 -23.641,19.494 -35.662,28.74l467.985,0l0,-18.686Z">
            </path>
            <path opacity="0.4"
                d="M1000,55.451c-6.152,-0.666 -23.544,14.253 -29.988,14.674c-20.793,1.356 -29.337,-14.373 -50.256,-10.473c-20.105,3.748 -35.599,13.315 -56.192,16.151c-7.911,1.088 -15.664,1.488 -23.289,1.324c-58.588,-1.26 -109.545,-35.852 -165.699,-47.943c-57.509,-12.383 -118.435,-1.678 -174.263,15.441c-27.043,8.287 -54.505,18.167 -82.231,25.125c-30.532,7.662 -61.384,11.78 -92.344,6.325c-41.586,-7.326 -76.393,-31.056 -114.817,-46.645c-68.105,-27.676 -140.424,-27.059 -210.921,-13.665l0,73.95l1000,0l0,-34.264Z">
            </path>
        </svg>
    </div>
    <section id="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row mt-5">
                    <?php
                    $roadmap = [
                        'Q3' => [
                            'title' => '2024 Q3',
                            'tasks' => [
                                [
                                    'name' => $translations["quateronefirst"],
                                    'details' => [
                                        $translations["quateronefirsttextone"],
                                        $translations["quateronefirsttexttwo"],
                                        $translations["quateronefirsttexttree"]
                                    ],
                                    'completed' => true
                                ],
                                [
                                    'name' => $translations["quateronesecond"],
                                    'details' => [
                                        $translations["quateronesecondtextone"],
                                        $translations["quateronesecondtexttwo"]
                                    ],
                                    'completed' => true
                                ],
                                [
                                    'name' => $translations["quateronethird"],
                                    'details' => [
                                        $translations["quateronethirdtextone"]
                                    ],
                                    'completed' => true
                                ],
                                [
                                    'name' => $translations["quateronefourth"],
                                    'details' => [
                                        $translations["quateronefourthtextone"]
                                    ],
                                    'completed' => true
                                ],
                            ],
                        ],
                        'Q4' => [
                            'title' => '2024 Q4',
                            'tasks' => [
                                [
                                    'name' => $translations["quatertwofirst"],
                                    'details' => [
                                        $translations["quatertwofisttextone"],
                                        $translations["quatertwofirsttexttwo"]
                                    ],
                                    'completed' => false
                                ],
                                [
                                    'name' => $translations["quatertwosecond"],
                                    'details' => [
                                        $translations["quatertwosecondtextone"],
                                        $translations["quatertwosecondtexttwo"]
                                    ],
                                    'completed' => false
                                ],
                                [
                                    'name' => $translations["quatertwothird"],
                                    'details' => [
                                        $translations["quatertwothirdtextone"],
                                        $translations["quatertwothirdtexttwo"]
                                    ],
                                    'completed' => false
                                ],
                                [
                                    'name' => $translations["quatertwofourth"],
                                    'details' => [
                                        $translations["quatertwofourthtextone"],
                                        $translations["quatertwofourthtexttwo"]
                                    ],
                                    'completed' => false
                                ],
                            ],
                        ],
                        'Q1' => [
                            'title' => '2025 Q1',
                            'tasks' => [
                                [
                                    'name' => $translations["quaterthreefirst"],
                                    'details' => [
                                        $translations["quaterthreefirsttextone"],
                                        $translations["quaterthreefirsttexttwo"]
                                    ],
                                    'completed' => false
                                ],
                                [
                                    'name' => $translations["quaterthreesecond"],
                                    'details' => [
                                        $translations["quaterthreesecondtextone"],
                                        $translations["quaterthreesecondtexttwo"]
                                    ],
                                    'completed' => false
                                ],
                                [
                                    'name' => $translations["quaterthreethird"],
                                    'details' => [
                                        $translations["quaterthreethirdtextone"],
                                        $translations["quaterthreethirdtexttwo"]
                                    ],
                                    'completed' => false
                                ],
                            ],
                        ],
                        'Q2' => [
                            'title' => '2025 Q2',
                            'tasks' => [
                                [
                                    'name' => $translations["quaterfourfirst"],
                                    'details' => [
                                        $translations["quaterfourfirsttextone"],
                                        $translations["quaterfourfirsttexttwo"]
                                    ],
                                    'completed' => false
                                ],
                                [
                                    'name' => $translations["quaterfoursecond"],
                                    'details' => [
                                        $translations["quaterfoursecondtextone"],
                                        $translations["quaterfoursecondtexttwo"]
                                    ],
                                    'completed' => false
                                ],
                                [
                                    'name' => $translations["quaterfourthird"],
                                    'details' => [
                                        $translations["quaterfourthirdtextone"],
                                        $translations["quaterfourthirdtexttwo"]
                                    ],
                                    'completed' => false
                                ],
                            ],
                        ],
                    ];



                    foreach ($roadmap as $quarter => $data) {
                        echo '<div class="col-md-3 mb-4">';
                        echo '<div class="card h-100 border-primary shadow-sm">';
                        echo '<div class="card-header bg-primary text-white text-center font-weight-bold">' . htmlspecialchars($data['title']) . '</div>';
                        echo '<div class="card-body">';
                        echo '<ul class="list-group list-group-flush">';
                        foreach ($data['tasks'] as $task) {
                            $status = $task['completed'] ? '<span class="text-success">&#10003;</span>' : '<span class="text-danger">&#10007;</span>';
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            echo '<div>';
                            echo '<strong>' . htmlspecialchars($task['name']) . '</strong>';
                            foreach ($task['details'] as $detail) {
                                echo '<br><small class="text-muted">' . htmlspecialchars($detail) . '</small>';
                            }
                            echo '</div>';
                            echo '<div>' . $status . '</div>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>

                </div>
    </section>
    <!-- FOOTER -->
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
                        <img src="../assets/img/text-color-logo.png" alt="GYM.One" height="105">
                    </h2>

                    <p><?php echo $translations["herotext"]; ?></p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h2 class="text-light mb-4"></h2>
                </div>

                <div class="col-md-2 offset-md-1">
                    <h2 class="text-light mb-4"><?php echo $translations["links"]; ?></h2>

                    <ul class="list-unstyled links">
                        <li><a href="<?php echo $github_url; ?>" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                        <li><a href="<?php echo $discord_url; ?>" target="_blank" rel="noopener noreferrer">Discord</a></li>
                        <li class="d-none"><a href="support/"><?php echo $translations["support-us"]; ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="border-top border-secondary pt-3 mt-3">
                <p class="small text-center mb-0">
                    Copyright © 2024 GYM One - <?php echo $translations["copyright"]; ?>. &nbsp;<svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill"
                        viewBox="0 0 16 16">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>