<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de baja de Capital</title>
</head>
<body>
    <?php
    include("conexion.php");
    $vCiudad= $_POST['ciudad'];
    $vSql= "SELECT * FROM capitales WHERE ciudad='$vCiudad'";
    $vResultado=mysqli_query($link,$vSql);
    if(mysqli_num_rows($vResultado)==0){
        echo ("No existe la ciudad ingresada<br>");
        echo ("<a href='baja.html'>Continuar</a><br>");
        echo ("<a href='menu.html'>Volver al menú</a>");
    } else {
        $vSql = "DELETE FROM capitales WHERE ciudad = '$vCiudad'";
        mysqli_query($link,$vSql);
        echo ("La ciudad fue dada de baja<br>");
        echo ("<a href='menu.html'>Volver al menú</a>");
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>