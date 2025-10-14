<?php
/*
---
title: Unidad 2:  Actividad_7_5
desc:  Array --> FUNCIONES: Obtener la posicion de un numero
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
    $numero = 2674;
    $posicion = 3;

    function digitoN(int $numero, int $posicion ): int
    {
        // Convertimos el numero a un array de caracteres
        $digitos = str_split((string) $numero);

        // Cuando está en la posicion fijada, se lo añadimos el valor
        if (isset($digitos[$posicion])) {
            $resultado =$digitos[$posicion -1];
        }
        return $resultado;
    };

    $resultado = digitoN($numero, $posicion);

    echo "El numero es $numero y la posicion que pido es la $posicion</br>";
    echo "En esa posición está el $resultado";
    ?>
</body>

</html>