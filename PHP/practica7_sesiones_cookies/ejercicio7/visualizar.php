<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu carrito</title>
</head>
<body>
    <?php if (empty($_SESSION["carrito"])){
        echo ("<p>Tu carrito está vacio<p>");
    } else {
    ?>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Producto</td>
            <td>Precio</td>
        </tr>
        <?php
        $total_carrito=0;
        foreach($_SESSION["carrito"] as $item){
            $total_carrito+=$item["precio"];
        ?>
        <tr>
            <td><?php echo $item["id"]; ?></td>
            <td><?php echo $item["producto"]; ?></td>
            <td><?php echo $item["precio"] ?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td>Total :</td>
            <td></td>
            <td><?php echo ($total_carrito); ?></td>
        </tr>
    </table>
    <?php
    }
    ?>
    <br>
    <a href="menu.php">Volver al menú</a>
</body>
</html>