<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["aceptar"])) {
        setcookie("aceptarCookies", "1", time() + 3600);
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    }
    if (isset($_POST["borrar"])) {
        setcookie("aceptarCookies", "", time() - 3600);
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

</head>

<body>
    <main class="container">
        <h2>Bienvenidos a la pagina</h2>
        <P>Contenido de tu página principal...</P>
        <?php if (!isset($_COOKIE["aceptarCookies"])): ?>
            <form method="post" action="">
                <P>Politica de cookies</P>
                <p>Usamos las cookies para mejorar tu experiencia. Al continuar aceptas nuestra <a href="./act2_2.php">Politica de cookies</a></p>
                <button type="submit" name="aceptar">Aceptar Cookies</button>
            </form>

        <?php else: ?>
            <form method="post" action="">
                <button type="submit" name="borrar">Borrar cookies</button>
            </form>
        <?php endif; ?>
    </main>
</body>

</html>