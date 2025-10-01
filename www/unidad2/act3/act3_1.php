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
title: Unidad 2:  Actividad_3.1
desc:  Cual es el numero ramdon mayor
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
    $numero1 = rand(1, 100);
    $numero2 = rand(1, 100);
    $numero3 = rand(1, 100);
    $resultado = "";

    // Para mostrar el mensaje tendremos que utilizar un if-else
    if ($numero1 > $numero2 && $numero1 > $numero3) {
        $resultado = "El número mayor es $numero1";
    } elseif ($numero2 > $numero1 && $numero2 > $numero3) {
        $resultado = "El número mayor es $numero2";
    } elseif ($numero3 > $numero1 && $numero3 > $numero2) {
        $resultado = "El número mayor es $numero3";
    } else {
        $resultado = "Hay un empate entre los números mayores";
    }

    ?>
    <div>
        <ul>Juego: Mayor de tres números</ul>
        <ul>Número 1 : <?php echo ($numero1) ?></ul>
        <ul>Número 2 : <?php echo ($numero2) ?></ul>
        <ul>Número 3: <?php echo ($numero3) ?></ul>
        <ul>El número mayor es: <?php echo ($resultado); ?></ul>
    </div>


</body>

</html>