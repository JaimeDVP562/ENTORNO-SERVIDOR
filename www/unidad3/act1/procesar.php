<?php
// Procesamiento del nombre
// No se indica htmlspecialchars para permitir y explicar
// el hackeado.
if (!empty($_POST['nombre']))
    echo "El nombre es " . htmlspecialchars($_POST['nombre']);
else
    echo 'No se ha especificado el nombre';
echo "<br>";

// Procesamiento de los apellidos
if (!empty($_POST['apellidos']))
    echo "Los apellidos son " . htmlspecialchars($_POST['apellidos']);
else
    echo 'No se han especificado los apellidos';
echo "<br>";
  
// Procesamiento de la URL
if (!empty($_POST['URL']))
    echo "La URL es " . htmlspecialchars($_POST['apellidos']);
else
    echo 'No se ha especificado la URL';
echo "<br>";

// Procesamiento del genero.
define('OPCIONES', ['m', 'f', 'o']);
if (!empty($_POST['genero'])) {
    if (in_array($_POST['genero'], OPCIONES))
        echo "Tu género es " . $_POST['genero'];
    else
        echo 'El género no tiene un valor válido';
} else
    echo 'El género no se ha recibido';
echo "<br>";
?>