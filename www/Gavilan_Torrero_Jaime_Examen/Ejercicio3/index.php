<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px;
        border: solid;
        border-color: black;
    }
</style>
<body>
    <main class="container">
        <div>
            <?php

            // Lista de Tienda informatica 
            $productos = [
                ['id' => 1, 'nombre' => 'Portátil HP', 'precio' => 899.99, 'stock' => 5, 'categoria' => 'Informática'],
                ['id' => 2, 'nombre' => 'Mouse Logitech', 'precio' => 25.50, 'stock' => 15, 'categoria' => 'Periféricos'],
                ['id' => 3, 'nombre' => 'Teclado Mecánico', 'precio' => 79.99, 'stock' => 0, 'categoria' => 'Periféricos'],
                ['id' => 4, 'nombre' => 'Monitor Dell 27"', 'precio' => 299.00, 'stock' => 8, 'categoria' => 'Informática'],
                ['id' => 5, 'nombre' => 'Webcam HD', 'precio' => 50, 'stock' => 3, 'categoria' => 'Accesorios']
            ];
            echo "<h1>Tienda de informatica</h1>";
            echo "<table><th><tr><td>id</td><td>nombre</td><td>precio</td><td><td>stock</td><td>categoria</td></tr></th>";
            echo "<tbody>";
            foreach ($productos as $key => $value) {
                echo "<tr><td>$value[id]</td><td>$value[nombre]</td><td>$value[precio]</td><td>$value[stock]</td><td>$value[categoria]</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";

            ?>
        <form method="post" action=""></form>
            <p>Filtar por categoria</p>
            <select name="filtroCategoria" id="">
                <select name="informatica" id="">Informatica</select>
                <select name="Perifericos" id="">Perifericos</select>
                <select name="Accesorios" id="">Accesorios</select>
            </select>
    </div>

    </main>
</body>

</html>