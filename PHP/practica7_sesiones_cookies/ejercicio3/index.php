<?php
$usuario="Nadie";
if (isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    setcookie("usuario", $usuario, time()+(60*60*24*90));
} else {
    if (isset($_COOKIE["usuario"])){
        $usuario = $_COOKIE["usuario"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordar usuario</title>
</head>
<body>
    <form action="" method="post">
        <label for="usuario">Ingrese su usuario:</label>
        <input type="text" name="usuario">
        <input type="submit" value="Guardar usuario">
    </form>
    <br>
    <p>El último usuario ingresado fue: </p>
    <?php
    echo ($usuario);
    ?>
</body>
</html>