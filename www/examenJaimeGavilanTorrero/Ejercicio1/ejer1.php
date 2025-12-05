<?php
// Iniciamos sesion
session_start();

if (!empty($_POST)) {

    $resultado = "";
    if ($_POST['cantidad'] && $_POST['producto'] == 'libro') {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = 15.95;
        $resultado = $cantidad * $precio;
        $resultado =  "<ul><h2>Ticket</h2><li>Producto: <strong>Libro</strong><li>Unidades " . $cantidad . "</li><li>Precio Unitario: " . $precio . " €</li><li>Total: " . $resultado . " €</li></ul>";
        session_destroy();
    } elseif ($_POST['cantidad'] && $_POST['producto'] == 'cuaderno') {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = 3.5;
        $resultado = $cantidad * $precio;
        $resultado = "<ul><h2>Ticket</h2><li>Producto: <strong>Cuaderno</strong><li>Unidades " . $cantidad . "</li><li>Precio Unitario: " . $precio . " €</li><li>Total: " . $resultado . " €</li></ul>";
    } elseif ($_POST['cantidad'] && $_POST['producto'] == 'boligrafo') {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = 1.2;
        $resultado = $cantidad * $precio;
        $resultado = "<ul><h2>Ticket</h2><li>Producto: <strong>Boligrafo</strong><li>Unidades " . $cantidad . "</li><li>Precio Unitario: " . $precio . " €</li><li>Total: " . $resultado . " €</li></ul>";
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
        <form action="" method="post">
            <h2>Realizar pedido</h2>
            <label for="">Producto</label></br>
            <select name="producto" id="producto">
                <option value="libro">Libro(15,95€)</option>
                <option value="cuaderno">Cuaderno(3,50€)</option>
                <option value="boligrafo">Boligrafo(1,20€)</option>
            </select></br>
            <label for="">Cantidad<input type="number" name="cantidad" min="1" require></label>
            <button type="submit">Calcular total</button>
        </form>
        <p><?php echo "$resultado";?></p>
    </main>

</body>

</html>