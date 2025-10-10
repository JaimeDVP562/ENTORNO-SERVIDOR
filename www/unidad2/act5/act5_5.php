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

<body>
    <?php
    //  Creamos los arrays asociativos
    $productos = [
        ["nombre" => "camiseta", "precio" => 15],
        ["nombre" => "pantalon", "precio" => 35,],
        ["nombre" => "zapatos", "precio" => 50,],
        ["nombre" => "gorra", "precio" => 10],
    ];
    $productosMasCaros = array_filter($productos, function ($producto) {
        return $producto["precio"] > 20;
    });


    ?>

    <h2>Lista completa de productos</h2>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Productos con precio superior a 20 €</h2>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($productosMasCaros as $productoMasCaro): ?>
            <tr>
                <td><?= $productoMasCaro['nombre'] ?></td>
                <td><?= $productoMasCaro['precio'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>