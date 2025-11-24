<?php
class VoteController {
    private $modelo;

    public function __construct($modelo) {
        $this->modelo = $modelo;
    }

    public function procesar() {
        $mensaje = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['nueva_opcion'])) {
                $this->modelo->agregarOpcion($_POST['nueva_opcion']);
                $mensaje = '✅ Opción agregada correctamente';
            } elseif (!empty($_POST['votar'])) {
                $this->modelo->votar($_POST['votar']);
                $mensaje = '🗳️ Voto registrado';
            } elseif (!empty($_POST['eliminar'])) {
                $this->modelo->eliminar($_POST['eliminar']);
                $mensaje = '🗑️ Opción eliminada';
            }
        }
        $opciones = $this->modelo->obtenerOpciones();
        $total = array_sum(array_column($opciones, 'votos'));
        return [
            'opciones' => $opciones,
            'total' => $total,
            'mensaje' => $mensaje
        ];
    }
}
?>