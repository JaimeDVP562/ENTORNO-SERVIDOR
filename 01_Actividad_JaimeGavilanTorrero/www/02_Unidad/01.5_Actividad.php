<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Generar número aleatorio entre 0 y 5
    $ramdonNumber = rand(0, 5);

    // IMPORTANTE la ruta de la imagen tenenos que ponerla relativa no absoluta si no no sale 
    ?>
    <img src="img/<?php echo $ramdonNumber; ?>.svg" />
</body>

</html>