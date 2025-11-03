<?php
class Persona
{
    private string $nombre;

    public function __construct(string $nom)
    {
        $this->nombre = $nom;
    }
    public function __toString()
    {
        return "Hola, soy " . $this->nombre;
    }

    public function __destruct()
    {
        echo "Destruyendo el objeto de " . $this->nombre . "\n";
    }

    public function imprimir()
    {
        echo $this->nombre;
        echo '<br>';
    }
}

$fede = new Persona("Jaime Gavilan Torrero");
$fede->imprimir();
