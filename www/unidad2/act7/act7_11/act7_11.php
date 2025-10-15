<?php
/*
---
title: Unidad 2:  Actividad_7_11
desc:  Array --> FUNCIONES: Juego de cartas aleatorio con ARRAYS
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
    // Creamos las variables
    $n = rand(5, 10);

    // Creamos la funcion 
    function generaMatrizCartasRand(int $n): array
    {

        $palos = ["c", "d", "p", "t"];
        $cartas = [];

        for ($i = 0; $i < $n; $i++) {
            $palo = $palos[array_rand($palos)];
            $carta = rand(1, 13);
            $cartas[] = $palo . $carta;
        }
        return $cartas;
    }

    // Llamamos a la funcion 
    $cartas = generaMatrizCartasRand($n);

    // Pintamos por pantalla la salida
    foreach ($cartas as $carta) {
        echo "<img src='img/$carta.svg' width ='80'>";
    }

    ?>
</body>

</html>