<?php
	include("connect.php");
	$user = $_POST['name'];
	$password = $_POST['pass'];
	
	if ($query = $conexion->prepare("SELECT COUNT(*) as existe, contraseña FROM login WHERE nombre_us = ?")) {

        $query->bind_param("s", $user);
        $query->execute();
        $query->bind_result($existe, $contraseña);
        $query->fetch();
        $query->close();

		if ($existe) {
            if ($password == $contraseña) {
                session_start();
                $_SESSION['usuario'] = $user;
                $query->bind_param("s", $user);
                echo "conectado " . $_SESSION['usuario'];
            } 
            else {
                echo "Usuario o contraseña incorrecta.";
            }        
        } 
        else {
            echo "Usuario o contraseña incorrecta.";
        }
	}
?>