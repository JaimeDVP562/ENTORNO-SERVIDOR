<?php
/*
---
title: Unidad 2:  Actividad_4_1
desc:  Arrays asociativos, datos de personas, calculamos LA MEDIA y obtiene el VALOR MÁS ALTO
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<?php
// Array asociativo: nombre => altura
$personas = [
    "Ana" => 165,
    "Luis" => 178,
    "María" => 172
];

// Calcular altura media
$alturaMedia = array_sum($personas) / count($personas);

// Encontrar la persona más alta
$personaMasAlta = array_keys($personas, max($personas))[0];
$alturaMasAlta = max($personas);
?>
<body>
    <h2>Alturas de personas</h2>
<table >
    <tr>
        <th>Nombre</th>
        <th>Altura (cm)</th>
    </tr>
    <?php foreach ($personas as $nombre => $altura): ?>
        <tr>
            <td><?= $nombre ?></td>
            <td><?= $altura ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td><strong>Media</strong></td>
        <td><strong><?= round($alturaMedia, 2) ?></strong></td>
    </tr>
    <tr>
        <td><strong>Más alta</strong></td>
        <td><strong><?= $personaMasAlta ?> (<?= $alturaMasAlta ?> cm)</strong></td>
    </tr>
</table>


    <p>La persona más alta es <?= $personaMasAlta ?> con <?= $alturaMasAlta ?></p>
</body>
</html>
