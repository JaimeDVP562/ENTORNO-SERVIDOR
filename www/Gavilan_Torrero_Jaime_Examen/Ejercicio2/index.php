<?php
// Iniciamos sesion siempre 
session_start();
// Creamos las variables de sesion
if(!isset($_SESSION['numeroSecreto'])){
    $_SESSION['numeroSecreto'] = 7;
}
if (!isset($_SESSION['contadorIntentos'])) {
    $_SESSION['contadorIntentos'] = -1 ;
}

// Registramos con una variable de seccion el post del usuario
if(isset($_POST['numeroUsuario'])){
    $_SESSION['numeroUsuario'] = $_POST['numeroUsuario'];
    $_SESSION['contadorIntentos']++;
}
// Comprobamos la logica para ver si el usuario acierta o no
if (empty($_POST)) {
    $mensaje ="";
} else {
    if ($_POST['numeroUsuario'] > $_SESSION['numeroSecreto']) {
        $mensaje = "El número secreto es menor";
    }elseif ($_POST['numeroUsuario'] < $_SESSION['numeroSecreto']) {
        $mensaje= "El número secreto es mayor";
    }elseif($_POST['numeroUsuario'] == $_SESSION['numeroSecreto']){
        $mensaje = "¡Has acertado! Has necesitado " . $_SESSION['contadorIntentos'] . " intentos.";
        unset($_SESSION);
        session_destroy();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <form action="" method="post">
            <h2>Introduzca un número</h2>
            <label for="numeroUsuario"><input type="number" name="numeroUsuario"></label>
            <button type = "submit">Enviar</button>
        </form>
        <p><?php echo $mensaje;?></p>
    </main>
</body>
</html>