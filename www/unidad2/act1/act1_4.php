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
title: Unidad 2:  Actividad_1.4
desc:  Nivel numero ramdon
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
    $ramdonNumber = rand(0, 100);
    echo "<h1>Nivel: {$ramdonNumber}%</h1>";
    ?>

    <meter value="<?= $ramdonNumber ?>" min="0" max="100"></meter>
</body>

</html>