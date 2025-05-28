<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="ejercicio4a.php"></a>
    <?php
    echo "Has visitado ".($_SESSION["contador"])." páginas";
    ?>
    <br>
    <a href="ejercicio4a.php">Otra pagina</a>
</body>
</html>