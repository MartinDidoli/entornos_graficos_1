<?php
session_start();
extract($_POST);
$_SESSION["usuario"]=$usuario;
$_SESSION["clave"]=$clave;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acá se crean las variables de sesión</title>
</head>
<body>
    <?php
    echo ("Se crearon las variables ". $usuario ." y " . $clave);
    ?>
    <a href="pagina3.php">Ir a la página 3</a>
</body>
</html>