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
    $vCiudad=$_POST['ciudad'];
    $vSql="SELECT * FROM capitales WHERE ciudad = '$vCiudad'";
    $vResultado = mysqli_query($link,$vSql) or die (mysqli_error($link));
    $fila=mysqli_fetch_array($vResultado);
    if(mysqli_num_rows($vResultado)==0){
        echo ("No existe la ciudad ingresada<br>");
        echo ("<a href='modificar.html'>Continuar</a><br>");
        echo ("<a href='menu.html'>Volver al menú</a>");
    } else {
        ?>
        <form action="modificar2.php" method="POST" name="formModificar">
            <table>
                <tr>
                    <td>Ciudad: </td>
                    <td>
                        <input type="text" name="ciudad" value="<?php echo($fila['ciudad']);?>">
                    </td>
                </tr>
                <tr>
                    <td>Pais: </td>
                    <td>
                        <input type="text" name="pais" value="<?php echo($fila['pais']);?>">
                    </td>
                </tr>
                <tr>
                    <td>Habitantes: </td>
                    <td>
                        <input type="number" name="habitantes" value="<?php echo($fila['habitantes']);?>">
                    </td>
                </tr>
                <tr>
                    <td>Superficie: </td>
                    <td>
                        <input type="number" step="any" name="superficie" value="<?php echo($fila['superficie']);?>">
                    </td>
                </tr>
                <tr>
                    <td>¿Tiene Metro?</td>
                    <td>
                        <input type="radio" id="si" name="tiene_metro" value="si"><label for="si">Si</label>
                        <input type="radio" id="no" name="tiene_metro" value="no"><label for="no">No</label>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="modificar"></td>
                </tr>
            </table>
            <input type="hidden" name="id_capital" value="<?php echo($fila['id']);?>">
        </form>
        <a href="menu.html">Volver al menu</a>
        <?php
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>
</body>
</html>