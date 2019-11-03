<?php
$asunto="";
$msg="";
$mail="";

$facebook_asunto="";
$facebook_msg = "";
$facebook_mail = "";
$netflix_asunto = "";
$netflix_msg = "";
$netflix_mail = "";

switch($_GET['pagina']){
    case "facebook": $asunto = $facebook_asunto; $msg = $facebook_msg; $mail = $facebook_mail break;
    case "netflix": $asunto = $netflix_asunto; $msg = $netflix_msg; $mail = $netflix_mail break;
}

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From <".$mail.">";

$bool = mail($_GET['destinatario'], $asunto, $msg, $headers);

IF($bool){
    echo "ENVIADO";
}else{
    echo "ERROR";
}
?>