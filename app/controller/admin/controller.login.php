<?php
	if (isset($_POST['username']) && isset($_POST['password'])) {
		require $_SERVER['DOCUMENT_ROOT'].'app/model/db.php';
		$db = new db();
		$username = mysqli_real_escape_string($db->conectar(), $_POST['username']);
		$password = mysqli_real_escape_string($db->conectar(), md5($_POST['password']));
		// echo $username." ".$password;
		$sql = mysqli_query($db->conectar(), "SELECT * FROM  root WHERE user_root = '$username' AND pass_root = '$password' ");
		if ($row = mysqli_fetch_array($sql)) {
			session_start();
			$_SESSION['user_root'] = $row['user_root'];
			$_SESSION['id_root'] = $row['id'];
			if ( mysqli_query($db->conectar(), "UPDATE root SET logeo_root = 1 WHERE user_root = '$username' AND pass_root = '$password' ") ) {
				echo "usuario logeado";
			}
		}
	}else{
		echo 'error al recibir los parametros';
	}