<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("conexion.php");
    $pal=$_POST["palabra"];
    if($pal){
        $resp=mysqli_query($link,"SELECT * from buscador where canciones LIKE '%" . $pal . "%'") or die (mysqli_error($link));
        if(mysqli_num_rows($resp)=="0"){
            echo ("No hay resultados para la palabra que busca");
        } else {
            echo "Resultado de búsqueda: <br>";
            while($cat= mysqli_fetch_array($resp)){
                ?>
                <td><?php echo ($cat["canciones"]); ?></td>
                <?php
            }
        }
        echo ("<a href='buscador1.php'>Volver a buscar</a>");
    } else {
        echo ("<a href='buscador1.php'>No se encontró, volver</a>");
    }
    ?>
</body>
</html>