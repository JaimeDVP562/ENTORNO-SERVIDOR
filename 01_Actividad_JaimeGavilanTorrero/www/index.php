<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nombre = "Jaime";
    $nombreCompleto = "Jaime GAvilan Torrero";
    $numero = "123" ;
    $numero2 = "456";
    $suerte = "true";
    $sinValor = "";
    echo "<br>";
    echo $suerte;
    echo $sinValor;

    echo "Tu IP es: " . $_SERVER['REMOTE_ADDR'] . "<br>";
    echo "Servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Software del servidor :" . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "Ruta del script :" . $_SERVER['SERVER_FILENAME'] . "<br>";
    echo "User Agent: " . $_SERVER['HTTP_USER__AGENT'] . "<br>";
    echo phpversion();
?>

    
</body>
</html>