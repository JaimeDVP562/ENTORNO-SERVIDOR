<?php
/*
---
title: Unidad 2:  Actividad_6_2
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
    // Creamos el texto completo
    $textoCompleto = "Ana Maria Lopez Perez";
    // Con la funcion explode() separamos el texto en palabra y crea un array con todas las palabras separadas
    $textoSeparado = explode(" ", $textoCompleto);

    // Imprime por pantalla 
    echo "<h3>Nombre completo: $textoCompleto</h3>";
    echo "<h3>Nombre : $textoSeparado[0] $textoSeparado[1]</h3>";
    echo "<h3>Primer apellido : $textoSeparado[2]</h3>";
    echo "<h3>Segundo apellido : $textoSeparado[3]</h3>";

    echo "<h3>Iniciales: " . implode(".", array_map(fn($p) => $p[0], $textoSeparado)) . ".\n</h3>";    ?>
</body>

</html>