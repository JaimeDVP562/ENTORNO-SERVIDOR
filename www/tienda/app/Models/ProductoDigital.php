<?php
namespace App\Models;

class ProductoDigital extends Producto {
    private string $tamanoArchivo;

    public function __construct(string $codigo, float $precio, string $tamanoArchivo) {
        parent::__construct($codigo, $precio);
        $this->tamanoArchivo = $tamanoArchivo;
    }

    public function mostrarResumen(): string {
        return "💾 Producto digital {$this->getCodigo()} - " . 
               number_format($this->getPrecio(), 2) . "€ ({$this->tamanoArchivo})";
    }
}
