<?php
session_start();
$numeroSecreto = 2;
$contador = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['intentoUsuario'])) {
        echo "Numero incorrecto";
        $contador++;
    }elseif ($_POST['intentoUsuario'] > $numeroSecreto){
        echo "El número es mayor";
        $contador++;
    }elseif ($_POST['intentoUsuario'] < $numeroSecreto){
        echo "El número es menor";
        $contador++;
    }else{
        echo "¡¡¡Acertaste ¡¡¡ Has necesitado $contador aciertos";
        header("Location: ./cerrar-sesion.php");
    }
}
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pico.min.css">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <form method="post" action=""></form>
        <h2>Número Secreto: Elige número entre 1 y 10</h2>
        <P>Número</P>
        <label for=""><input type="text"></label>
        <button name="intentoUsuario">Enviar</button>
    </main>
</body>

</html>