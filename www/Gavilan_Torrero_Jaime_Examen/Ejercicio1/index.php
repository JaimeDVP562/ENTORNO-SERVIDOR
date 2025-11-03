<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px;
    }
</style>
<body>
    <?php
    $numerosAleatorios = rand(1, 100);

    $arrayNumerosAleatorios = [99, 34, 45, 66, 77];

    // Pintamos por pantalla el array generado con 5 numesros aleatorios ordenado
    //print_r($arrayNumerosAleatorios);
    //print_r(sort($arrayNumerosAleatorios));
    $arrayOrdenado[] = sort($arrayNumerosAleatorios);

    // Sumamos el array
    $sumaTotal = array_sum($arrayNumerosAleatorios);

    echo"Números y Categorias";
        echo "<table>";
        echo "<th>
        <td>Numero</td>
        <td>Categoria</td>
        <td>Código</td>
        </th>";
    foreach ($arrayNumerosAleatorios as $value) {

        echo "<td>$value</td>";

    }
        echo "</table>";

        echo "Suma total: $sumaTotal";

    ?>
</body>

</html>