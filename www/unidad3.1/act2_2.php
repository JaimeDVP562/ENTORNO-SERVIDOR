<?php
session_start();
$_SESSION['opcionA'] = 0;
$_SESSION['opcionB'] = 0;

$_SESSION['contadorA'] = 0;

// Creamos las variables de sesion
if(isset($_SESSION['opcionA'])){
    $_SESSION['contadorA']++;

}
if(isset($_SESSION['opcionB'])){
    $_SESSION['opcionB']++;

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
        <form method="post" action="">
            <h2>Votación</h2>
            <p>Opción A: <? $_SESSION['contadorA'] ?> votos — Opción B: 0 votos</p>
            <button name="opcionA" for="">Votar A</button>
            <button name="opcionB" for="">Votar B</button>
            <h2>Resultados</h2>
            <p>Opción A</p>
            <meter value="20" min ="0" max="20"></meter>
             <p>Opción B</p>
            <meter value="20" min ="0" max="20"></meter>
            <p>Escala máxima 20 votos</p>
        </form>
    </main>
</body>

</html>