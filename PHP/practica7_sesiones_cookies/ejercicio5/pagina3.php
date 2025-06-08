<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acá se recuperan los valores almacenados</title>
</head>
<body>
    <?php
    echo ("Se recuperaron los valores: ". $_SESSION["usuario"] ." y ". $_SESSION["clave"]);
    ?>
</body>
</html>