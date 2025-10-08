<?php
/*
---
title: Unidad 2:  Actividad_4_4
desc:  Array asociativo
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=z, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// Declaramos y los rellenamos con valores aleatorios
$array1 = [
    "num1" => rand(1, 100),
    "num2" => rand(1, 100),
    "num3" => rand(1, 100)
];

// Con la funcion sum() sumamos los valores y con count() cuenta el tamaño del array 
$mediaArray = array_sum($array1) / count($array1);
echo "La media de {$array1['num1']}, {$array1['num2']} y {$array1['num3']} es $mediaArray"; ?>

<body>

</body>

</html>