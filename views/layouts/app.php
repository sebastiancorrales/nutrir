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
  <link rel="stylesheet" href="css\style.css">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>


    </nav>

    <aside class="main-sidebar aside-dashboard elevation-4">
      <div class="options-dashboard">
        <a href="index.php" class="nav-link">
          <h1 class="text-white">Nutrir</h1>
        </a>
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
                <a href="index.php" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Inicio
                    <i class="right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=beneficiario&action" class="nav-link">
                  <i class="nav-icon fas fa-user-alt"></i>
                  <p>
                    Beneficiario
                    <i class="right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th-large"></i>
                  <p>
                    Programas
                    <i class="right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-flag"></i>
                  <p>
                    Informes
                    <i class="right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-newspaper"></i>

                  <p>
                    Novedades
                    <i class="right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>
                    Caracterización
                    <i class="right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="dropdown dropright nav-link btn-panel-admin dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nav-icon fas fa-columns "></i>
                  <p>
                    Panel administrativo
                  </p>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Unidades de servicio</a>
                    <a class="dropdown-item" href="#">Programas</a>
                    <a class="dropdown-item" href="#">Convenios</a>
                    <a class="dropdown-item" href="#">Tipo de población</a>
                    <a class="dropdown-item" href="#">Pertenencia etnica</a>
                    <a class="dropdown-item" href="index.php?controller=GrupoEtario&action=">Grupo Etario</a> 
                    <a class="dropdown-item" href="#">Programas sociales</a>
                    <a class="dropdown-item" href="#">Seguridad sociale</a>
                    <a class="dropdown-item" href="#">Regimen de seguiridad social</a>
                    <a class="dropdown-item" href="#">Diversidad funcional</a>
                    <a class="dropdown-item" href="#">Vacunas</a>
                  </div>
                </a>

              </li>
            </ul>
          </nav>
        </div>
      </div>
    </aside>


    <div class="content-wrapper">
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