<?php
	require_once $_SERVER['DOCUMENT_ROOT']."config.php";
	require_once root."app/model/db.php";
	require_once root."app/model/email.send.php";
	$db = new db();
	if(!empty($_POST)){
		$username = trim($_POST['username']);
		$pass = md5($_POST['pass']);
		$sexo = $_POST['sexo'];
		$date = $_POST['date'];
		$email = trim($_POST['email']);
		$country = $_POST['country'];
		$sql = mysqli_query($db->conectar(), 'SELECT * FROM usuario WHERE email = "'.$email.'" ');

		if (mysqli_fetch_array($sql) == false) {
			$insert = mysqli_query($db->conectar(), 'INSERT INTO usuario values(null, "'.$username.'", "'.$email.'", "'.$pass.'", "'.$date.'", "'.$sexo.'", "'.$country.'", 0, 0 )' );
			if ($insert == true) {
				// echo "Usuario registrado con exito";
				$mail = new email();
				if ($mail->send($email, "Confirmación de Cuenta", url.'email/welcome')) {
					echo "Usuario registrado con exito";
				} else {
					echo "Usuario registrado con exito pero no se pudo enviar el email de confirmación";
				}
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
			} else {
				echo "Error ocurrio un error al insertar el usuario";
			}
		}else{
			echo 'el usuario ya existe';
		}
	}