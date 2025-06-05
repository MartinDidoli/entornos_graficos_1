<?php

$link = mysqli_connect("localhost","root") or die ("Problemas de conexión con la base de datos");

mysqli_select_db($link,"capitales_mundo_db");

?>