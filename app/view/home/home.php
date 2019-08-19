<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo name; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keyword" content="<?= keyword; ?>">
		<meta name="description" content="Pagina de Registro de Usuario en <?= name; ?> (<?= url; ?>).">
		<!-- Le styles -->
		<link rel="stylesheet" href="<?= bootstrapCss; ?>">
		<link rel="stylesheet" href="<?= bootstrapFont; ?>">
		<link rel="stylesheet" href="<?= degradado; ?>">
		<link rel="stylesheet" href="<?= assets."/css/bootstrao-css.css"; ?>">
		<link rel="stylesheet" href="<?= assets."css/alert.css"; ?>">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Le fav and touch icons -->
		<style>
			.loginIcon{
				position: relative;
				display: block;
				width: 4em;
				height: 4em;
				z-index: 1;
				margin-bottom: 1.5em;
				background-color: #d14e08;
				border-radius: 50%;
				box-shadow: 1px 1px 1px #ddd, 1px 1px 1px #ccc;
			}
			.loginIcon .circle{
				margin: 0 auto;
			}
			.loginIcon .circle i{
				text-align: center;
				font-size: 2em;
				margin: .4em .03em;
				color: #fff;
				text-shadow: 1px 1px 1px #eee;
			}

		</style>
	</head>
	<body>
		<?php # require root.'\app\view\header.php'; ?>
		<div class="container mt-5">
			<form class="col-lg-8 offset-lg-2 my-5 login">
				<div class="container loginIcon">
					<div class="circle">
						<i class="glyphicon glyphicon-user"></i>
					</div>
				</div>
				<h5 class="text-center colorText-1 mb-5">Inicio de Sesión</h5>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="colorText-1">Correo Eléctronico</label>
			    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriba su Correo">
			    	<small id="emailHelp" class="form-text colorSecundary">Introduzca su correo eléctronico registrado para continuar.</small>
			  	</div>
				<div class="form-group">
				  <label for="exampleInputPassword1" class="colorText-1">Contraseña</label>
				  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Escriba su Contraseña">
				  <small id="emailHelp" class="form-text colorSecundary">Introduzca un contraseña válida para continuar.</small>
				</div>
				<div class="form-group form-check">
				  <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
				  <label class="form-check-label colorText-1" for="exampleCheck1">Recordar me</label>
				</div>
				<div class="content-center">
					<button type="submit" class="btn btn-outline-orange px-4"><i class="glyphicon glyphicon-send mr-2"></i> Comenzar</button>
					<a href="<?= url.'register/' ?>" class="btn btn-orange px-4"><i class="glyphicon glyphicon-user mr-2"></i> Registrarse</a>
				</div>
				<div class="mt-4 content-center"> <small><a href="<?= url.'forgotten/' ?>" class="link">¿Olvide mi contraseña?</a></small> </div>
			</form>
			<?php require root.'\app\view\footer.php'; ?>
		</div>
		<script src="<?= jquery; ?>"></script>
		<script src="<?= bootstrapJs; ?>"></script>
		<script src="<?= assets.'js/alert.js'; ?>"></script>
		<script src="<?= assets.'js/login.js'; ?>"></script>
	</body>
</html>