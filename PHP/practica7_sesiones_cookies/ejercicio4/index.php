<?php
$eleccion=0;
if (isset($_POST["eleccion"])){
    $eleccion = $_POST["eleccion"];
    setcookie("eleccion", $eleccion, time()+(60*60*24*90));
} else {
    if (isset($_COOKIE["eleccion"])){
        $eleccion = $_COOKIE["eleccion"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periódico</title>
</head>
<body>
    <h1><?php 
    switch ($eleccion){
        case 0:
            echo ("Noticias políticas, económicas y deportivas.");
            break;
        case 1:
            echo ("Noticia política");
            break;
        case 2:
            echo ("Noticia económica");
            break;
        case 3:
            echo ("Noticia deportiva");
            break;
    }
    ?></h1>
    <form action="" method="post">
        <label for="eleccion">Elija tipo de titular que quiere visualizar:</label>
        <input type="radio" name="eleccion" value=1><label for="1">Noticia Política</label>
        <input type="radio" name="eleccion" value=2><label for="2">Noticia Económica</label>
        <input type="radio" name="eleccion" value=3><label for="3">Noticia Deportiva</label>
        <input type="submit" value="Cambiar titular">
    </form>
    <a href="eliminar.php">Clickear para eliminar la cookie</a>
</body>
</html>