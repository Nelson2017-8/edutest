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
    <link rel="stylesheet" href="<?= assets.'css/admin-login.css'; ?>">
    <link rel="stylesheet" href="<?= bootstrapCss; ?>">
    <link rel="stylesheet" href="<?= bootstrapFont; ?>">
    <link rel="stylesheet" href="<?= assets.'css/alert.css'; ?>">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
  </head>
  <body>
    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="<?= assets.'img/network.png'; ?>" alt="Admin login, <?= name; ?>" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Panel de Administrador</h1>
        <p>Inicie Sesión con su cuenta de <code>administrador</code>. <a target="new" href="<?= url.'help/admin/access'; ?>">Puede consultar la guía de ayuda para usuarios admin.</a></p>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Nombre de Usuario" required autofocus>
        <label for="inputEmail">Nombre de Usuario</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <label for="inputPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Todos los Derechos reservados <span id="date"></span></p>
    </form>
    <script src="<?= jquery; ?>"></script>
    <script src="<?= assets.'js/alert.js'; ?>"></script>
    <script src="<?= assets.'js/admin/controller.login.admin.js'; ?>"></script>
    <script>
      var date = new Date();
      document.getElementById('date').innerHTML = date.getUTCFullYear();
    </script>
  </body>
</html>
