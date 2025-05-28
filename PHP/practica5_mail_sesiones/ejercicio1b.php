<?php
    $destinatario = $_POST["destinatario"];
    $asunto = $_POST["asunto"];
    $cuerpo = "
    <html>
    <head>
        <title>
            El título del cuerpo del mail
        </title>
    </head>
    <body>
    ";
    $cuerpo .= $_POST["cuerpo"];
    $cuerpo .="</body></html>";
    $headers= "MIME-Version: 1.0\r\n";
    $headers.= "Content-type:text/html;charset=UTF-8\r\n";
    mail($destinatario,$asunto,$cuerpo,$headers);
?>