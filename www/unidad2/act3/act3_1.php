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
title: Unidad 2:  Actividad_3_1
desc:  Comparar numeros ramdon y decir cual es mayor
tags: [PHP, basico]
---
*/
?>

<body>
    <?php
    // Declaramos las variables
    $numero1 = rand(1, 100);
    $numero2 = rand(1, 100);
    $numero3 = rand(1, 100);
    $respuesta = "";

    // Para comprobar el resultado tendremos que utilizar un if-else
    if ((($numero1 > $numero2) && ($numero1 > $numero3))) {
        $respuesta = ("El numero mayor es $numero1");
    } elseif ((($numero2 > $numero1) && ($numero2 > $numero3))) {
        $respuesta = ("El numero mayor es $numero2");
    } elseif ((($numero3 > $numero2) && ($numero3 > $numero1))) {
        $respuesta = ("El numero mayor es $numero3");
    } elseif ($numero1 == $numero2 && $numero2 == $numero3) {
        $respuesta =  ("Todos los numeros son iguales ");

        if ($numero1 == $numero2) {
            $respuesta =  ("El $numero1 y el $numero2 son iguales ");
        } elseif ($numero1 == $numero3) {
            $respuesta = ("El $numero1 y el $numero3 son iguales ");
        } elseif ($numero1 == $numero2) {
            $respuesta = ("El $numero1 y el $numero2 son iguales ");
        } elseif ($numero2 == $numero3) {
            $respuesta = ("El $numero2 y el $numero3 son iguales ");
        }
    }

    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th,
        ul {
            border: 2px solid #333;
            padding: 10px;
            text-align: left;
        }

        thead {
            background-color: #f0f0f0;
        }

        tbody tr:nth-child(even) {
            background-color: #fafafa;
        }
    </style>
</body>
<!--Una vez comprobados todos los resultados mostramos la respuesta-->
    <ul> Juego: Mayor de tres números </ul>
    <li> <?php echo ("$numero1"); ?> </li>
    <li> <?php echo ("$numero2"); ?> </li>
    <li> <?php echo ("$numero3"); ?> </li>
    <li> <?php echo ("$respuesta") ?> </li>

</html> 