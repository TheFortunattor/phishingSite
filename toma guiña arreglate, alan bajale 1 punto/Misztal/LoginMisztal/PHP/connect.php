<?php
	$server = "LocalHost:3307";
	$user = "login";
	$password = "1234";
	$db = "baseusuarios";
	$conexion = mysqli_connect($server, $user, $password, $db);

	mysqli_set_charset($conexion, "utf8");	
?>