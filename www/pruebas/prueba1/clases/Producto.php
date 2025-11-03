<?php
    class Producto 
    {
        const IVA = 0.23;
        private static $numProductos = 0; 

        public static function nuevoProducto() {
            self::$numProductos++;
        }

        public static function getNumProductos() {
            return self::$numProductos;
        }
    }

    Producto::nuevoProducto();
    Producto::nuevoProducto();
    Producto::nuevoProducto();
    Producto::nuevoProducto();
    $impuesto = Producto::IVA;

    echo "Hay " . Producto::getNumProductos() . " nuevos productos<br>";
    echo "El iva es del " . $impuesto;
    /**
     * 
     * Las constantes se pueden acceder por defecto estaticas
     * Los metodos estaticos sirven para que podamos acceder desde 
     * otra clase sin tener que instanciar /crear un objeto 
     * 
     * 
     */
?>

