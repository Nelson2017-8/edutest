<?php
	require_once $_SERVER['DOCUMENT_ROOT']."config.php";
	require_once root."app/model/db.php";
	require_once root."app/model/email.send.php";
	$db = new db();
	if(!empty($_POST)){
		$username = trim($_POST['username']);
		$pass = md5($_POST['pass']);
		$email = trim($_POST['email']);

		$sql = mysqli_query($db->conectar(), 'SELECT * FROM usuario WHERE email = "'.$email.'" ');

		if ($row = mysqli_fetch_array($sql)) {
			session_start();
			$consulta = mysqli_query($db->conectar(), 'SELECT * FROM usuario WHERE email = "'.$email.'"');
			$row = mysqli_fetch_array($consulta);
			$_SESSION['id'] = $row['Id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['sexo'] = $row['sexo'];
			$_SESSION['country'] = $row['pais'];
			$_SESSION['date'] = $row['date'];
			$update = mysqli_query($db->conectar(), "UPDATE usuario set logeo = 1 WHERE email = '".$email."' ");
			echo 'operacion exitosa';
		}else{
			echo 'el usuario no existe';
		}
	}