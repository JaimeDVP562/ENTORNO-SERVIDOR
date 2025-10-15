<?php
/*
---
title: Unidad 2:  Actividad_7_7
desc:  Array --> FUNCIONES: Array para llamar a las funciones creadas en otro archivo
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
    include 'act7_6.php'; // Importamos las funciones del ejercicio 6

    $num1 = 40;
    $num2 = 3;

    // Array con los nombres de las funciones
    $funciones = ['sumar', 'restar', 'multiplicar', 'dividir'];

    echo "<ul>Las operaciones se hacen con los numeros $num1 y $num2.";

    // Recorremos el array e invocamos cada función con una función anónima
    foreach ($funciones as $nombreFuncion) {
        $resultado = (function ($funcion, $x, $y) {
            return $funcion($x, $y);
        })($nombreFuncion, $num1, $num2);

        echo "<li>$nombreFuncion: $resultado</li>";
    }

    echo "</ul>";
    ?>

</body>

</html>