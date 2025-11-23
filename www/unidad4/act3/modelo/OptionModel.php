
<?php
// Modelo para la tabla votaciones
class VotacionModelo
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Devuelve todas las opciones de votación
    public function todas()
    {
        try {
            $sql = "SELECT * FROM votaciones";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
        return [];
    }

    // Agrega una nueva opción de votación
    public function agregar($opcion)
    {
        try {
            $sql = "INSERT INTO votaciones (opcion, votos) VALUES (:opcion, 0)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':opcion', $opcion);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    // Suma un voto a la opción indicada
    public function votar($id)
    {
        try {
            $sql = "UPDATE votaciones SET votos = votos + 1 WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    // Elimina una opción existente
    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM votaciones WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
