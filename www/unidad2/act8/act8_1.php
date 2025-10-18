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
    // Para cerar la excepcion personlaizada tenemos que extender la clase Excepcion
    class TemperaturaAltaExcepcion extends Exception {};

    // Creamos las variables 
    $temperatura = rand(-10, 100);
    $cpuCargada = rand(0, 150);
    $tokenValor = ['', 'OK'];
    $token = $tokenValor[array_rand($tokenValor)];

    // Imprimimos los valores por defecto
    echo "🌡️ Temperatura: $temperatura ºC</br>";
    echo "🖥️ Carga CPU: $cpuCargada %</br>";
    echo "🔐 Token: $token</br>";
    // Usando la funcion die()
    if ($token === '') {
        die("❌ Es un error crítico: no hay clave para arrancar el sistema. ");
    }
    // Usando la funcion  
    if ($temperatura < 0 || $temperatura > 80) {
        trigger_error("El sistema puede arrancar, pero bajo riesgo", E_USER_WARNING);
    }

    // Usando el bloque try-catch
    try {
        if ($cpuCargada > 100) {
            throw new TemperaturaAltaExcepcion("Carga de CPU demasiado alta. No se puede arrancar el servidor.");
        }
        echo "Temperatura correcta";
        
    } catch (TemperaturaAltaExcepcion $e) {
        echo "🚨 Error: " . $e->getMessage() . "</br>";
    } finally {
        echo "</br>Proceso terminado correctamente</br>";
    }

    // Sitodos los valores están correctos 
    if ((($temperatura < 80) || ($temperatura > 0)) || ($cpuCargada < 100) || ($token === 'OK')) {
        echo "✅ El servidor se ha iniciado correctamente.";
    }

    ?>
</body>

</html>