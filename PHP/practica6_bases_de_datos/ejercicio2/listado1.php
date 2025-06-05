<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado con paginación</title>
</head>
<body>
    <h1>Listado con Paginación</h1>
    <?php
    include("conexion.php");
    $vSql= "SELECT * FROM capitales";
    $vResultado= mysqli_query($link,$vSql);
    $total_registros= mysqli_num_rows($vResultado);
    echo "Numero de registros encontrados: ". $total_registros ."<br>";

    $vSql="SELECT * FROM capitales";
    $vResultado = mysqli_query($link,$vSql);
    $total_registros= mysqli_num_rows($vResultado); 
    ?>
    <table border=1>
        <tr>
            <td>id</td>
            <td>Ciudad</td>
            <td>País</td>
            <td>Habitantes</td>
            <td>Superficie</td>
            <td>¿Tiene Metro?</td>
        </tr>
        <?php
        while($fila=mysqli_fetch_array($vResultado)){
            ?>
            <tr>
                <td><?php echo ($fila["id"])?></td>
                <td><?php echo ($fila["ciudad"])?></td>
                <td><?php echo ($fila["pais"])?></td>
                <td><?php echo ($fila["habitantes"])?></td>
                <td><?php echo ($fila["superficie"])?></td>
                <td><?php echo ($fila["tiene_metro"])?></td>
            </tr>
        <?php
        }
        mysqli_free_result($vResultado);
        ?>
    </table>
    <?php
    mysqli_close($link);
    ?>
    <a href="menu.html">Volver al menú</a>
</body>
</html>