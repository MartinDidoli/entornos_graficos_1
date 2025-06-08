<?php
session_start();
if (!isset($_SESSION["carrito"])){
    $_SESSION["carrito"]=[];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>
<body>
    <table>
        <tr>
            <td>
                Carrito de compras
            </td>
        </tr>
        <tr>
            <td>1- <a href="catalogo.php">Catalogo</a></td>
        </tr>
        <tr>
            <td>2- <a href="visualizar.php">Ver tu carro</a></td>
        </tr>
        <tr>
            <td>3- <a href="eliminar.php">Eliminar carro</a></td>
        </tr>
    </table>
</body>
</html>