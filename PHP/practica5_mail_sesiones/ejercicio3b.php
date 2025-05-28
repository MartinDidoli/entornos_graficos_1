<?php
    $amigo = $_POST["amigo"];
    $asunto = "Invitación al sitio web";
    $cuerpo = "Enviado por tu amigo: ";
    $cuerpo .= $_POST["nombre"];
    $cuerpo .= "\r\n";
    $cuerpo .= "Te invito a visitar este sitio que encontré.";
    $headers= "MIME-Version: 1.0\r\n";
    $headers.= "From: ".$_POST["remitente"];
    $headers.= "Content-type:text/html;charset=UTF-8\r\n";
    mail($amigo,$asunto,$cuerpo,$headers);
?>