<?php
// Iniciamos sesion 
session_start();
// Inicializamos las variables de sesion que vamos a utilizar
if (!isset($_SESSION['contadorA'])) {
    $_SESSION['contadorA'] = 0;
}
if (!isset($_SESSION['contadorB'])) {
    $_SESSION['contadorB'] = 0;
}

// Aplicamos la logica para procesar los datos
if (isset($_POST['opcionA'])) {
    $_SESSION['contadorA']++;
}
if (isset($_POST['opcionB'])) {
    $_SESSION['contadorB']++;
}
if (isset($_POST['borrar'])) {
    $_SESSION['contadorA'] = 0;
    $_SESSION['contadorB'] = 0;
}


// Para volver a redirigir a la paginal principal 
header("Location: ./act3_1.php");
exit;
