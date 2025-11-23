<?php

class EstudianteModelo
{
    private PDO $pdo;

    // Constructos con la conexion
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Inserta un nuevo estudiante y devuelve su ID
    public function agregar($nombre, $edad, $curso)
    {
        try {
            // Sentencia SQL con parámetros nombrados
            $sql = "INSERT INTO estudiantes (nombre, edad, curso_id) VALUES (:nombre, :edad, :curso)";
            $stmt = $this->pdo->prepare($sql);

            // Asociamos variables a los parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':curso', $curso);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    // Actualizar los datos de un estudiante buscandolos por nombre
    public function actualizaPorNombre($nombreActual, $nuevoNombre, $nuevaEdad, $nuevoCursoId)
    {
        try {
            // Sentencia SQL con parámetros nombrados
            $sql = "UPDATE estudiantes SET nombre = :nuevoNombre, edad = :nuevaEdad, curso_id = :nuevoCursoId WHERE nombre = :nombreActual";
            $stmt = $this->pdo->prepare($sql);

            // Asociamos variables a los parámetros
            $stmt->bindParam(':nuevoNombre', $nuevoNombre);
            $stmt->bindParam(':nuevaEdad', $nuevaEdad);
            $stmt->bindParam(':nuevoCursoId', $nuevoCursoId);
            $stmt->bindParam(':nombreActual', $nombreActual);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function eliminarPorNombre($nombre)
    {
        try {
            // Sentencia SQL con parámetros nombrados
            $sql = "DELETE FROM estudiantes WHERE nombre = :nombre";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    // Devuelve todos los estudiante junto con el nombre del curso
    public function conCurso(){
                try {
            // Sentencia SQL con parámetros nombrados
            $sql = "SELECT estudiantes.*, cursos.nombre as nombre_curso FROM estudiantes INNER JOIN cursos ON estudiantes.curso_id = cursos.id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $estudiantes = $stmt->fetchAll();
            return $estudiantes;
        } catch (PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }

    }
    // Vaciar todos los registros y reinicia el autoincremento
        public function vaciarTodo()
    {
        try {
            $sql = "DELETE  FROM estudiantes";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return;
        } catch (\PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
    }
}
