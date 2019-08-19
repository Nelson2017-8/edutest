<?php
	require_once $_SERVER['DOCUMENT_ROOT']. 'app/model/db.php';
	$db = new db();
	if (isset($_POST)) {
		session_start();
		$user = $_SESSION['user_root'];
		$name = $_POST['nameTest'];
		$error = true;
		function ex($name){
			if($name == ''){
				return 'null';
			}else{
				return $name;
			}
		}
		$timeLimite = ex($_POST['timeLimite']);
		$peopleLimite = ex($_POST['peopleLimite']);
		$profesor = $_POST['profesor'];
		$description = $_POST['description'];
		if ( $_POST['dateInit'] == '' || $_POST['hourInit'] == '') {
			if ($_POST['dateInit'] == '' && $_POST['hourInit'] == '') {
			}else{
				echo "error: es requerido la fecha y hora de inicio";
				$error = false;
			}
		}else{
			$dateI = ex($_POST['dateInit']);
			$hourI = ex($_POST['hourInit']);
			$dateInit  = "$dateI $hourI:00";
			mysqli_query($db->conectar(), "UPDATE root_test SET dateInit = '$dateInit' WHERE user_name = '$user' AND name = '$name' ");
		}
		if ( $_POST['dateFinish'] == '' || $_POST['hourFinish'] == '') {
			if ($_POST['dateFinish'] == '' && $_POST['hourFinish'] == '') {
			}else{
				echo "error: es requerido la fecha y hora de finalización";
				$error = false;
			}
		}else{
			$dateF = ex($_POST['dateFinish']);
			$hourF = ex($_POST['hourFinish']);
			$dateFinish = "$dateF $hourF:00";
			mysqli_query($db->conectar(), "UPDATE root_test SET dateFinish = '$dateFinish' WHERE user_name = '$user' AND name = '$name' ");
		}
		if ($error != false) {
			if(mysqli_query($db->conectar(), "UPDATE root_test SET profesor = '$profesor', description = '$description', init = 1, timeLimite = '$timeLimite', peopleLimite = '$peopleLimite' WHERE user_name = '$user' AND name = '$name' ")){
				echo "actualizado";
			}else{
				echo 'error no se pudo actualizar';
			}
		}
	}else{
		echo 'error no hay ningun parametro';
	}