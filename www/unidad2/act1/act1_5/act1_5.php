<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
/*
---
title: Unidad 2:  Actividad_1.5
desc:  Mostrar dos dados y los suma
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
    <?php
    // Generar número aleatorio entre 0 y 5
    $ramdonNumber1 = rand(1, 5);
    $ramdonNumber2 = rand(1, 5);
    $suma = $ramdonNumber1 + $ramdonNumber2;

    ?>
    <!--IMPORTANTE la ruta de la imagen tenenos que ponerla relativa no absoluta si no no sale-->

    <img src="img/<?php echo $ramdonNumber1; ?>.svg" />
    <img src="img/<?php echo $ramdonNumber2; ?>.svg" />
    <p>Total de puntos: <?php echo $suma ?> </p>

</body>

</html>