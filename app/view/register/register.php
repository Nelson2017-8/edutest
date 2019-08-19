<?php
	require_once 'app/controller/printMysql.php';
	$print = new imprimir();
?>
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
		<link rel="stylesheet" href="<?= assets.'/css/bootstrao-css.css'; ?>">
		<link rel="stylesheet" href="<?= assets.'/css/alert.css'; ?>">
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
			label#sexo-error, label#terminos-error{
				display: none!important;
			}

		</style>
	</head>
	<body>
		<?php # require root.'\app\view\header.php'; ?>
		<div class="container mt-5">
			<form class="col-lg-8 offset-lg-2 my-5" id="controllerRegister">
				<div class="container loginIcon">
					<div class="circle">
						<i class="glyphicon glyphicon-user"></i>
					</div>
				</div>
				<h5 class="text-center colorText-1 mb-5">Registro de Usuario</h5>
				<div class="form-group">
				  <label for="username" class="colorText-1">Nombre y Apellido</label>
				  <input require type="text" class="form-control" id="username" name="username" placeholder="Escriba su Nombre y Apellido">
				  <small id="emailHelp" class="form-text colorSecundary">Introduzca un contraseña válida para continuar.</small>
				</div>
				<div class="form-group">
			    	<label for="email" class="colorText-1">Correo Electrónico</label>
			    	<input require type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Escriba su Correo">
			    	<small id="emailHelp" class="form-text colorSecundary">Introduzca su correo electrónico registrado para continuar.</small>
			  	</div>
				<div class="form-group">
				  <label class="colorText-1" for="password">Contraseña</label>
				  <input require type="password" id="password" class="form-control" name="password" placeholder="Escriba su Contraseña">
				  <small id="emailHelp" class="form-text colorSecundary">Introduzca un contraseña válida para continuar.</small>
				</div>
				<div class="form-group">
					<label class="colorText-1">Sexo</label>
					<br>
					<div class="form-check form-check-inline">
					  <input require class="form-check-input" type="radio" id="hombre" name="sexo" value="Hombre">
					  <label class="form-check-label" for="hombre">Hombre</label>
					</div>
					<div class="form-check form-check-inline">
					  <input require class="form-check-input" type="radio" id="mujer" name="sexo" value="Mujer">
					  <label class="form-check-label" for="mujer">Mujer</label>
					</div>
				</div>
				<div class="form-group">
				  <label for="natalidad" class="colorText-1">Fecha de Nacimiento</label>
				  <input require type="date" class="form-control" name="date" id="natalidad">
				  <small id="emailHelp" class="form-text colorSecundary">Introduzca un contraseña válida para continuar.</small>
				</div>
			  <div class="form-group">
			    <label for="country">País</label>
			    <select require class="form-control" name="country" id="country">
					<?php
						$print->table(null, "SELECT * FROM country ORDER BY pais ASC", function ($row, $resultado){
							do {
								echo "<option value='".$row['pais']."'>".$row['pais']."</option> ";
							} while ($row = mysqli_fetch_array($resultado) );
						});
				    ?>

			    </select>

			  </div>
				<div class="form-group form-check mb-5">
				  <input require type="checkbox" name="terminos" class="form-check-input" id="exampleCheck1">
				  <label class="form-check-label"><a class="link" href="#">Aceptar Términos y Condiciones</a></label>
				</div>
				<div class="content-center">
					<button type="submit" class="btn btn-outline-orange px-4"><i class="glyphicon glyphicon-send mr-2"></i> Registrarse</button>
					<a href="<?= url.'register/' ?>" class="btn btn-orange px-4"><i class="glyphicon glyphicon-user mr-2"></i> Iniciar Sesión</a>
				</div>
				<div class="mt-4 content-center"> <small><a href="<?= url.'forgotten/' ?>" class="link">¿Olvide mi contraseña?</a></small> </div>
			</form>
			<?php require root.'\app\view\footer.php'; ?>
		</div>
		<script src="<?= jquery; ?>"></script>
		<script src="<?= bootstrapJs; ?>"></script>
		<script src="<?= assets."js/jquery.validate.min.js"; ?>"></script>
		<script src="<?= assets.'/js/alert.js'; ?>"></script>
		<script src="<?= assets."js/form.controller.registro.js"; ?>"></script>
	</body>
</html>