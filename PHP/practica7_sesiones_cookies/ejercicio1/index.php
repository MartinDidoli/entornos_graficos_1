<?php
    if (isset($_POST["estilo"])){
        $estilo = $_POST["estilo"];
        setcookie("estilo", $estilo, time()+(60*60*24*90));
    } else {
        if (isset($_COOKIE["estilo"])){
            $estilo = $_COOKIE["estilo"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar colores de la página</title>
    <?php
    if (isset($estilo)){
        echo '<link rel="stylesheet" type="text/css" href="' . $estilo . '.css">';
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <p>Seleccionar el estilo para mostrar en la página:</p>
        <select name="estilo">
            <option value="verde">Verde</option>
            <option value="rojo">Rojo</option>
            <option value="negro">Negro</option>
        </select>
        <input type="submit" value="Actualizar estilo">
    </form>
</body>
</html>