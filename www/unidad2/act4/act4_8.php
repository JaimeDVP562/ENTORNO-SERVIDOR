<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p>Ejemplo: </p>


    <div>
        <?php
        // Generar número aleatorio entre 1 y 5
        $ramdonNumber1 = rand(1, 5);
        $valoresDados = [];

        for ($i = 1; $i <= $ramdonNumber1; $i++) {
            $numeroDado = rand(1, 6);
            $valoresDados[] = $numeroDado;
            echo "<img src='img/{$numeroDado}.svg'>";
        }

        $valorMinimo = min($valoresDados);
        ?>
        <p>El valor más pequeño obtenido es: <?php echo $valorMinimo; ?></p>
    </div>
</body>
</html>