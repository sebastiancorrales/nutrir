<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Nutrir</title>
  <link rel="stylesheet" href="libs\plugins\fontawesome-free\css\all.css">
  <link rel="stylesheet" href="libs\plugins\adminLTE\css\adminlte.min.css">
  <link rel="stylesheet" href="libs\css\bootstrap.min.css">
  <link rel="stylesheet" href="css\main.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="options-dashboard">
      <h1 class="text-white">Nutrir</h1>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://image.freepik.com/vector-gratis/perfil-empresario-dibujos-animados_18591-58479.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Pepito Pérez</a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                  Beneficiario
                  <i class="right"></i>
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      </div>
    </aside>


    <div class="content-wrapper">
      Current View
    <?php
require_once $currentView;
?>
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="#">Nutrir</a>.</strong> Todos Los Derechos Reservados.
    </footer>
  </div>

  <script src="libs\plugins\jquery\jquery.min.js"></script>
  <script src="libs\plugins\bootstrap\js\bootstrap.bundle.js"></script>
  <script src="js\adminLTE\js\adminlte.min.js"></script>
</body>

</html>