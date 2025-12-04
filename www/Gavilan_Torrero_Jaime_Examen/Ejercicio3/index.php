<?php
session_start();

if (!empty($_POST)) {
    // Lista de Tienda informatica 
    $productos = [
        ['id' => 1, 'nombre' => 'Portátil HP', 'precio' => 899.99, 'stock' => 5, 'categoria' => 'Informática'],
        ['id' => 2, 'nombre' => 'Mouse Logitech', 'precio' => 25.50, 'stock' => 15, 'categoria' => 'Periféricos'],
        ['id' => 3, 'nombre' => 'Teclado Mecánico', 'precio' => 79.99, 'stock' => 0, 'categoria' => 'Periféricos'],
        ['id' => 4, 'nombre' => 'Monitor Dell 27"', 'precio' => 299.00, 'stock' => 8, 'categoria' => 'Informática'],
        ['id' => 5, 'nombre' => 'Webcam HD', 'precio' => 50, 'stock' => 3, 'categoria' => 'Accesorios']
    ];
    if ($_POST['categoria'] == 'todas') {
        echo "<table>";
        echo "<th><tr><td>id</td><td>nombre</td><td>precio</td><td>stock</td><td>categoria</td></tr></th>";
        echo "<tbody>";
        foreach ($productos as $key => $value) {
            echo "<tr><td>" . $value['id'] . "</td><td>" . $value['nombre'] . "</td><td>" . $value['precio'] . "</td><td>" . $value['stock'] . "</td><td>" . $value['categoria'] . "</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }elseif ($_POST['categoria'] == 'informatica') {
        foreach ($productos as $key => $value) {
            echo "<li>". $value['cateogoria'] === $_POST['categoria'] ."</li>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div>
            <?php


            ?>
            <form action="" method="post">
                <h3>Filtra por categoria</h3>
                <select name="categoria" id="categoria">
                    <option value="todas">Todas</option>
                    <option value="informatica">Informatica</option>
                    <option value="perifericos">Perifericos</option>
                    <option value="accesorios">Accesorios</option>
                </select>
                <button type="submit">Enviar</button>
            </form>
        </div>

    </main>
</body>

</html>