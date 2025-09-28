<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = 5;
/*
    Una vez le asignemos el valor a la variable comprobamos que sea el valor positivo, si es así elige "Positivo" 
    --> Si el valor de $numero no es positivo, salta la siguiente condicion que a su vez contiene otra comparacion
    --> y la segunda condicion evalúa si el valor es negativo ( imprimer "Negativo") y si no imprime la opcion de "Cero" 
*/
    echo ($numero <=> 0) === 1 ? "Positivo" : (($numero <=> 0) === -1 ? "Negativo" : "Cero");
    ?>

</body>

</html>