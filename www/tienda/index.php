<?php
require_once __DIR__ . '/app/Interfaces/DetalleInterface.php';
require_once __DIR__ . '/app/Models/Producto.php';
require_once __DIR__ . '/app/Models/ProductoFisico.php';
require_once __DIR__ . '/app/Models/ProductoDigital.php';
require_once __DIR__ . '/app/Models/Cliente.php';
require_once __DIR__ . '/app/Models/Pedido.php';

use App\Models\{Cliente, ProductoFisico, ProductoDigital, Pedido};
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Pedidos</title>
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body class="container">

    <h1>🛒 Sistema de Pedidos</h1>

    <?php
    // Crear clientes
    $cliente1 = new Cliente("Ana López", "ana@example.com");
    $cliente2 = new Cliente("Luis Pérez", "luis@example.com");

    // Crear productos
    $tv = new ProductoFisico("TV123", 499.99, 10);
    $ebook = new ProductoDigital("EBOOK456", 9.99, "2MB");
    $game = new ProductoDigital("GAME42", 59.99, "10MB");

    // Crear pedidos
    $pedido1 = new Pedido($cliente1);
    $pedido1->agregarProducto($tv);
    $pedido1->agregarProducto($ebook);
    $pedido1->agregarProducto($game);

    $pedido2 = new Pedido($cliente2);
    $pedido2->agregarProducto($ebook);
    $pedido2->agregarProducto($game);

    // Mostrar resultados
    $pedido1->mostrarDetalle();
    $pedido2->mostrarDetalle();
    ?>

</body>
</html>
