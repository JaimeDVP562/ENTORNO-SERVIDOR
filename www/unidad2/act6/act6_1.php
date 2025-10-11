<?php
/*
---
title: Unidad 2:  Actividad_6_1
desc:  Array --> Cuenta caracteres de un texto
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
    $texto = "Este es mi comentario para soporte técnico.";
    $limiteCaracteres = 160;
  

    // Obtenemos números de caracteres
    $cantidadCaracteres = strlen($texto);
    $resultado = ($limiteCaracteres - $cantidadCaracteres);

    // Mostramos por pantalla 
    echo "<h2>Comentario</br></h2>";
    echo "Este es mi comentario para soporte técnico.</br></br>";
    echo "Longitud:  <strong>$cantidadCaracteres</strong>  caracteres</br></br>";
    echo "Te quedan $resultado caracteres";

    // Calculamos cuantos caracteres faltan para los caracteres establecidos
    ?>
</body>

</html>