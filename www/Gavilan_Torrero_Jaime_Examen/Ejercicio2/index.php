<?php
// Iniciamos sesion
session_start();
// Creamos la variable de sesion para el número secreto
if (!isset($_SESSION['numeroSecreto'])) {
    $_SESSION['numeroSecreto'] = rand(0, 100);
}
if (!isset($_SESSION['contadorIntentos'])) {
    $_SESSION['contadorIntentos'] = 0;
}


if (!empty($_POST)) {
    $mensaje ="";
    if ($_POST['numeroUsuario'] == $_SESSION['numeroSecreto']) {
        $mensaje = "Enhorabuena has acertado en : " . $_SESSION['contadorIntentos'];
        $_SESSION['contadorIntentos']++;
        session_abort();
        session_destroy();
    }elseif ($_POST['numeroUsuario'] > $_SESSION['numeroSecreto']) {
        $mensaje = "El número secreto es menor";
        $_SESSION['contadorIntentos']++;
    }elseif ($_POST['numeroUsuario'] < $_SESSION['numeroSecreto']) {
        $mensaje = "El número secreto es mayor";
        $_SESSION['contadorIntentos']++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <form action="" method="post">
            <h2>Introduzca un número</h2>
            <label for=""><input type="number" name="numeroUsuario"></label>
            <button type="submit">Enviar</button>
        </form>
        <p><?php  echo $mensaje ?><?php echo $_SESSION['numeroSecreto'] ?></p>
    </main>

    </main>

</body>

</html>