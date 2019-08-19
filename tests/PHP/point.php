<?php
	require_once 'vendor/autoload.php';
	require 'app/model/email.send.php';
	$html = new html();
	$resul = $html->contentcurl(url.'email/welcome');
	// $resul = $html->contentcurl(url.'mail/welcome/token38749873847/nelsonportillo982@gmail.com/');
	print_r($resul);