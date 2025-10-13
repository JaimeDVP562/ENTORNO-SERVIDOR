<?php
/*
---
title: Unidad 2:  Actividad_7_1
desc:  Array --> FUNCIONES: Numero par - impar
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Declaramos las variables 
    $numeroRamdon = rand(1,10);
    
    // Creamos la funcion 
    function parImpar(int $num) : string{
        $resultado = ($num % 2 === 0) ? "El numero $num es par" : "El numero $num es impar";

        return $resultado;
    }

    // Llamamos a la funcion
    echo parImpar($numeroRamdon);
    ?>
</body>
</html>