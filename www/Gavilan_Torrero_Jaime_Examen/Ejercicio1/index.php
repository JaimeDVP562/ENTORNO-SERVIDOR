<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<style>
    table {
        border: 1px;
    }
</style>

<body>

    <?php
    include_once 'funciones.php';

    // Creamos la variables para el array
    $numeroRamdon =[];

    // Rellenamos el array con 5 numeros aleatorios
    for ($i=0; $i < 5; $i++) { 
        $num= rand(1,100);
        $numeroRamdon[] = $num;
    }
    
    // Ordenamos el array 
    sort($numeroRamdon);

    // Mostramos por patalla el array en una tabla
    echo "<h1>Números y categorías</h1>";
    echo "<table>";
    echo "<th><tr><td>Números</td><td>Categorías</td><td>Código</td></tr></th>";
    echo "<tbody>";
    foreach ($numeroRamdon as $key => $value) {
        echo "<tr><td>$value</td><td>" .categoria($value)."</td><td>".generaCodigo($value)."</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    // Generamos la suma del array
    echo "<h1>Suma total: ".array_sum($numeroRamdon)."</h1>";

    
    //Contamos cuantos numeros tiene cada rango
    echo "<ul>";
    echo "<li>Rango bajo : ";
    foreach ($numeroRamdon as $key => $value) {
        echo cuentaRangoBajo($value);
    }
    echo "</ul>";


    ?>
</body>

</html>