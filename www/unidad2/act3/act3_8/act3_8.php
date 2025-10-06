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
title: Unidad 2:  Actividad_3_7
desc:  Dado más pequeño
tags: [PHP, basico]
---
*/
?>
<style>
    table {

        width: 50%;
        margin: 20px auto;
    }

    th,
    td {
        border: 2px solid #333;
        padding: 10px;
        text-align: left;
    }

    thead {
        background-color: #f0f0f0;
    }
</style>

<body>
    <p>Ejemplo: </p>


    <div>
        <?php
        // Declaramos las variables 
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        $dado3 = rand(1, 6);
        $dado4 = rand(1, 6);
        $dado5 = rand(1, 6);

        // Utilizamos if-else para mostrar comprobar los resultados
        if (($dado1 < $dado2) && ($dado1 < $dado3) && ($dado1 < $dado4) && ($dado1 < $dado5)) {
            echo ("<p>El valor más pequeño es: $dado1.</p>");
        } else if (($dado2 < $dado1) && ($dado2 < $dado3) && ($dado2 < $dado4) && ($dado2 < $dado5)) {
            echo ("<p>El valor más pequeño es: $dado2.</p>");
        } elseif (($dado3 < $dado1) && ($dado3 < $dado2) && ($dado3 < $dado4) && ($dado3 < $dado5)) {
            echo ("<p>El valor más pequeño es: $dado3.</p>");
        } elseif (($dado4 < $dado1) && ($dado4 < $dado2) && ($dado4 < $dado5) &&  ($dado1 < $dado5)) {
            echo ("<p>El valor más pequeño es: $dado4.</p>");
        }elseif (($dado5 < $dado1) && ($dado5 < $dado2) && ($dado5 < $dado3)&& ($dado5 < $dado4)) {
            echo ("<p>El valor más pequeño es: $dado5.</p>");
        }
        ?>
        <img src="img/<?php echo ($dado1); ?>.svg" alt="">
        <img src="img/<?php echo ($dado2); ?>.svg" alt="">
        <img src="img/<?php echo ($dado3); ?>.svg" alt="">
        <img src="img/<?php echo ($dado4); ?>.svg" alt="">
        <img src="img/<?php echo ($dado5); ?>.svg" alt="">
    </div>

</body>

</html>