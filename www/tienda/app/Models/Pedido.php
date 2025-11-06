<?php
namespace App\Models;

use App\Interfaces\DetalleInterface;

class Pedido implements DetalleInterface {
    private Cliente $cliente;
    private array $productos = [];

    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function agregarProducto(Producto $producto): void {
        $this->productos[] = $producto;
    }

    public function mostrarDetalle(): void {
        echo "<h3>Pedido de {$this->cliente}</h3>";

        $total = 0;
        foreach ($this->productos as $producto) {
            echo "<p>{$producto->mostrarResumen()}</p>";
            $total += $producto->getPrecio();
        }

        echo "<strong>Total: " . number_format($total, 2, ',', '.') . "€</strong><hr>";
    }
}
