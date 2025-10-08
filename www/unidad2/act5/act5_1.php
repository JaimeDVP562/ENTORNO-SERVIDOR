<?php
/*
---
title: Unidad 2:  Actividad_5_1
desc:  Array --> Creamos un array con una lista de elementos, fusionamos eliminando duplicados y mostramos
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
    //  Creamos los arrays 
    $proveedor1 = ["Camiseta", "Pantalón", "Zapatos"];
    $proveedor2 = ["Bufanda", "Camiseta", "Gorra"];

    // Fusionamos los arrays con el array_mergue()
    $productosUnidos = array_merge($proveedor1, $proveedor2);

    // Eliminamos duplicados
    $productosNoDuplicados = array_unique($productosUnidos);

    // Capturamos los productos duplicados en los proveedores
    $eliminadosProveedor1 = array_diff($proveedor1, $productosNoDuplicados);
    $eliminadosProveedor2 = array_diff($proveedor2, $productosNoDuplicados);

    // Mostramos la lista del primer proveedor
    echo ("<h3>Proveedor 1</h3><ul>");
    foreach ($proveedor1 as $producto){
        echo ("<li>$producto</li>");
    }
    echo("</ul>");
        // Mostramos la lista del segundo proveedor
    echo ("<h3>Proveedor 1</h3><ul>");
    foreach ($proveedor2 as $producto){
        echo ("<li>$producto</li>");
    }
    echo("</ul>");

    // Mostramos la lista final de productos sin duplicados
    echo "<h3>Lista sin duplicados:</h3><ul>";
    foreach ($productosNoDuplicados as $producto) {
        echo "<li>$producto</li>";
    }
    echo "</ul>";

    ?>

</body>

</html>