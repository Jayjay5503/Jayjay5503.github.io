<?php

$page = "collection";

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case "mikasa":
      $page = "mikasa";
      break;
    case "molten":
      $page = "molten";
      break;
    case "equipment":
      $page = "equipment";
      break;
    case "collection":
      $page = "collection";
      break;
    default:
      header("Location: ?page=collection");
      break;
  }
} else {
  header("Location: ?page=collection");
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/icon.png">
  <link rel="stylesheet" href="style.css">
  <title>
    <?= $page == "mikasa" ? "MIKASA | Volleyball Collection" : ($page == "molten" ? "MOLTEN | Volleyball Collection" : ($page == "equipment" ? "EQUIPMENT | Volleyball Collection" : "Volleyball Collection")) ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light p-0 shadow">
    <a class="navbar-brand d-flex align-items-center ms-3" href="#">
      <img src="img/icon.png" alt="Logo" style="height: 50px; width: 50px;" class="me-2 ms-3">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ms-3"><a class="nav-link" href="?page=collection">Collection</a></li>
        <li class="nav-item ms-3"><a class="nav-link" href="">FIVB</a></li>
        <li class="nav-item ms-3"><a class="nav-link" href="">About</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid d-block d-md-none mt-2">
    <div class="d-flex justify-content-around bg-dark text-white py-2 rounded">
      <a href="?page=mikasa" class="text-white text-decoration-none">Mikasa</a>
      <a href="?page=molten" class="text-white text-decoration-none">Molten</a>
      <a href="?page=equipment" class="text-white text-decoration-none">Equipment</a>
    </div>
  </div>

  <div class="container-fluid mt-3" style="background-color:rgb(199, 195, 195);">
    <div class="row">
      <div class="col-1 col-sm-1 col-md-2 col-lg-3 d-none d-md-block">
        <div class="card shadow p-3 shop-brands-card border-0 rounded-3 h-100" style="background-color: rgb(240, 230, 199);">
          <div class="h2 text-center shop-brands-title">Collections</div>
          <a href="?page=mikasa" class="text-decoration-none text-white">
            <div class="shopBrand text-center">Mikasa</div>
          </a>
          <a href="?page=molten" class="text-decoration-none text-white">
            <div class="shopBrand text-center">Molten</div>
          </a>
          <a href="?page=equipment" class="text-decoration-none text-white">
            <div class="shopBrand text-center">Equipment</div>
          </a>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-10 col-lg-9">
        <div class="card shadow p-4 border-0 rounded-3"
          style="height: 85vh; max-height: 85vh; overflow: scroll; background-color:rgb(240, 230, 199);">
          <div class="titles h1 text-center">
            <?= $page == "mikasa" ? "MIKASA" : ($page == "molten" ? "MOLTEN" : ($page == "equipment" ? "EQUIPMENT" : "")) ?>
          </div>
          <?php include("shared/" . $page . ".php"); ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>

</html>