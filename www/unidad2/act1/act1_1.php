<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
/*
---
title: Unidad 2:  Actividad_1.1
desc:  Mostrar numero PI por pantalla
tags: [PHP, basico]
---
*/
?>

<body>
    <style>
        body {
            font-family: 'Libre Baskerville', serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f9f9f9;
        }

        .box {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
    </style>

    <!--Para imprimir solo dos caracteres tenemos que 
    utilizar el printf ("&2+.f") para quedarnos solo con dos decimales-->
    <?php
    printf("%+.2f", M_PI);
    ?>
</body>

</html>