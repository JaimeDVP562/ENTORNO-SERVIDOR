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
    $dividendo;
    $divisor;

    // Si queremos devolver tanto una float porque nos obliguen como una "excepcion" podemos utilizar el ?float
    function dividir(int $dividendo, int $divisor = 4): ?float
    {
    if ($divisor == 0) {
        echo "Error : División por cero";
        return null;
    } else {
        $resultado = $dividendo / $divisor;
    }
        return $resultado;
    };

    // Llamamos a la funcion
    $resultado1 = dividir(3,4);
    $resultado2 = dividir(6,0);
    $resultado3 = dividir(6,4);

    echo "La división 3 entre 4 es: $resultado1 </br>";
    echo "La división 6 entre 0 es: $resultado2 </br>";
    echo "La división 6 entre 4 es:(valor por defecto, porque no he indicado el divisor) es: $resultado3 </br>";
    ?>  
</body>

</html>