<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
/*
---
title: Unidad 2:  Actividad_3_8
desc:  Dado más pequeño de cinco dados aleatorios
tags: [PHP, basico]
---
*/
?>
<style>
    table {

        width: 50%;
        margin: 20px auto;
    }

    th,
    td {
        border: 2px solid #333;
        padding: 10px;
        text-align: left;
    }

    thead {
        background-color: #f0f0f0;
    }
</style>

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