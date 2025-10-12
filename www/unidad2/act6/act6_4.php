<?php
/*
---
title: Unidad 2:  Actividad_6_4
desc:  Array --> USUARIO ENMASCARADO --> Separa una cadena de caracteres por el caracter que queramos y enmascaramos las letras que queremos 
tags: [PHP, basico]
---
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Declaramos las variables
    $email = "fhuerui697@g.educaand.es";

    // Separamos el nombre del dominio
    list($usuario, $dominio) = explode("@", $email);

    if (strlen($usuario) > 3) {
        $primeraLetra = substr($usuario, 0, 1);         
        $ultimaLetra = substr($usuario, -1);            
        $medioPalabra = str_repeat('*', strlen($usuario) - 2);
        $usuarioEnmascarado = $primeraLetra . $medioPalabra . $ultimaLetra;  
    } else {
        $usuarioEnmascarado = $usuario; 
    }

    // Mostramos por pantalla
    echo "Email: $email</br>";
    echo "Usuario: $usuario</br>";
    echo "Dominio: $dominio</br>";
    echo "Usuario enmascarado: $usuarioEnmascarado </br>";

    ?>
</body>

</html>