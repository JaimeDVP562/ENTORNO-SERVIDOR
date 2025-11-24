<?php
// $data = ['opciones' => ..., 'total' => ..., 'mensaje' => ...];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Votaciones</title>
</head>
<body>
    <?php if ($data['mensaje']): ?>
        <p><?= htmlspecialchars($data['mensaje']) ?></p>
    <?php endif; ?>

    <form method="post">
        <h2>Votar por una opción</h2>
        <?php foreach ($data['opciones'] as $opcion): ?>
            <button type="submit" name="votar" value="<?= $opcion['id'] ?>">
                <?= htmlspecialchars($opcion['opcion']) ?> (<?= $opcion['votos'] ?> votos)
            </button>
        <?php endforeach; ?>
    </form>

    <h2>Resultados</h2>
    <table border="1">
        <tr>
            <th>Opción</th>
            <th>Votos</th>
            <th>Porcentaje</th>
            <th>Eliminar</th>
        </tr>
        <?php foreach ($data['opciones'] as $opcion): ?>
            <tr>
                <td><?= htmlspecialchars($opcion['opcion']) ?></td>
                <td><?= $opcion['votos'] ?></td>
                <td>
                    <?= $data['total'] > 0 ? round($opcion['votos'] * 100 / $data['total'], 2) . '%' : '0%' ?>
                </td>
                <td>
                    <form method="post" style="display:inline;">
                        <button type="submit" name="eliminar" value="<?= $opcion['id'] ?>">❌</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Agregar nueva opción</h2>
    <form method="post">
        <input type="text" name="nueva_opcion" required>
        <button type="submit">Agregar opción</button>
    </form>
</body>
</html>