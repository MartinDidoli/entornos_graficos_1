<?php
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $cuerpo = "Enviado por: ";
    $cuerpo .= $_POST["nombre"]." del mail ".$_POST["remitente"];
    $cuerpo .= "\r\n";
    $cuerpo .= $_POST["cuerpo"];
    $headers= "MIME-Version: 1.0\r\n";
    $headers.= "Content-type:text/html;charset=UTF-8\r\n";
    mail("webmaster@gmail.com",$asunto,$cuerpo,$headers);
?>