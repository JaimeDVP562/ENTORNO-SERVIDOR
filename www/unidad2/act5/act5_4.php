<?php
/*
---
title: Unidad 2:  Actividad_5_4
desc:  Array --> Creamos array FILTRA qué campos FALTAN POR RELLENAR y PIDE QUE LOS RELLENES.
TABLA con array asociativo. 
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
<style>
    table {
        border-collapse: collapse;
        /* quita los espacios entre bordes */
    }

    th,
    td {
        border: 1px solid black;
        /* borde simple negro */
    }

    li {
        color: red;
    }
</style>

<body>
    <?php
    // Cremaos un array para guardar las variables 
    $camposObligatorios = ["nombre", "email", "edad", "telefono"];

    $camposIntroducidos = ["nombre" => "Ana", "edad" => 25];

    // Solo para sacar las claves para luego comparar las que faltan 
    $camposEnviados = array_keys($camposIntroducidos);

    // Seleccionamos los campos que no se repiten 
    $camposFaltantes  = array_diff($camposObligatorios, $camposEnviados);

    // 
    $mostrarCamposIntroducidos = array_filter($camposIntroducidos, function ($campoIntroducido) {
        return $campoIntroducido;
    });

    ?>
    <h2>Campos obligatorios</h2>
    <table>
        <tr>
            <th>Campo</th>
        </tr>
        <?php foreach ($camposObligatorios as $campoObligatorio): ?>
            <tr>
                <td><?= $campoObligatorio ?></td>

            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Campos enviados por el usuario</h2>
    <table>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <!---->
        <?php foreach ($camposIntroducidos as $campo => $valor): ?><!--Así es como mostramos los arrays asociativos IMPORTANTE-->
            <tr>
                <td><?= $campo ?></td>
                <td><?= $valor ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <?php
    echo "<h2>Campos faltantes</h2><ul>";
    foreach ($camposFaltantes as $campoFaltante) { //<!--Así es como mostramos los arrays "normales" IMPORTANTE-->
        echo "<li>$campoFaltante</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>