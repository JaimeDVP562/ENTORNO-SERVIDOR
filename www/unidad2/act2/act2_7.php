<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Simulamos que el valor puede venir de un formulario o fuente externa
    $usuario = $_GET['usuario'] ?? null; // Usamos ?? para evitar error si no está definido

    // Usamos el operador ternario para decidir qué mensaje mostrar
    echo $usuario !== null
        ? "Bienvenido $usuario"
        : "Debes introducir un usuario";
    ?>

</body>

</html>