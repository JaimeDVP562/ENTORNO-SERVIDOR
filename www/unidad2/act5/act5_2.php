<?php
/*
---
title: Unidad 2:  Actividad_5_2
desc:  Array --> Creamos un ARRAY ASOCIATIVO --> FILTRAR POR CAMPO --> TABLA
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
    //  Creamos los arrays asociativos
    $empleados = [
        ["nombre" => "Ana", "departamento" => "Ventas", "estado" => "activo"],
        ["nombre" => "Luis", "departamento" => "TI", "estado" => "inactivo"],
        ["nombre" => "MArta", "departamento" => "Marketing", "estado" => "activo"]

    ];

    // Filtramos por el campo que queramos en este caso
    $empleadosActivos = array_filter($empleados, function($empleado){
        return $empleado ["estado"] === "activo";
    });

    // Mostramos la lista del primer proveedor
    echo ("<h3>Empleados</h3><ul>");
    foreach ($empleados as $respuesta){
        echo ("<li>$respuesta</li>");
    }
    echo("</ul>");
    
    // Mostramos la lista del segundo proveedor
    echo ("<h3>Empleados activos</h3><ul>");
    foreach ($empleadosActivos as $respuesta){
        echo ("<li>$respuesta</li>");
    }
    echo("</ul>");


    ?>

</body>

</html>