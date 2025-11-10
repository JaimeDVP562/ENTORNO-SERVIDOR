<?php
// clase Tienda
class Tienda 
{
    public int $cod;
    public string $nombre;
    public ?string $tlf; // $tlf puede ser nulo.

    public function __toString() {
        // Si $tlf es null, mostramos un guion
        $telefono = $this->tlf ?? '-';
        return "($this->cod) $this->nombre - $telefono";
    }
}    
?>