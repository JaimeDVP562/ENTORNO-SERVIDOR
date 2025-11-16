<?php
// Creamos la clase curso modelo
class CursoModelo
{
    private PDO $pdo;
    public function __construct(PDO $pdo)

    {
        $this->pdo = $pdo;
        return;
    }


    public function agregar($nombre)
    {
        try {
            // Sentencia SQL con parámetros nombrados
            $sql = "INSERT INTO instituto (nombre) VALUES (:nombre)";
            $stmt = $this->pdo->prepare($sql);
            // Asociamos variables a los parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();

            echo "✅ Nuevos registros insertados correctamente usando bindParam().";
        } catch (PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
        return;
    }
    // Devuelve el ID de un curso si existe
    public function idPorNombre($nombre)
    {
        try {
            $sql = "SELECT * FROM instituto WHERE nombre = :nombre";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
            $curso = $stmt->fetch();
            return $curso;
        } catch (PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
        return;
    }
    // Devuelve todos los cursos
    public function todos()
    {
        try {
            $sql = "SELECT * FROM instituto";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cursos = $stmt->fetchAll();
            return $cursos;
        } catch (PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
        return;
    }
    // Borra todos los cursos y reinicia el autoincremento
    public function vaciarTodo()
    {
        try {
            $sql = "DELETE  FROM instituto";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return;
        } catch (\PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
    }
}
