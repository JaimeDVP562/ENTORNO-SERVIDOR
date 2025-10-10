<?php
/*
---
title: Unidad 2:  Actividad_5_4
desc:  Array --> Creamos array FILTRA qué campos FALTAN POR RELLENAR y PIDE QUE LOS RELLENES
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
    // Cremaos un array para guardar las variables 
    $camposObligatorios = ["nombre", "email", "edad", "telefono"];

    $camposIntroducidos = ["nombre" => "Ana", "edad" => 25];

    // Solo para sacar las claves para luego comparar las que faltan 
    $camposEnviados = array_keys($camposIntroducidos);

    // Seleccionamos los campos que no se repiten 
    $camposFaltantes  = array_diff($camposObligatorios, $camposEnviados);

    
    echo "<h3>Campos obligatorios.</h3><tr>";
    foreach ($camposObligatorios as $campoObligatorio) {
        echo "<td>$campoObligatorio</br></td>";
    }
    echo "</tr>";

    echo "Campos enviados por el usuario <tr></tr>";
    foreach ($camposEnviados as $campoEnviados) {
        echo "$campoEnviado";
        
    }
    echo "</tr>";

    echo "<ul><h3>Campos faltantes </h3></ul>";
    foreach ($camposFaltantes as $respuesta) {
        echo "<li>$respuesta</li>";
    }

    ?>

 <h2>Emplados</h2>
    <table >
        <tr>
            <th>Nombre</th> 
            <th>Departamento</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['departamento'] ?></td>
                <td><?= $usuario['estado'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

            <h2>Emplados activos</h2>
    <table >
        <tr>
            <th>Nombre</th> 
            <th>Departamento</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($usuariosActivos as $usuario): ?>
            <tr>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['departamento'] ?></td>
                <td><?= $usuario['estado'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>