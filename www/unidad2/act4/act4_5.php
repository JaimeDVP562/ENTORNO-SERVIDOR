<?php
/*
---
title: Unidad 2:  Actividad_4_5
desc:  Array asociativo
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>

<body>
    <?php
    $productos = [
        ["nombre" => "Pan", "precio" => 1.00, "iva" => 1],
        ["nombre" => "Leche", "precio" => 0.90, "iva" => 2],
        ["nombre" => "Libro", "precio" => 15.00, "iva" => 2],
        ["nombre" => "Cerveza", "precio" => 1.50, "iva" => 3],
        ["nombre" => "Televisor", "precio" => 300.00, "iva" => 4],
        ["nombre" => "Medicamento", "precio" => 12.00, "iva" => 1],
        ["nombre" => "Zapatos", "precio" => 45.00, "iva" => 4],
        ["nombre" => "Agua mineral", "precio" => 0.80, "iva" => 3],
        ["nombre" => "Chocolate", "precio" => 2.50, "iva" => 3],
        ["nombre" => "Smartphone", "precio" => 500.00, "iva" => 4]
    ];

    $ivas = [
        1 => 0.00,
        2 => 0.04,
        3 => 0.10,
        4 => 0.21
    ];

    // Usamos array_map para calcular el precio con IVA
    $productosConIVA = array_map(function ($producto) use ($ivas) {
        $porcentajeIVA = $ivas[$producto['iva']];
        $producto['precio_con_iva'] = $producto['precio'] * (1 + $porcentajeIVA);
        $producto['porcentaje_iva'] = $porcentajeIVA;
        return $producto;
    }, $productos);

    // Mostrar tabla
    echo "<h2>Listado de productos</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Producto</th><th>Precio sin IVA (€)</th><th>Tipo de IVA</th><th>Precio con IVA (€)</th></tr>";

    foreach ($productosConIVA as $producto) {
        echo "<tr>";
        echo "<td>{$producto['nombre']}</td>";
        echo "<td>" . number_format($producto['precio'], 2) . "</td>";
        echo "<td>{$producto['iva']} (" . ($producto['porcentaje_iva'] * 100) . "%)</td>";
        echo "<td>" . number_format($producto['precio_con_iva'], 2) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>

</html>