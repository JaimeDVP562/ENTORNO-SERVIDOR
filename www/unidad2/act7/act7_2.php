<?php
/*
---
title: Unidad 2:  Actividad_7_2
desc:  Array --> FUNCIONES: Array de tamaño aleatorio
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

    // Creamos la funcion 
    function arrayAleatorio(int $min, int $max): array {
        $tam = rand($min, $max);
        $resultado = [];

        if ($min > $max) {
            [$min, $max] = [$max, $min];
        }
        for ($i=0; $i < $tam; $i++) { 
            $resultado []= rand($min, $max);
        }
    return $resultado;
    }

    // Llamamos a la función
    $arrayGenerado = arrayAleatorio(22,25);

    // Pintamos el array
    echo "<pre>";
    print_r($arrayGenerado);
    echo "</pre>";
    ?>
</body>

</html>