<?php
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
        <div class="row">
          <h1>ANYAD</h1>
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