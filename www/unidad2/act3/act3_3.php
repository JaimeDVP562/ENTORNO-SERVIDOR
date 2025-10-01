<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
/*
---
title: Unidad 2:  Actividad_2.8
desc:  Nave espacial
tags: [PHP, basico]
---
*/
?>
<style>
    div {
        border: solid;
        text-align: center;
    }
</style>

<body>
    <?php
    // Declaramos las variables
    $nota = rand(1, 3);

    $resultado = "";

    // Para mostrar el mensaje tendremos que utilizar un if-else
    if ($nota >= 0 && $nota < 5) {
        $resultado = "Insuficiente";
    } elseif ($nota >= 5 && $nota <= 6) {
        $resultado = "Suficiente";
    } elseif ($nota >= 7 && $nota <= 8){
        $resultado = "Notable";
    } else {
        $resultado = "Sobresaliente";
    }

    ?>
    <div>
        <ul>Simulación de Calificación.</ul>
        <ul>La nota generada es : <?php echo ($nota) ?></ul>
        <ul>Calificación : <?php echo ($resultado) ?></ul>
    </div>


</body>

</html>