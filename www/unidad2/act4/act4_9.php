<?php
/*
---
title: Unidad 2:  Actividad_4_9
desc:  Array --> Creamos un grupo de emoticonos, elegimos uno y mostramos si el elegido está en el grupo
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
        // Generar entre 5 y 10 emoticonos
        $cantidad = rand(5, 10);
        $grupo = generarGrupoEmoticonos($cantidad);

        // Función para generar un emoticono aleatorio dentro del rango Unicode
        function generarEmoticono($min = 128512, $max = 128580)
        {
            return mb_chr(rand($min, $max), 'UTF-8');
        }

        // Función para generar un grupo de emoticonos
        function generarGrupoEmoticonos($cantidad, $min = 128512, $max = 128580)
        {
            $grupo = [];
            for ($i = 0; $i < $cantidad; $i++) {
                $grupo[] = generarEmoticono($min, $max);
            }
            return $grupo;
        }

        // Mostrar el grupo
        echo "Grupo:\n";
        echo implode(" ", $grupo) . "\n";

        // Elegir un emoticono al azar
        $emoticono = generarEmoticono();
        echo "\nElegido: $emoticono\n";

        // Verificar si está en el grupo
        if (in_array($emoticono, $grupo)) {
            echo "Si está en el grupo\n";
        }
        ?>

    </div>
</body>

</html>