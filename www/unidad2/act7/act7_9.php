<?php
/*
---
title: Unidad 2:  Actividad_7_9
desc:  Array --> FUNCIONES: Aumentar visitas
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
    $visitas = 0;

    function aumentarVisitas (string $visitas): int{
        $visitas += 1;
        return $visitas;
    }

    // Llamamos a la funcion
    $resultado = aumentarVisitas($visitas);
    
    echo "<h2>El numero de visitas ha aumentado a $resultado</h2>";
    ?>
</body>
</html>