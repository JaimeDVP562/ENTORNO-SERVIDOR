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
title: Unidad 2:  Actividad_3_3
desc:  Sentencia match
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
    // Declaramos la variable que vamos a utilizar
    $numero =rand(1,100);
    $mensaje = "";

    // Le asiganmos valor a la variable con la sentencia match
    $mensaje = match ($numero) {
        1 => ' y en castellano es 1',
        2 => ' y en castellano es 2',
        3 => ' y en castellano es 3',
    }

    ?>
</body>

</html>