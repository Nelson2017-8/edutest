<?php
	/*
		si existe $redimend envia al panel de control sino no hace nada
	*/
	session_start();
	if (isset($_SESSION['id_root'])) {
		if (isset($redimend)) {
			header('location:' .url.'admin/dashboard');
		}
	} else {
		header('location:' .url.'admin');
	}