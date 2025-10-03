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
title: Unidad 2:  Actividad_3_5
desc:  Sumamos los números del 1 al 10
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
    <div>
        <p>Suma de números del 1 al 10.</p>

        <?php
        // Declaramos las variables 
        $numero = 1;
        $suma = 0;

        while ($numero <= 10) {
            $numero ++;
            $suma += $numero;
        }

        ?>

        <p>La suma de todos los números de 1 al 10 es : <?php echo $suma ?></p>
    </div>



</body>

</html>