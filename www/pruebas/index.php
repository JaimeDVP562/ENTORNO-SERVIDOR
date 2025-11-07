<?php

    $dsn = 'mysql:dbname=dwes;host=db';
    $usuario = 'root';
    $contraseña = 'root';

    try {
        $mbd = new PDO($dsn, $usuario, $contraseña);
        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Conexión exitosa a la base de datos.';

    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>