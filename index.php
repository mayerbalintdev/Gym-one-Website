<?php
// DEF INFO

$github_url = "";
$discord_url = "";
$twitter_url = "";


$lang = 'HU';
if (isset($_GET['lang']) && file_exists(__DIR__ . "/assets/lang/{$_GET['lang']}.json")) {
  $lang = $_GET['lang'];
}

$langFile = __DIR__ . "/assets/lang/$lang.json";
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
  <title>GYMOne - <?php echo $translations['mainpage']; ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!-- NAVBAR START -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary-gradient">
    <div class="container">
      <a class="navbar-brand" href="https://GYM.One.com/en/">
        <img src="assets/img/logo.png" height="45" width="45" alt="GYM.One">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="https://GYM.One.com/en/">
              Home
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="https://GYM.One.com/en/download">
              Download
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="https://GYM.One.com/en/docs">
              Docs
            </a>
          </li>

        </ul>


        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-3">
            <a href="https://market.GYM.One.com/profile" title="Login" class="nav-link ps-0 ps-lg-3 pe-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1">
                </path>
              </svg>

            </a>
          </li>

          <li class="nav-item">
            <a href="https://github.com/GYM.One" target="_blank" rel="noopener noreferrer" title="GitHub"
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
            <a href="https://GYM.One.com/discord" target="_blank" rel="noopener noreferrer" title="Discord"
              class="nav-link pe-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord"
                viewBox="0 0 16 16">
                <path
                  d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612">
                </path>
              </svg>

            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/GYM.One" target="_blank" rel="noopener noreferrer" title="Twitter"
              class="nav-link pe-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
                viewBox="0 0 16 16">
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15">
                </path>
              </svg>

            </a>
          </li>

          <li class="nav-item dropdown">
            <a id="langDropdown" class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="https://GYM.One.com/assets/svg/country/us.svg" class="svg country" alt="English">
            </a>

            <div class="dropdown-menu dropdown-menu-end locale-selector" aria-labelledby="langDropdown">

              <a class="dropdown-item" data-locale="fr" href="https://GYM.One.com/fr/">
                <img src="https://GYM.One.com/assets/svg/country/fr.svg" class="svg" alt="Français">
                Français
              </a>

              <a class="dropdown-item" data-locale="tr" href="https://GYM.One.com/tr/">
                <img src="https://GYM.One.com/assets/svg/country/tr.svg" class="svg" alt="Türkçe">
                Türkçe
              </a>

              <a class="dropdown-item" data-locale="cs" href="https://GYM.One.com/cs/">
                <img src="https://GYM.One.com/assets/svg/country/cz.svg" class="svg" alt="Čeština">
                Čeština
              </a>

              <a class="dropdown-item" data-locale="en" href="https://GYM.One.com/en/">
                <img src="https://GYM.One.com/assets/svg/country/us.svg" class="svg" alt="English">
                English
              </a>

              <a class="dropdown-item" data-locale="nl" href="https://GYM.One.com/nl/">
                <img src="https://GYM.One.com/assets/svg/country/nl.svg" class="svg" alt="Nederlands">
                Nederlands
              </a>

              <a class="dropdown-item" data-locale="pt-br" href="https://GYM.One.com/pt-br/">
                <img src="https://GYM.One.com/assets/svg/country/br.svg" class="svg" alt="Português do Brasil">
                Português do Brasil
              </a>

              <a class="dropdown-item" data-locale="de" href="https://GYM.One.com/de/">
                <img src="https://GYM.One.com/assets/svg/country/de.svg" class="svg" alt="Deutsch">
                Deutsch
              </a>

              <a class="dropdown-item" data-locale="pl" href="https://GYM.One.com/pl/">
                <img src="https://GYM.One.com/assets/svg/country/pl.svg" class="svg" alt="Polski">
                Polski
              </a>

              <a class="dropdown-item" data-locale="ru" href="https://GYM.One.com/ru/">
                <img src="https://GYM.One.com/assets/svg/country/ru.svg" class="svg" alt="Русский">
                Русский
              </a>

              <a class="dropdown-item" data-locale="uk" href="https://GYM.One.com/uk/">
                <img src="https://GYM.One.com/assets/svg/country/ua.svg" class="svg" alt="Українська">
                Українська
              </a>

              <a class="dropdown-item" data-locale="zh-cn" href="https://GYM.One.com/zh-cn/">
                <img src="https://GYM.One.com/assets/svg/country/cn.svg" class="svg" alt="简体中文">
                简体中文
              </a>

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
          <a class="btn btn-primary pulse" href="download/" role="button"><?php echo $translations['downloadbtn']; ?><i
              class="bi bi-rocket-takeoff"></i></a>
          <a class="btn btn-secondary" href="#info" role="button"><i
              class="bi bi-rocket"></i><?php echo $translations['secondbtn']; ?></a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="<?php echo $github_url; ?>" class="btn"><i class="bi bi-github"></i></a>
          <a href="<?php echo $discord_url; ?>" class="btn"><i class="bi bi-discord"></i></i></a>
          <a href="<?php echo $twitter_url; ?>" class="btn"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
      <section id="info">
        <div class="row justify-content-center">
          <div class="col-6 text-start">
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
              TEXT
            </p>
            <p class="lead">
              TEXT
            </p>
          </div>
          <div class="col-5 align-self-center">
            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-info rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3"
                  viewBox="0 0 16 16">
                  <path
                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z">
                  </path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                1
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
                2
              </p>
            </div>

            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-success rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-chat-heart" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M2.965 12.695a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2m-.8 3.108.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125ZM8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132">
                  </path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                Build a community by engaging your players with a feature-rich forum.
              </p>
            </div>

            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-primary rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid"
                  viewBox="0 0 16 16">
                  <path
                    d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z">
                  </path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                There are dozens of other extensions on the market. Surely you will find what you need.
              </p>
            </div>

            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-danger rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet"
                  viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z">
                  </path>
                  <path fill-rule="evenodd"
                    d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"></path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                Nobody wants a boringly designed website. Choose one of our many themes to make your site stand out.
              </p>
            </div>
          </div>
        </div>

      </section>
      <div class="mt-5"></div>
      <!-- 2.resz -->
      <section id="community">
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
      </section>
      <div class="mt-5"></div>
      <div class="mt-5"></div>
      <!-- 3.resz -->
      <section id="worldwide">
        <div class="container">
          <div class="row gy-4 justify-content-between text-start">
            <div class="col-md-4 offset-md-1 align-self-center">
              <img src="https://GYM.One.com/assets/svg/map.svg" alt="World" class="img-fluid" height="500" width="500">
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
      </section>
      <!-- FOOTER -->
    </div>
    <div class="footer pt-5 pb-3">
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-4 mb-1">
            <h2 class="mb-4">
              <img src="https://GYM.One.com/assets/svg/logo-text.svg" alt="GYM.One" height="50">
            </h2>

            <p><?php echo $translations["herotext"]; ?></p>
          </div>
          <div class="col-md-3 offset-md-1">
            <h2 class="text-light mb-4">Our Partner</h2>
          </div>

          <div class="col-md-2 offset-md-1">
            <h2 class="text-light mb-4"><?php echo $translations["links"]; ?></h2>

            <ul class="list-unstyled links">
              <li><a href="<?php echo $github_url; ?>" target="_blank" rel="noopener noreferrer">GitHub</a></li>
              <li><a href="<?php echo $discord_url; ?>" target="_blank" rel="noopener noreferrer">Discord</a></li>
              <li><a href="<?php echo $twitter_url; ?>" target="_blank" rel="noopener noreferrer">Twitter</a></li>
              <li><a href="/support-us"><?php echo $translations["support-us"]; ?></a></li>
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