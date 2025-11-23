
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Votaciones</title>
    <link rel="stylesheet" href="https://unpkg.com/pico.css">
</head>
<body>
<main class="container">
    <h1>🗳️ Votaciones</h1>
    <?php if (!empty($data['mensaje'])): ?>
        <p><?= htmlspecialchars($data['mensaje']) ?></p>
    <?php endif; ?>

    <!-- Formulario para votar -->
    <form method="post">
        <?php foreach ($data['opciones'] as $opcion): ?>
            <input type="radio" name="votar" value="<?= $opcion['id'] ?>"> <?= htmlspecialchars($opcion['opcion']) ?>
        <?php endforeach; ?>
        <button type="submit">Votar</button>
        <span>Total: <?= $data['total'] ?></span>
    </form>

    <!-- Resultados -->
    <h2>Resultados</h2>
    <table>
        <thead>
            <tr><th>Opción</th><th>Votos</th><th>%</th><th>Eliminar</th></tr>
        </thead>
        <tbody>
        <?php foreach ($data['opciones'] as $opcion): ?>
            <tr>
                <td><?= htmlspecialchars($opcion['opcion']) ?></td>
                <td><?= $opcion['votos'] ?></td>
                <td><?= $data['total'] ? round($opcion['votos'] * 100 / $data['total']) : 0 ?>%</td>
                <td>
                    <form method="post" style="display:inline">
                        <button type="submit" name="eliminar" value="<?= $opcion['id'] ?>">❌</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Formulario para agregar nueva opción -->
    <h2>+ Nueva opción</h2>
    <form method="post">
        <input type="text" name="nueva_opcion" placeholder="Nueva opción...">
        <button type="submit">Agregar opción</button>
    </form>
</main>
</body>
</html>
