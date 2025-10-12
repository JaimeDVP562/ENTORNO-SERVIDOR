<?php
/*
---
title: Unidad 2:  Actividad_6_5
desc:  Array --> Obtener el archivo de una ruta 
tags: [PHP, basico]
---
*/
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
    // Declaramos las variables 

    $ruta = "http://www.linkfred.com/carpeta1/index.php";
    $archivo = basename($ruta);

    // Mostramos por pantalla 
    echo "URL: $ruta</br>";
    echo "$archivo";

    ?>
</body>
</html>