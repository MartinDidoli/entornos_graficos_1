<?php
session_start();
$productoNuevo = [
    "id" => $_GET["id"],
    "producto" => $_GET["producto"],
    "precio" => $_GET["precio"]
];
$_SESSION["carrito"][]= $productoNuevo;
header("Location: catalogo.php");
?>