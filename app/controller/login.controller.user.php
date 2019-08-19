<?php
	if (isset($_POST)) {
		$email = trim($_POST['email']);
		$pass = md5($_POST['password']);
		if (isset($_POST['remember'])) {
			$remenber = $_POST['remember'];
		}
		require $_SERVER['DOCUMENT_ROOT'].'app/model/db.php';
		$db = new db();
		$consulta = mysqli_query($db->conectar(), "SELECT * FROM usuario WHERE email = '$email' AND password = '$pass' ");
		if ($row = mysqli_fetch_array($consulta)) {
			session_start();
			$_SESSION['id'] = $row['Id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['sexo'] = $row['sexo'];
			$_SESSION['country'] = $row['pais'];
			$_SESSION['date'] = $row['date'];
			$update = mysqli_query($db->conectar(), "UPDATE usuario set logeo = 1 WHERE email = '$email' AND password = '$pass' ");
			echo "exito";
		}else{
			echo "el usuario no existe";
		}
	}else{
		echo "no hay parametros";
	}