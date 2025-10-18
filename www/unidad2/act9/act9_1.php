<?php
/*
---
title: Unidad 2:  Actividad_8_1
desc:  CAPTURANDO ERRORES
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

    // Configuración de errores
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ini_set("log_errors", 1);
    ini_set("error_log", __DIR__ . "/app.log");
    // Ruta donde guardamos el archivo
    $path = __DIR__ . "/comentarios.txt";

    // Creamos el array de comentarios
    $comentarios = [
        "Me ha encantado la web",
        "Faltan más imágenes",
        "Buena organización del contenido",
        "Muy útil la información publicada",
        "El diseño es muy claro y sencillo",
        "Sería bueno añadir un buscador",
        "Los colores son agradables",
        "Faltan ejemplos prácticos",
        "La velocidad de carga es buena",
        "La sección de contacto funciona muy bien"
    ];

    // Elegimos un comentario al azar de los que tenemos guardados en el array
    $comentarioRamdon = $comentarios[array_rand($comentarios)];
    $totalComentarios = count($comentarios);
    $fecha = date("Y-m-d H:i:s");
    // Abrimos el archivo 
    $fh = fopen($path, "a");
    // Comprobamos que el fichero exista 
    $fh = fopen($path, "a");
    if ($fh === false) {
        $mensaje = "Error al abrir el archivo para escritura.";
        echo "<p>$mensaje</p>";
        error_log($mensaje);
    } else {
        if (fwrite($fh, "$fecha  $comentarioRamdon\n") === false) {
            $mensaje = "Error al escribir en el archivo.";
            echo "<p>$mensaje</p>";
            error_log($mensaje);
        } else {
            echo "<p>Comentario añadido correctamente.</p>";
        }
        fclose($fh);
    }
    // Importante cerrar el archivo siempre    
    fclose($fh);
    echo "Total de comentarios guardados: $totalComentarios <br>";

    
    // Volvemos a abrir el fichero para poder leerlo
    $fh = fopen($path, 'r');

    if ($fh === false) {
        exit("No se pudo abrir el archivo");
    }
    // Leemos el fichero
    while (($linea = fgets($fh)) !== false) {
        echo "<ul><li>($linea)<br></li></ul>";
    }
    // Importante cerrar el archivo siempre    
    fclose($fh);

    ?>
</body>

</html>