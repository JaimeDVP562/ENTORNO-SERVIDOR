<?php
/**
 * Vista del Instituto - Muestra la gestión de cursos y estudiantes
 */

// Verificar que tenemos los datos necesarios
if (!isset($datos) || !is_array($datos)) {
    die("Error: No se han recibido los datos del controlador");
}

$cursos = $datos['cursos'] ?? [];
$listaInicial = $datos['listaInicial'] ?? [];
$listaModificada = $datos['listaModificada'] ?? [];
$listaFinal = $datos['listaFinal'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto (MVC - POO - PDO)</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .section {
            margin-bottom: 30px;
        }
        h1 {
            color: #333;
            text-align: center;
            border-bottom: 2px solid #007cba;
            padding-bottom: 10px;
        }
        h2 {
            color: #007cba;
            margin-top: 20px;
        }
        .item {
            margin: 5px 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Instituto (MVC - POO - PDO)</h1>

        <!-- Cursos -->
        <div class="section">
            <h2>📚 Cursos</h2>
            <?php foreach (array_values($cursos) as $index => $curso): ?>
                <div class="item"><?php echo ($index + 1) . '. ' . htmlspecialchars($curso['nombre'] ?? 'N/A'); ?></div>
            <?php endforeach; ?>
        </div>

        <!-- Lista Inicial -->
        <div class="section">
            <h2>👩‍🎓 Lista Inicial</h2>
            <?php foreach (array_values($listaInicial) as $index => $estudiante): ?>
                <div class="item"><?php echo ($index + 1) . '. ' . htmlspecialchars($estudiante['nombre'] ?? 'N/A') . ' (' . htmlspecialchars($estudiante['edad'] ?? 'N/A') . ' años) - Curso: ' . htmlspecialchars($estudiante['nombre_curso'] ?? 'N/A'); ?></div>
            <?php endforeach; ?>
        </div>

        <!-- Lista Modificada -->
        <div class="section">
            <h2>✏️ Lista Modificada</h2>
            <?php foreach (array_values($listaModificada) as $index => $estudiante): ?>
                <div class="item"><?php echo ($index + 1) . '. ' . htmlspecialchars($estudiante['nombre'] ?? 'N/A') . ' (' . htmlspecialchars($estudiante['edad'] ?? 'N/A') . ' años) - Curso: ' . htmlspecialchars($estudiante['nombre_curso'] ?? 'N/A'); ?></div>
            <?php endforeach; ?>
        </div>

        <!-- Lista Final -->
        <div class="section">
            <h2>🗑️ Lista Final</h2>
            <?php foreach (array_values($listaFinal) as $index => $estudiante): ?>
                <div class="item"><?php echo ($index + 1) . '. ' . htmlspecialchars($estudiante['nombre'] ?? 'N/A') . ' (' . htmlspecialchars($estudiante['edad'] ?? 'N/A') . ' años) - Curso: ' . htmlspecialchars($estudiante['nombre_curso'] ?? 'N/A'); ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>