<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
/*
---
title: Unidad 2:  Actividad_4_10
desc:  Secuencia de dados aleatorios y ordenados de mayor a menor 
tags: [PHP, basico]
---
*/
?>

<body>
    <p>Ejemplo: </p>


<div>
<div>
    <?php
    // Generar número aleatorio entre 2 y 7
    $cantidadDados = rand(2, 7);
    $valoresDados = [];

    // Tirada aleatoria
    for ($i = 0; $i < $cantidadDados; $i++) {
        $numero = rand(1, 6);
        $valoresDados[] = $numero;
    }

    // Mostrar tirada original
    echo "<p><strong>Tirada aleatoria:</strong></p>";
    foreach ($valoresDados as $valor) {
        echo "<img src='img/{$valor}.svg'>";
    }

    // Ordenar tirada
    sort($valoresDados);

    // Mostrar tirada ordenada
    echo "<p><strong>Tirada ordenada:</strong></p>";
    foreach ($valoresDados as $valor) {
        echo "<img src='img/{$valor}.svg'>";
    }
    ?>
</div>

</div>


</body>

</html>