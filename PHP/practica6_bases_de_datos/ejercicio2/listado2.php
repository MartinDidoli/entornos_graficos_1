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
    $cant_por_pag = 2;
    $pagina = isset ($_GET["pagina"]) ? $_GET["pagina"]: null;
    if (!$pagina){
        $inicio= 0;
        $pagina= 1;
    } else {
        $inicio = ($pagina - 1) * $cant_por_pag;
    }
    $vSql= "SELECT * FROM capitales";
    $vResultado= mysqli_query($link,$vSql);
    $total_registros= mysqli_num_rows($vResultado);
    $total_paginas=ceil($total_registros/$cant_por_pag);
    echo "Numero de registros encontrados: ". $total_registros ."<br>";
    echo "Se muestran paginas de ". $cant_por_pag . " registros cada una<br>";
    echo "Mostrando la pagina " . $pagina ." de ". $total_paginas . "<br>";

    $vSql="SELECT * FROM capitales". " limit ". $inicio . "," . $cant_por_pag;
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
    if ($total_paginas > 1){
        for ($i=1;$i<=$total_paginas;$i++){
            if($pagina == $i) echo $pagina . " ";
            else echo "<a href='listado2.php?pagina=". $i ."'>". $i . "</a>";
        }
    }
    ?>
    <a href="menu.html">Volver al menú</a>
</body>
</html>