<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Usuario: <input type="text" name="user">
        <input type="submit" name="submit" value="Comprobar">
    </form>
    <?php
    include 'prueba.php';
    if (isset($_POST['submit'])){
        $usuario = $_POST['user'];
        comprobar_nombre_usuario($usuario);
    }
    ?>
</body>
</html>