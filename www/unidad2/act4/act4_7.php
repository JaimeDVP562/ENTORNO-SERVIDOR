<?php
/*
---
title: Unidad 2:  Actividad_4_7
desc:  Array --> Si es par de un color y si no de otro
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Generar array con 10 números enteros aleatorios
$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}

// Mostrar tabla con colores según paridad
echo "<h2>Números en tabla con colores</h2>";
echo "<table border='1' cellpadding='10'><tr>";

foreach ($numeros as $num) {
    $color = ($num % 2 === 0) ? "blue" : "red";
    echo "<td style='color:$color; font-weight:bold;'>$num</td>";
}

echo "</tr></table>";
?>
</body>
</html>