<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <?php
    // Incluimos el fichero de funciones
    include_once 'funciones.php';

    // Creamos el array relleno
    //$ramdonNumber = [rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100)];
    $ramdonNumber = [];

    // Rellenamos el array con numeros aleatorios y con un bucle
    for ($i = 0; $i < 5; $i++) {
        $num = rand(1, 100);
        array_push($ramdonNumber, $num);
    }
    // Ordenamos el array
    sort($ramdonNumber);

    echo "<h1>Números y categorías</h1>";
    // Mostramos en una tabla
    echo "<table>";
    echo "<th><tr><td>Numero</td><td>Categoria</td><td>Codigo</td></tr></th>";
    echo "<tbody>";
    foreach ($ramdonNumber as $key => $value) {
        echo "<tr><td>$value</td><td>" . categoria($value) . "</td><td>" . codigo($value) . "</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";

    // Mostramos la suma total
    echo "<h1>La suma total es : " . array_sum($ramdonNumber) . "</h1>";

    ?>
</body>

</html>