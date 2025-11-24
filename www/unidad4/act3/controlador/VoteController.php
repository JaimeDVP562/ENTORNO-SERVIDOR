
<?php
class VoteController
{
    private VotacionModelo $modelo;

    public function __construct(VotacionModelo $modelo)
    {
        $this->modelo = $modelo;
    }

    // Coordina el proceso y prepara los datos para la vista
    public function ejecutar(): array
    {
        // Ejemplo: agregar opciones y votos automáticos
        $this->modelo->agregar('Opción A');
        $this->modelo->agregar('Opción B');
        $this->modelo->votar(1); // Vota a Opción A
        $this->modelo->votar(2); // Vota a Opción B
        $this->modelo->modificar(1, 'Opción A Modificada');
        $this->modelo->eliminar(2); // Elimina Opción B
        $opciones = $this->modelo->todas();
        $total = array_sum(array_column($opciones, 'votos'));
        return [
            'opciones' => $opciones,
            'total' => $total
        ];
    }
}
