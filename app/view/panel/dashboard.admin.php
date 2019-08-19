<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?php echo name; ?> Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="<?= keyword; ?>">
    <meta name="description" content="Pagina de Registro de Usuario en <?= name; ?> (<?= url; ?>).">
    <meta name="author" content="<?= autor; ?>">
    <!-- Le styles -->
    <link rel="stylesheet" href="<?= bootstrapCss; ?>">
    <link rel="stylesheet" href="<?= bootstrapFont; ?>">
    <link rel="stylesheet" href="<?= degradado; ?>">
    <link rel="stylesheet" href="<?= assets.'css/bootstrao-css.css'; ?>">
    <link rel="stylesheet" href="<?= assets.'css/alert.css'; ?>">
    <link rel="stylesheet" href="<?= assets.'css/dashboard.css'; ?>">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark  flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 pl-4" href="<?= url.'admin/dashboard'; ?>"> <?= logo; ?> </a>
      <div class="container-search">
        <input class="form-control form-control-dark w-75" type="search" placeholder="Buscar" aria-label="Buscar">
        <i class="glyphicon glyphicon-search"></i>
      </div>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#"><i class="glyphicon glyphicon-off mr-2" style="position: relative; top: .2em;"></i>Cerrar Cessión</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  Panel de Control <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Crear una Test
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Iniciar un Test
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Resultados
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Opciones </span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Configuración
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Administración de Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Cerrar Sesión
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php
            switch (trim($_SERVER["REQUEST_URI"], '/')) {
              case 'admin/dashboard/init/test':
                $re = 'init.test.php';
                break;
              case 'admin/dashboard':
                $re = 'create.test.php';
                break;
              default:
                $re = 'create.test.php';
                break;
            }
            require root.'app/view/panel/admin/'.$re;
          ?>
          <?php require root.'/app/view/footer.php'; ?>
        </main>
      </div>
    </div>
    <script src="<?= jquery; ?>"></script>
    <script src="<?= url.'/assets/framework/bootstrap_4/js/popper.js'; ?>"></script>
    <script src="<?= bootstrapJs; ?>"></script>
    <script src="<?= assets.'js/dashboard.js'; ?>"></script>
    <script src="<?= assets.'js/alert.js'; ?>"></script>
    <?php
      switch (trim($_SERVER["REQUEST_URI"], '/')) {
        case 'admin/dashboard/init/test':
          echo '<script src="'.assets .'js/init.test.js"></script>';
          break;
        case 'admin/dashboard':
          echo '<script src="'.assets .'js/create.test.js"></script>';
          break;
      }
    ?>
  </body>
</html>