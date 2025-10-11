<?php
/*
---
title: Unidad 2:  Actividad_5_2
desc:  Array --> Creamos un ARRAY ASOCIATIVO --> FILTRAR POR CAMPO --> TABLA
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table {
            border-collapse: collapse; /* quita los espacios entre bordes */
        }

        th, td {
            border: 1px solid black;   /* borde simple negro */
        }

    </style>
<body>
    <?php
    //  Creamos los arrays asociativos
    $usuarios = [
        ["nombre" => "Ana", "departamento" => "Ventas", "estado" => "activo"],
        ["nombre" => "Luis", "departamento" => "TI", "estado" => "inactivo"],
        ["nombre" => "Marta", "departamento" => "Marketing", "estado" => "activo"]
    ];
    $usuariosActivos = array_filter($usuarios, function ($usuario) {
        return $usuario["estado"] === "activo";
    });


    ?>

        <h2>Emplados</h2>
    <table >
        <tr>
            <th>Nombre</th> 
            <th>Departamento</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['departamento'] ?></td>
                <td><?= $usuario['estado'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

            <h2>Emplados activos</h2>
    <table >
        <tr>
            <th>Nombre</th> 
            <th>Departamento</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($usuariosActivos as $usuario): ?>
            <tr>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['departamento'] ?></td>
                <td><?= $usuario['estado'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>