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
$array1 = [
    "num1" => rand(1,100),
    "num2" => rand(1,100),
    "num3" => rand(1,100)
];

$mediaArray = array_sum($array1) / count($array1);
echo("La media de {$num1} , {$num2} y {$num3} es $mediaArray");
?>

<body>

</body>

</html>