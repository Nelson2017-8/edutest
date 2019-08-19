<?php

	if (isset($_POST)) {
		$array = array();
		$array[] = $_POST;
		$array = json_encode( $array );
		$root = $_SERVER['DOCUMENT_ROOT'];
		session_start();
		$path = $root.'app/model/db/test/'.$_SESSION['user_root'].'/'.$_POST['nameTest'].'.json';
		if (!file_exists($root.'app/model/db/')) {
			mkdir($root.'app/model/db');
			if (!file_exists($root.'app/model/db/test/')) {
				mkdir($root.'app/model/db/test/');
				if (!file_exists($root.'app/model/db/test/'.$_SESSION['user_root'].'/')) {
					mkdir($root.'app/model/db/test/'.$_SESSION['user_root'].'/');
				}
			}
		}
		if (file_put_contents($path, $array)) {
			require_once $root.'app/model/db.php';
			$db = new db();
			$user = $_SESSION['user_root'];
			$name = urlencode($_POST['nameTest']);
			$dateCreacte = date('Y-m-d h:s:i');
			$fileJson = 'app/model/db/test/'.$_SESSION['user_root'].'/'.$_POST['nameTest'].'.json';
			$sql = mysqli_query($db->conectar(),  "SELECT * FROM root_test WHERE name = '$name' ");
			if( mysqli_fetch_array($sql) == false ){
				mysqli_set_charset($db->conectar(), "utf8");
				if (mysqli_query($db->conectar(),  "INSERT INTO root_test (user_name, name, dateCreacte, fileJson) VALUES ('$user', '$name', '$dateCreacte', '$fileJson')")) {
					echo 'Se guardo en Mysql y json';
				}else{
					echo 'Se creo en json pero no en mysql';
				}
			}else{
				if (mysqli_query($db->conectar(), "UPDATE root_test SET dateCreacte = '$dateCreacte', fileJson = '$fileJson' WHERE user_name = '$user' AND fileJson = '$fileJson'")) {
					echo 'Actualizado';
				}else{
					echo 'Error no se pudo actualizar';
				}
			}
		}else{
			echo "Error no se pudo crear el Json db";
		}
	}else{
		echo 'error no hay parametros';
	}