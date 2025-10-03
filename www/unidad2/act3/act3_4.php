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
title: Unidad 2:  Actividad_3_4
desc:  Mostramos numeros pares dentro de un rango de numeros
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
        <p>Números pares del 0 al 50</p>

        <?php
        // Declaramos las variables 
        $numero = 0;
        
        while ($numero <= 50) {
            if ($numero % 2 == 0) {
                echo "<ul>$numero</ul>";
            }
            $numero++;
        }

        ?>
    </div>



</body>

</html>