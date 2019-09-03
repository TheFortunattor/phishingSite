<?php
	$server = "LocalHost";
	$user = "login";
	$password = "1234";
	$db = "BaseUsuarios";
	$conexion = new mysqli($server, $user, $password, $db);
	
	mysqli_set_charset($conexion, "utf8");	
?>