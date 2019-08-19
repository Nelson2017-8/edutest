<?php
	require "app/controller/token.security.php";
	$toke = new token();
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Benvenido a <?= name; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h1>Benvenido a <?= name; ?></h1>
		<p>So codigo de activacion es: <?= $toke->generate(15); ?> </p>
	</body>
</html>

