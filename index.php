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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets/img/logo.png" width="80px" class="img img-fluid" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><?php echo $translations['mainpage']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $translations['downloadpage']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $translations['docspage']; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1>ANYAD</h1>
      </div>
      <div class="row text-center">
        <div class="col">
          <a class="btn btn-primary pulse" href="/download" role="button"><?php echo $translations['downloadbtn']; ?><i class="bi bi-rocket"></i></a>
          <a class="btn btn-secondary" href="#info" role="button"><i class="bi bi-rocket"></i><?php echo $translations['secondbtn']; ?></a>
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
          <div class="col-5">
            <h2><?php echo $translations['oneclick_install']; ?></h2>
            <p>ASD</p>
          </div>
          <div class="col-5 align-self-center">
            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-info rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
                  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z"></path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                1
              </p>
            </div>

            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-warning rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                  <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                2
              </p>
            </div>

            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-success rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-heart" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.965 12.695a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2m-.8 3.108.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125ZM8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"></path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                Build a community by engaging your players with a feature-rich forum.
              </p>
            </div>

            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-primary rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                There are dozens of other extensions on the market. Surely you will find what you need.
              </p>
            </div>

            <div class="d-flex align-items-center mb-2 border rounded p-3">
              <div class="flex-shrink-0 fs-2 text-danger rounded-pill ps-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"></path>
                  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"></path>
                </svg>

              </div>
              <p class="flex-grow-1 ms-3 mb-0">
                Nobody wants a boringly designed website. Choose one of our many themes to make your site stand out.
              </p>
            </div>
          </div>
        </div>

      </section>
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