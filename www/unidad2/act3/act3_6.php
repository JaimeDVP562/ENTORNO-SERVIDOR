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
title: Unidad 2:  Actividad_3_6
desc:  Tabla de multiplicar de un número usando bucle for
tags: [PHP, basico]
---
*/
?>
<style>
    table {
        
        width: 50%;
        margin: 20px auto;
    }

    th, td {
        border: 2px solid #333;
        padding: 10px;
        text-align: left;
    }

    thead {
        background-color: #f0f0f0;
    }


</style>

<body>
    <div>
        <p>Tabla de multiplicar del 7</p>

        <?php
        // Declaramos las variables 
        $resultado = "";

        for ($i = 0; $i < 10; $i++) {
            $resultado = 7 * $i;

            echo "<table> <tr><td>7</td> <td> x </td> <td>$i</td> <td>=</td> <td>$resultado</td> </td>
            
            </table>";
        }
        ?>

    </div>



</body>

</html>