<?php
/*
---
title: Unidad 2:  Actividad_7_4
desc:  Array --> FUNCIONES: Obtener el número maximo de un array
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
    function mayor(int ...$numeros): int
    {

        $mayor = $numeros[0];

        foreach ($numeros as $numero) {
            if ($numero > $mayor) {
                $mayor = $numero;
            }
        }
        return $mayor;
    };

    $resultado = mayor(2,34,2,1,2);

    // Pintamos por pantalla
    echo "<pre>";
    echo "$resultado";
    echo "</pre>";
    ?>
</body>

</html>