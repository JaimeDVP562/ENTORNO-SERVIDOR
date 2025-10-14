<?php
/*
---
title: Unidad 2:  Actividad_7_6
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
    // Creamos las variables
    $num1 = 40;
    $num2 = 3;

    // Creamos las funciones
    function sumar(int $num1, int $num2): int
    {
        $resultado = $num1 + $num2;
        return $resultado;
    };

    function restar(int $num1, int $num2): int
    {
        $resultado = $num1 - $num2;
        return $resultado;
    };

    function multiplicar(int $num1, int $num2): int
    {
        $resultado = $num1 * $num2;
        return $resultado;
    };

    function dividir(float $num1, float $num2): float
    {
        $resultado = $num1 / $num2;
        return $resultado;
    };


    // Llamamos a las funciones 
    $resultadoSuma = sumar($num1, $num2);
    $resultadoRestar = restar($num1, $num2);
    $resultadoMultiplicar = multiplicar($num1, $num2);
    $resultadoDividir = dividir($num1, $num2);

    // Pintamos por pantalla 
    echo "<ul>Las operaciones se hacen con los números $num1 y $num2";
    echo "<li>Sumar : $resultadoSuma</li>";
    echo "<li>Restar : $resultadoRestar</li>";
    echo "<li>Multiplicar : $resultadoMultiplicar</li>";
    echo "<li>Dividir : $resultadoDividir</li>";
    echo "</ul>"
    ?>
</body>

</html>