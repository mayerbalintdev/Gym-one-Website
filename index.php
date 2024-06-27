<?php
session_start();
// DEF INFO
$github_url = "https://github.com/mayerbalintdev/";
$discord_url = "https://discord.gg/h5GSPtKPdc";

$langDir = __DIR__ . "/assets/lang/";
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
$target_date = new DateTime('2025-01-11 00:00:00');

$current_date = new DateTime();
$interval = $current_date->diff($target_date);

$days = $interval->days;
$hours = $interval->h;
$minutes = $interval->i;
?>

<!DOCTYPE html>
<html lang="hu">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GYMOne - <?php echo $translations['mainpage']; ?></title>
<link rel="stylesheet" href="assets/css/style.css">
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
<meta name="twitter:title" content="Home">
<meta name="twitter:description"
  content="GYM One is an open source web solution for gyms. Enjoy dozens of extensions for endless possibilities. Already trusted by more than 20 gyms with over 900 users.">
<meta name="twitter:image" content="http://gymoneglobal.com/assets/img/logo.png">

<meta property="og:title" content="Homepage">
<meta property="og:type" content="website">
<meta property="og:url" content="http://gymoneglobal.com/">
<meta property="og:site_name" content="GYM One">
<meta property="og:description"
  content="GYM One is an open source web solution for gyms. Enjoy dozens of extensions for endless possibilities. Already trusted by more than 20 gyms with over 900 users.">
<meta property="og:image" content="http://gymoneglobal.com/assets/img/logo.png">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-75NV275ZQS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'G-75NV275ZQS');
</script>

