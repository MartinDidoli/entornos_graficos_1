<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para modificar capitales</title>
</head>
<body>
    <?php
    include("conexion.php");
    $vId= $_POST["id_capital"];
    $vCiudad = $_POST["ciudad"];
    $vPais = $_POST["pais"];
    $vHabitantes = $_POST["habitantes"];
    $vSuperficie = $_POST["superficie"];
    $vTieneMetro = $_POST["tiene_metro"];
    $vSql = "UPDATE capitales set ciudad='$vCiudad', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', tiene_metro='$vTieneMetro' WHERE id = '$vId'";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    echo("La capital fue modificada<br>");
    echo("<a href='menu.html'>Volver al menú</a>");
    mysqli_close($link);
    ?>
</body>
</html>