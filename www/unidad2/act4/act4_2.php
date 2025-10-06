<?php
/*
---
title: Unidad 2:  Actividad_4_2
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
    // Array de personas: cada persona es un array asociativo
    $personas = [
        ['nombre' => 'Fede', 'altura' => 193, 'email' => 'fede@correo.com'],
        ['nombre' => 'Laura', 'altura' => 168, 'email' => 'laura@correo.com'],
        ['nombre' => 'Carlos', 'altura' => 175, 'email' => 'carlos@correo.com']
    ];
    ?>

    <h2>Listado de personas</h2>
    <table border="1">
        <tr>
            <th>Nombre</th> 
            <th>Altura (cm)</th>
            <th>Email</th>
        </tr>
        <?php foreach ($personas as $persona): ?>
            <tr>
                <td><?= $persona['nombre'] ?></td>
                <td><?= $persona['altura'] ?></td>
                <td><?= $persona['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
