<?php
/*
---
title: Unidad 2:  Actividad_3_2
desc:  FORMULARIOS: Crea un sistema de login básico utilizando sesiones para gestionar el acceso de usuarios. Muestra mensajes de error para credenciales incorrectas.
tags: [PHP, basico]
---
*/
?>
<?php
// Iniciamos sesion
session_start();
// Creamos las variables 
$emailValido = "correo@falso.com";
$claveValida = "123";

$email = $_POST['email'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';
$error = false;

if (($email === $emailValido) && ($contraseña === $claveValida)) {
    $_SESSION['usuario'] = $email;
    header("Location: act3_2.php");
    exit;
} else {
    $error = 'Email o contraseña incorrectos.';
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
        <!--Lanzamos el error-->
        <?php if (isset($error)): ?>
            <p style="color: red"><?= $error ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <h1>Acceso al Sistema</h1>
            <label>Email <input name="email" type="email"></label>
            <label>Contraseña <input name="contraseña" type="password"></label>
            <button type="submit">Enviar</button>
            <p style="color: red">📌Usuario de prueba: correo@falso.com</p>
            <p style="color: red;">🔑Constraseña: 123</p>
            <a href="./act3_2.php">Aceso a Zona Privada (Seción iniciada)</a>
        </form>
    </main>
</body>

</html>