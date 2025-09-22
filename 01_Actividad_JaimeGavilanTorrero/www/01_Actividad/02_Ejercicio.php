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
    $sinValor = " ";
    echo "<br>";
    echo $suerte;
    echo $sinValor;

    echo "Tu IP es: " . $_SERVER['REMOTE_ADDR'] . "<br>";
    echo "Servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Software del servidor : " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "Ruta del script :" . $_SERVER['SCRIPT_FILENAME'] . "<br>";
    echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
    
    echo phpversion();

    $dato = 9;
    $ref1 = &$dato;
    $ref1++;
    echo $dato;

    $modulo = "DEWS";
    echo "<p>Las siglas de este modulo son $modulo</p>"; // Se escribe DEWS
    echo '<p>Las siglas de este modulo son $modulo</p>'; // Se escribe %modulo

    // Barra invertida
    echo 'Esto es una barra invertida: \\';
    echo "<br>";

    // Comilla simple
    echo 'Esto es una comilla simple \'';
    echo "<br>";
    // Comilla  
    echo "Esto es una comilla doble \"";
    echo "<br>";


    


?>




    
</body>
</html>