<?php
/*
---
title: Unidad 2:  Actividad_6_3
desc:  Encuentra una palabra y la muestra como queramos
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
    // Creamos las variables 
    $textoCompleto = "PHP es fantástico. Con PHP puedes construir sitios dinámicos. PHP mola.";
    $terminoBuscado = "PHP";

    // Le pasamos la palabra que queremos encontrar, le indicamos como queremos que la resalte y le pasamos la frase donde queremos que la busque
    $fraseResaltada = str_replace($terminoBuscado, "<mark>$terminoBuscado</mark>", $textoCompleto);
        
    // Mostramos por pantalla 
    echo "Texto: $textoCompleto</br>"; 
    echo "Término: $terminoBuscado</br>";
    echo"Resultado: $fraseResaltada";
    ?>
</body>

</html>