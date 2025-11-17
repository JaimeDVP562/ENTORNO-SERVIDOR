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
            $sql = "INSERT INTO cursos (nombre) VALUES (:nombre)";
            $stmt = $this->pdo->prepare($sql);
            // Asociamos variables a los parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    // Devuelve el ID de un curso si existe
    public function idPorNombre($nombre)
    {
        try {
            $sql = "SELECT * FROM cursos WHERE nombre = :nombre";
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
            $sql = "SELECT * FROM cursos";
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
            $sql = "DELETE  FROM cursos";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return;
        } catch (\PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
    }
}
