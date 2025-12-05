<?php

// Iniciamos sesion
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_POST)) {
        if ($_SESSION['colorSesion']= $_POST['color'] == 'rojo') {
            echo "<ul><h2>Color favorito</h2><li>Tu color favorito es</li><li>Rojo</li>";
            echo "<a href='./index.php'>Cambiar color</a></ul>";
        } elseif ($_SESSION['colorSesion']= $_POST['color'] == 'verde') {
            echo "<ul><h2>Color favorito</h2><li>Tu color favorito es</li><li>Verde</li>";
            echo "<a href='./index.php'>Cambiar color</a></ul>";
        } elseif ($_SESSION['colorSesion']= $_POST['color'] == 'azul') {
            echo "<ul><h2>Color favorito</h2><li>Tu color favorito es</li><li>Azul</li>";
            echo "<a href='./index.php'>Cambiar color</a></ul>";
        }
    }
    ?>

</body>

</html>