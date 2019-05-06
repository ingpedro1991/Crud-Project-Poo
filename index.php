<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)).DS);
	define('URL', 'http://localhost:8080/crud_POO/');
	
	require_once "Config/Autoload.php";
	Config\Autoload::run();
	$RE = new Config\Request();
	require_once "Views/Template.php";
	Config\Enrutador::run($RE);
?>