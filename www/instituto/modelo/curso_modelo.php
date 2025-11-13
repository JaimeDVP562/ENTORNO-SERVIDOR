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

            while ($fila = $stmt->fetch()) {
                // Se muestran los datos.
                echo "Id del curso: " . $fila["id"] . "<br>";
            }
        } catch (PDOException $e) {
            echo "❌ Error: " . $e->getMessage();
        }
        return;
    }
}
