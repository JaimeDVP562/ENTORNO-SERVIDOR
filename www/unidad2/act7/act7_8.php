<?php
/*
---
title: Unidad 2:  Actividad_7_8
desc:  Array --> FUNCIONES: Division con DOS TIPOS de retorno dirferentes
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
    function dividir(int $dividendo, int $divisor = 4): string|float
    {
        if ($divisor === 0) {
            return "Error: División por cero.";
        }

        return $dividendo / $divisor;
    }

    // Llamamos a la función
    $resultado1 = dividir(3, 4);
    $resultado2 = dividir(6, 0);
    $resultado3 = dividir(6); // Usa el valor por defecto

    // Mostramos los resultados
    echo "La división 3 entre 4 es: $resultado1 </br>";
    echo "La división 6 entre 0 es: $resultado2 </br>";
    echo "La división 6 entre 4 (valor por defecto) es: $resultado3 </br>";
    ?>
</body>

</html>