<?php
/*
---
title: Unidad 2:  Actividad_4_3
desc:  Array bidimensional
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <?php
    // Generar array aleatorio de 5 elementos con "M" o "F"
    $generos = [];
    for ($i = 0; $i < 5; $i++) {
        $generos[] = rand(0, 1) ? "M" : "F";
    }

    // Contar ocurrencias con array_count_values
    $conteo = array_count_values($generos);

    // Asegurar que ambos valores estén presentes
    $resultado = [
        'M' => $conteo['M'] ?? 0,
        'F' => $conteo['F'] ?? 0
    ];
    ?>

    <h2>Personas</h2>
    <table >
        <tr>
            <th>#</th>
            <th>Sexo</th>
        </tr>
        <?php foreach ($generos as $index => $sexo): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $sexo ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Conteo</h2>
    <table >
        <tr>
            <th>Sexo</th>
            <th>Cantidad</th>
        </tr>
        <?php foreach ($resultado as $sexo => $cantidad): ?>
            <tr>
                <td><?= $sexo ?></td>
                <td><?= $cantidad ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>