<?php
/*
---
title: Unidad 2:  Actividad_7_1
desc:  Array --> FUNCIONES: Numero par - impar Comprobando con bool
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
    $num = rand(1,10);
    
    // Creamos la funcion 
    function parImpar(int $num) : bool{
        if ($num % 2 === 0){
            $resultado = true;
        } else {
            $resultado = false;
        }
        return $resultado;
    }

    // Llamamos a la funcion
    $resultado = parImpar($num);

    // Imprimimos por pantalla 
    echo ($resultado ? "El numero $num es par" : "El numero $num es impar");
    ?>
</body>
</html>