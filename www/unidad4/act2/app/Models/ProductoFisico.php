<?php
namespace App\Models;

class ProductoFisico extends Producto {
    private float $peso;

    public function __construct(string $codigo, float $precio, float $peso) {
        parent::__construct($codigo, $precio);
        $this->peso = $peso;
    }

    public function mostrarResumen(): string {
        return "📦 Producto físico {$this->getCodigo()} - " . 
               number_format($this->getPrecio(), 2) . "€ ({$this->peso} kg)";
    }
}
