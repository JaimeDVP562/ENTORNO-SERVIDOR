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

//Comprueba si las credenciales son incorrectas
$email = $_POST['email'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';

/**
 * Tengo que meterlo si o si en con $_SERVER["REQUEST-METOHD] === 'POST' 
 * para que el error no lo lance hasta que se envíen los datos del formulario
 *  */
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if ($email === $emailValido && $contraseña === $claveValida) {
        $_SESSION['usuario'] = $email;
        header("Location: ./privado.php");
        exit;
    } else {
        $error = 'Email o contraseña incorrectos.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./pico.min.css">
</head>

<body>
    <main class="container">
        <form method="post" action="">
            <?php if (isset($error)): ?>
                <p style="color: red"><?= $error ?></p>
            <?php endif; ?>
            <h1>Acceso al Sistema</h1>
            <label>Email <input name="email" type="email"></label>
            <label>Contraseña <input name="contraseña" type="password"></label>
            <button type="submit">Enviar</button>
            <p style="color: red">📌Usuario de prueba: correo@falso.com</p>
            <p style="color: red;">🔑Constraseña: 123</p>
            <a href="./privado.php">Aceso a Zona Privada (Seción iniciada)</a>
        </form>
    </main>
</body>

</html>