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

<body>
    <?php
    // Declaramos las variables
    $numero1 = rand();
    $numero2 = rand();
    $numero3 = rand();

    // Para mostrar el mensaje tendremos que utilizar un if-else
    if (($numero1 > ($numero2 && $numero3))) {
        echo ("El numero mayor es $numero1");
    } elseif (($numero2 > ($numero1 && $numero3))) {
        echo ("El numero mayor es $numero2");
    } elseif (($numero3 > ($numero1 && $numero2))) {
        echo ("El numero mayor es $numero3");
    }
    ?>

    <ul>Juego: Mayor de tres números</ul>
    <li><?php echo ("$numero1") ;?></li>


</body>

</html>