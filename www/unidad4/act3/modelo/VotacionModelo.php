<?php
class VotacionModelo
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function agregar(string $texto): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO votaciones (opcion, votos) VALUES (?, 0)");
        $stmt->execute([$texto]);
    }

    public function votar(int $id): void
    {
        $stmt = $this->pdo->prepare("UPDATE votaciones SET votos = votos + 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function modificar(int $id, string $nuevoTexto): void
    {
        $stmt = $this->pdo->prepare("UPDATE votaciones SET opcion = ? WHERE id = ?");
        $stmt->execute([$nuevoTexto, $id]);
    }

    public function eliminar(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM votaciones WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function todas(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM votaciones");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
