<?php
/*
---
title: Unidad 2:  Actividad_4_6
desc:  Array rotado
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Generar un array con 10 números aleatorios entre 1 y 100
    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }

    // Rotar el array: último elemento pasa al inicio
    $rotado = $numeros;
    $ultimo = array_pop($rotado);         // Extrae el último elemento
    array_unshift($rotado, $ultimo);      // Lo coloca al inicio

    // Mostrar resultados
    echo "<h2>Array original</h2>";
    echo "<pre>" . implode(", ", $numeros) . "</pre>";

    echo "<h2>Array rotado</h2>";
    echo "<pre>" . implode(", ", $rotado) . "</pre>";
    ?>

</body>

</html>