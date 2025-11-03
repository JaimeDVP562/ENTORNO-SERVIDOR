<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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


            //$productosFiltrados = array_filter($productos);

            /**
             * 
             * 
             * 
             */
            echo "<table>
            <th><td>id</td></th>
            <th><td>nombre</td></th>
            <th><td>precio</td></th>
            <th><td>stock</td></th>
            <th><td>categoria</td></th>";
            
            foreach ($productos as $producto) {
                
                echo "<tr>$producto[nombre]</tr></br>";
                echo "<tr>$producto[precio]</tr>";
                echo "<tr>$producto[stock]</tr>";
                echo "<tr>$producto[categoria]</tr>";
                echo "</td>";
            }
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