<?php
/*
---
title: Unidad 2:  Actividad_7_10
desc:  Array --> FUNCIONES: Funcion FLECHA
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
    $iva = 1.21;
    $precio1 = 100;
    $precio2 = 250;
    $precio3 = 50;

    // Creamos la funcion flecha 
    $calcularPrecioFinal = fn($precio) => $precio * $iva;

    // Llamamos a la funcion
    $resultado1 = $calcularPrecioFinal($precio1);
    $resultado2 = $calcularPrecioFinal($precio2);
    $resultado3 = $calcularPrecioFinal($precio3);

    // Pintamos por pantalla
    echo "El iva es del 21%</br>";
    echo "Precio dinal de $precio1 : es $resultado1</br>";
    echo "Precio dinal de $precio2 : es $resultado2</br>";
    echo "Precio dinal de $precio3 : es $resultado3</br>";

    ?>
</body>

</html>