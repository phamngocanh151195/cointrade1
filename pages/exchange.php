<?php  
	$pageTitle = 'Exchange';
	include 'pages/templates/header.php';

	$config->addJS('canvasjs.min.js');
	$config->addJS('exchange.js');
	
	include 'templates/exchange.php';

	include 'pages/templates/footer.php';
?>