<body>
  <!-- NAVBAR START -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary-gradient">
    <div class="container">
      <a class="navbar-brand" href="https://gymoneglobal.com">
        <img src="assets/img/text-logo.png" width="105" alt="GYM One">
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
        <h1 class="mb-3 fw-semibold"><?php echo $translations["heromain"]; ?></h1>
        <h2 class="lead mb-4 fs-4"><?php echo $translations['herotext']; ?></h2>
      </div>
      <div class="row text-center">
        <div class="col">
          <a class="btn d-none btn-primary pulse mx-2 mb-4" href="download/"
            role="button"><?php echo $translations['downloadbtn']; ?> <i class="bi bi-rocket-takeoff"></i></a>
          <a class="btn btn-secondary mx-2 mb-4" href="#info" role="button"><i class="bi bi-plus-lg"></i></i>
            <?php echo $translations['secondbtn']; ?></a>
        </div>
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
        <div class="col-xl-6 col-sm-12 text-start">
          <div class="d-inline-block fs-1 lh-1 text-primary bg-primary bg-opacity-25 p-4 rounded-pill">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plugin"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a7 7 0 1 1 2.898 5.673c-.167-.121-.216-.406-.002-.62l1.8-1.8a3.5 3.5 0 0 0 4.572-.328l1.414-1.415a.5.5 0 0 0 0-.707l-.707-.707 1.559-1.563a.5.5 0 1 0-.708-.706l-1.559 1.562-1.414-1.414 1.56-1.562a.5.5 0 1 0-.707-.706l-1.56 1.56-.707-.706a.5.5 0 0 0-.707 0L5.318 5.975a3.5 3.5 0 0 0-.328 4.571l-1.8 1.8c-.58.58-.62 1.6.121 2.137A8 8 0 1 0 0 8a.5.5 0 0 0 1 0">
              </path>
            </svg>

          </div>

          <h2 class="display-6 my-3 fw-semibold">
            <?php echo $translations["oneclick_install"]; ?>
          </h2>

          <p class="lead">
            <?php echo $translations["info-one"]; ?>
          </p>
          <p class="lead">
            <?php echo $translations["info-two"]; ?>
          </p>
        </div>
        <div class="col-xl-5 col-sm-12 align-self-center">
          <div class="d-flex align-items-center mb-2 border rounded p-3">
            <div class="flex-shrink-0 fs-2 text-success rounded-pill ps-1">
              <i class="bi bi-currency-dollar"></i>

            </div>
            <p class="flex-grow-1 ms-3 mb-0">
              <?php echo $translations["one-benefit"]; ?>
            </p>
          </div>

          <div class="d-flex align-items-center mb-2 border rounded p-3">
            <div class="flex-shrink-0 fs-2 text-warning rounded-pill ps-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy"
                viewBox="0 0 16 16">
                <path
                  d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z">
                </path>
              </svg>

            </div>
            <p class="flex-grow-1 ms-3 mb-0">
              <?php echo $translations["two-benefit"]; ?>
            </p>
          </div>

          <div class="d-flex align-items-center mb-2 border rounded p-3">
            <div class="flex-shrink-0 fs-2 text-danger rounded-pill ps-1">
              <i class="bi bi-globe-americas"></i>

            </div>
            <p class="flex-grow-1 ms-3 mb-0">
              <?php echo $translations["three-benefit"]; ?>
            </p>
          </div>

          <div class="d-flex align-items-center mb-2 border rounded p-3">
            <div class="flex-shrink-0 fs-2 text-primary rounded-pill ps-1">
              <i class="bi bi-emoji-smile"></i>

            </div>
            <p class="flex-grow-1 ms-3 mb-0">
              <?php echo $translations["four-benefit"]; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <div class="bg-body-info">
    <svg viewBox="0 0 1000 70" xmlns="http://www.w3.org/2000/svg" fill="url(#gradient)" class="section-waves">
      <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="37%" style="stop-color:rgb(251,123,24);stop-opacity:1" />
          <stop offset="87%" style="stop-color:rgb(9,80,220);stop-opacity:1" />
        </linearGradient>
      </defs>
      <path
        d="M439.407,12.801c-80.921,15.363 -167.082,18.455 -248.277,2.849c-80.448,-15.463 -119.602,-14.391 -191.13,-14.391l0,68.741l1000,0l0,-68.741c-93.992,-8.581 -127.476,35.688 -278.561,19.139c-151.084,-16.548 -201.114,-22.958 -282.035,-7.597l0.003,0Z">
      </path>
    </svg>
  </div> -->
  <!-- 2.resz -->
  <!-- <section id="community">
    <div class="container">
      <div class="row gy-4 justify-content-between text-start">
        <div class="col-md-5 align-self-center">
          <img src="https://GYM.One.com/assets/img/theme.png" alt="Theme" class="img-fluid image-3d rounded-3"
            width="700" height="474">
        </div>

        <div class="col-md-6">
          <div class="d-inline-block fs-1 lh-1 text-success bg-success bg-opacity-25 p-4 rounded-pill">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-person-hearts" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z">
              </path>
            </svg>

          </div>

          <h2 class="display-6 my-3 fw-semibold">
            <?php echo $translations["community-main"]; ?>
          </h2>

          <p class="lead">
            <?php echo $translations["community-secondary"]; ?>
          </p>
          <p class="lead">
            <?php echo $translations["community-third"]; ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-body-worldwide">
    <svg viewBox="0 0 1000 70" xmlns="http://www.w3.org/2000/svg" fill="#E9ECEF" class="section-waves">
      <path
        d="M439.407,12.801c-80.921,15.363 -167.082,18.455 -248.277,2.849c-80.448,-15.463 -119.602,-14.391 -191.13,-14.391l0,68.741l1000,0l0,-68.741c-93.992,-8.581 -127.476,35.688 -278.561,19.139c-151.084,-16.548 -201.114,-22.958 -282.035,-7.597l0.003,0Z">
      </path>
    </svg>
  </div> -->
  <!-- 3.resz -->
  <!-- <section id="worldwide">
    <div class="container">
      <div class="row gy-4 justify-content-between text-start">
        <div class="col-md-4 offset-md-1 align-self-center">
          <img src="assets/img/map.svg" alt="World" class="img-fluid" height="500" width="500">
        </div>

        <div class="col-md-6">
          <div class="d-inline-block fs-1 lh-1 text-info bg-info bg-opacity-25 p-4 rounded-pill">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-globe-americas" viewBox="0 0 16 16">
              <path
                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z">
              </path>
            </svg>

          </div>

          <h2 class="display-6 my-3 fw-semibold">
            <?php echo $translations["worldwide-main"]; ?>
          </h2>

          <p class="lead">
            <?php echo $translations["worldwide-secondary"]; ?>
          </p>
          <p class="lead">
            <?php echo $translations["worldwide-third"]; ?>
          </p>
        </div>
      </div>
    </div>
  </section> -->
  <section id="worldwide">
    <div class="container">
      <div class="row gy-4 justify-content-between text-start">
        <div class="col-md-4 mt-5 offset-md-1 align-self-center">
          <img src="assets/img/map.svg" alt="World" class="img-fluid" height="500" width="500">
        </div>

        <div class="col-md-6">
          <div class="d-inline-block fs-1 lh-1 text-info bg-info bg-opacity-25 p-4 rounded-pill">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-question-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
              <path
                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
            </svg>

          </div>
          <div class="mt-5"></div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <?php echo $translations["first_faq"]; ?>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><?php echo $translations["first_faq-ans"]; ?></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <?php echo $translations["second_faq"]; ?>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><?php echo $translations["second_faq-ans"]; ?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <?php echo $translations["third_faq"]; ?>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample" style="">
                <div class="accordion-body"><?php echo $translations["third_faq-ans"]; ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
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
            <img src="assets/img/text-color-logo.png" alt="GYM.One" height="105">
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