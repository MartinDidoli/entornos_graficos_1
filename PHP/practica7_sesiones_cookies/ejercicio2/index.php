<?php
if (!isset($_COOKIE["visitas"])){
    $visitas=0;
    setcookie("visitas",$visitas,time()+3600*24*365);
} else {
    $visitas = $_COOKIE["visitas"]+1;
    setcookie("visitas",$visitas,time()+3600*24*365);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($visitas >= 1){
        echo "Esta es tu visita número ".$visitas;
    } else {
        echo "Bienvenido, es la primera vez que ingresás a esta página";
    }
    ?>
</body>
</html>