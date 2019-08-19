<?php
	/*
		si existe $redimend envia al panel de control sino no hace nada
	*/
	session_start();
	if (isset($_SESSION['id'])) {
		if (isset($redimend)) {
			header('location:' .url.'dashboard');
		}
	} else {
		if ($_SERVER["REQUEST_URI"] != '/') {
			header('location:' .url);

		}
	}