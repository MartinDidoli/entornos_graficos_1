<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
</head>
<body>
    <h1>Catálogo</h1>
    <?php
    session_start();
    include("conexion.php");
    $vSql= "SELECT * FROM catalogo";
    $vResultado= mysqli_query($link,$vSql);
    $productos= mysqli_num_rows($vResultado);
    echo "Número de productos encontrados: ". $productos ."<br>";
    ?>
    <table border=1>
        <tr>
            <td>id</td>
            <td>Producto</td>
            <td>Precio</td>
            <td>Agregar</td>
        </tr>
        <?php
        while($fila=mysqli_fetch_array($vResultado)){
            ?>
            <tr>
                <td><?php echo ($fila["id"])?></td>
                <td><?php echo ($fila["producto"])?></td>
                <td><?php echo ($fila["precio"])?></td>
                <td>
                    <a href="agregar.php?id=<?php echo $fila["id"]; ?>&producto=<?php echo urlencode($fila["producto"]); ?>&precio=<?php echo ($fila["precio"]) ?>">+</a>
                </td>
            </tr>
        <?php
        }
        mysqli_free_result($vResultado);
        ?>
    </table>
    <?php
    mysqli_close($link);
    ?>
    <a href="menu.php">Volver al menú</a>
</body>
</html>