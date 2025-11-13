<?php

class EstudianteModelo
{
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Inserta un nuevo estudiante y devuelve su ID
    public function agregar($nombre, $edad, $curso)
    {
        try {
            // Sentencia SQL con parámetros nombrados
            $sql = "INSERT INTO instituto (nombre, edad, curso) VALUES (:nombre, :edad, :curso)";
            $stmt = $this->pdo->prepare($sql);

            // Asociamos variables a los parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':curso', $curso);

            echo "✅ Nuevos registros insertados correctamente usando bindParam().";
        } catch (PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
        return;
    }

    // Devuelve el ID de un curso existente
    
}
