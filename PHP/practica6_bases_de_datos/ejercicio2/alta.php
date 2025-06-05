<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de alta de capital</title>
</head>
<body>
    <?php
    include("conexion.php");
    $vCiudad = $_POST["ciudad"];
    $vPais = $_POST["pais"];
    $vHabitantes = $_POST["habitantes"];
    $vSuperficie = $_POST["superficie"];
    $vTieneMetro = $_POST["tiene_metro"];
    $vSql="SELECT Count(ciudad) as canti FROM capitales WHERE ciudad='$vCiudad'";//
    $vResultado = mysqli_query($link,$vSql) or die (mysqli_error($link));
    $vCantCiudades= mysqli_fetch_assoc($vResultado);
    if ($vCantCiudades ["canti"]!=0){
        echo ("La ciudad ya existe<br>");
        echo ("<a href='menu.html'>Volver al menú</a>");
    } else {
        $vSql= "INSERT INTO capitales (ciudad, pais, habitantes, superficie, tiene_metro) values ('$vCiudad','$vPais','$vHabitantes','$vSuperficie','$vTieneMetro')";
        mysqli_query($link,$vSql) or die(mysqli_error($link));
        echo ("Se registró la nueva capital");
        echo ("<a href='menu.html'>Volver al menú</a>");
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>