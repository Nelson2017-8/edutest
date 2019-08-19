<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo name; ?></title>
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
    <link rel="stylesheet" href="<?= assets.'css/animate/animate.min.css'; ?>">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Le fav and touch icons -->
	</head>
	<body>

    <nav class="navbar navbar-dark fixed-top gradient-45deg-deep-orange-orange flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 pl-4" href="<?= url.'dashboard'; ?>"> <?= logo; ?> </a>
      <div class="container-search">
      	<input class="form-control w-75" type="search" placeholder="Buscar" aria-label="Buscar">
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
                  Usuario
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Pendiente
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Terminado
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Examenes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Resultados
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Configuración</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Perfil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Opciones
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Estadisticas
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
          // echo trim($_SERVER["REQUEST_URI"], '/')."<br>";
          // var_dump($_SERVER);
          // echo $_SERVER["REDIRECT_URL"]."<br>";
          // echo $_SERVER["PATH_INFO"];
            switch (trim($_SERVER["REDIRECT_URL"], '/')) {
              case 'dashboard':
                $re = 'intro.php';
                break;
              case 'dashboard/test':
                $re = 'test.php';
                break;
              default:
                $re = 'home.php';
                break;
            }
              require root.'app/view/panel/user/'.$re;
            ?>
          <?php # require root.'app/view/footer.php'; ?>
        </main>

      </div></div><!-- fin del row -->
    </div><!-- fin del container-fluid -->

		<script src="<?= jquery; ?>"></script>
		<script src="<?= url.'/assets/framework/bootstrap_4/js/popper.js'; ?>"></script>
		<script src="<?= bootstrapJs; ?>"></script>
		<script src="<?= assets.'js/dashboard.js'; ?>"></script>
		<script src="<?= assets.'js/alert.js'; ?>"></script>
    <?php
      switch (trim($_SERVER["REDIRECT_URL"], '/')) {
        case 'dashboard/test':
          echo '<script src="'.assets.'js/test.user.js"></script>';
          break;
        case "hola":
          echo '<script src="'.url.'/assets/framework/chart/chart.min.js"></script>
      <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
          type: \'line\',
          data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
              data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
              lineTension: 0,
              backgroundColor: \'transparent\',
              borderColor: \'#007bff\',
              borderWidth: 4,
              pointBackgroundColor: \'#007bff\'
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: false
                }
              }]
            },
            legend: {
              display: false,
            }
          }
        });
      </script>';
          break;

        default:

          break;
      }
     ?>
	</body>
</html>