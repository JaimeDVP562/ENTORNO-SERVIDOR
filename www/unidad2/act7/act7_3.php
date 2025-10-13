<?php
/*
---
title: Unidad 2:  Actividad_7_3
desc:  Array --> FUNCIONES: Array de tamaño aleatorio y devolvemos los valores mayores de 10
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
    
    // Creamos la funcion
    function arrayMayores (array $arrayEntrada) : array{
        $resultado =[];
        foreach ($arrayEntrada as $valor){
            if ($valor > 10) {
                $resultado[] = $valor; 
            }
        }        
        return $resultado;
    }  
    
    // Declaramos el array de entrada
    $arrayEntrada =[12,2,23,43,34,45,45,7,3,4];

    // Llamamos a la funcion
    $arrayGenerado = arrayMayores($arrayEntrada);
    
    // Pintamos por pantalla 
    echo "<pre>";
    print_r($arrayGenerado);
    echo "</pre>";

    //echo "<pre>";
    //print_r($arrayEntrada);
    //echo "</pre>";


    ?>
</body>
</html>