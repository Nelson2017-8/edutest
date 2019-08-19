<?php
	require_once $_SERVER['DOCUMENT_ROOT']."\app\model\db.php";
	$db = new db();
	$operation = $_REQUEST['operation'];
	if ($operation == 'insert') {

	} else if($operation == 'delete'){

	}else if($operation == 'update'){

	}else{
		echo "error de operación";
	}