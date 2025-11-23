
<?php
class VoteController
{
    private VotacionModelo $modelo;

    public function __construct(VotacionModelo $modelo)
    {
        $this->modelo = $modelo;
    }

    // Procesa las acciones del usuario y prepara los datos para la vista
    public function procesar(): array
    {
        $mensaje = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['nueva_opcion']) && $_POST['nueva_opcion'] !== '') {
                if ($this->modelo->agregar($_POST['nueva_opcion'])) {
                    $mensaje = '✅ Opción agregada correctamente.';
                } else {
                    $mensaje = '❌ Error al agregar opción.';
                }
            } elseif (isset($_POST['votar'])) {
                if ($this->modelo->votar((int)$_POST['votar'])) {
                    $mensaje = '🗳️ Voto registrado.';
                } else {
                    $mensaje = '❌ Error al votar.';
                }
            } elseif (isset($_POST['eliminar'])) {
                if ($this->modelo->eliminar((int)$_POST['eliminar'])) {
                    $mensaje = '🗑️ Opción eliminada.';
                } else {
                    $mensaje = '❌ Error al eliminar opción.';
                }
            }
        }
        $opciones = $this->modelo->todas();
        $total = array_sum(array_column($opciones, 'votos'));
        return [
            'opciones' => $opciones,
            'total' => $total,
            'mensaje' => $mensaje
        ];
    }
}
