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
title: Unidad 2:  Actividad_2.4
desc:  Cliente VIP, cliente normal
tags: [PHP, basico]
---
*/
?>
<body>
    <?php
    // Declaramos las variables 
    $saldo = "1000";
    $ingreso = 250;

    //Convertimos la variable saldo que era una cadena a tipo numero sumandole 0
    $saldo = $saldo + 0;
    $resultado = $saldo + $ingreso;
    // Ahora si podemos sumar ambos valores 

    
    // Comparamos con los operadores ternarios
    echo ($resultado > 1200) ? "Cliente VIP" : "Cliente normal";
    ?>

</body>

</html>