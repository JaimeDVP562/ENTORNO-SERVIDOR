<?php
/*
---
title: Unidad 2:  Actividad_5_3
desc:  Array --> Creamos array FILTRA cuales son IGUALES y muestra los que se REPITEN
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
    //  Creamos los arrays 
    $actividad1 = ["Ana", "Luis", "Marta", "Pablo"];
    $actividad2 = ["Pablo", "Lucía", "Ana"];

    // Fusionamos los arrays con el array_mergue()
    $actividades1_2 = array_intersect($actividad1, $actividad2);


    // Mostramos la lista del primer proveedor
    echo ("<h3>Personas en actividad 1</h3><ul>");
    foreach ($actividad1 as $actividad){
        echo ("<li>$actividad</li>");
    }
    echo("</ul>");
        // Mostramos la lista del segundo proveedor
    echo ("<h3>Personas en actividad 2</h3><ul>");
    foreach ($actividad2 as $actividad){
        echo ("<li>$actividad</li>");
    }
    echo("</ul>");

    // Mostramos la lista final de productos sin duplicados
    echo "<h3>Personas en ambas actividades</h3><ul>";
    foreach ($actividades1_2 as $actividad) {
        echo "<li>$actividad</li>";
    }
    echo "</ul>";

    ?>

</body>

</html>