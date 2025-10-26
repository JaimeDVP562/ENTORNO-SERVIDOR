<?php
/*
---
title: Unidad 3: Actividad 2_1
desc:  FORMULARIOS: Modifica el color de fondo de una página web usando un formulario y cookies.
tags: [PHP, basico]
---
*/
?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["color"])) {
    $value = $_POST["color"];
    setcookie("micookie", $value, time() + 3600); // 1 hora
    $color = $value;
} else {
    $color = $_COOKIE["micookie"] ?? 'white';
}
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <main class="container">

        <div style="background-color: <?= htmlspecialchars($color); ?>;">
            <h1>Selecciona un color de fondo</h1>
            <form method="post" action="">
                <label>
                    <select name="color">
                        <option value="white">Blanco</option>
                        <option value="red">Rojo</option>
                        <option value="green">Verde</option>
                        <option value="blue">Azul</option>
                        <option value="yellow">Amarillo</option>
                        <option value="orange">Naranja</option>
                        <option value="pink">Rosa</option>
                    </select>
                </label>
                <button type="submit">Enviar</button>
            </form>
        </div>
        </form>
    </main>
</body>

</html>