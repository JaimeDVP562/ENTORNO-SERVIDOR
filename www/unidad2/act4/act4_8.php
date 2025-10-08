<?php
/*
---
title: Unidad 2:  Actividad_4_8
desc:  Array --> Crea bucle entre un rango y elimina los repetidos
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        // Generar un grupo de entre 5 y 15 bolas numeradas del 1 al 10
        $cantidad = rand(5, 15);
        $grupo = [];

        for ($i = 0; $i < $cantidad; $i++) {
            $numero = rand(1, 10);
            $grupo[] = $numero;
        }

        // Mostrar el grupo inicial con bolas Unicode
        echo "Grupo inicial:\n";
        foreach ($grupo as $numero) {
            echo "&#" . (10101 + $numero) . " ";
        }
        echo "\n";

        // Eliminar valores repetidos
        $grupoSinRepetidos = array_unique($grupo);

        // Mostrar el grupo sin repeticiones
        echo "Grupo sin repetidos:\n";
        foreach ($grupoSinRepetidos as $numero) {
            echo "&#" . (10101 + $numero) . " ";
        }
        echo "\n";
        ?>
    </div>
</body>

</html>