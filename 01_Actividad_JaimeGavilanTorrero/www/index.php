<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $accion = random_int(1,10) < 5 ? 'cantar' : 'bailar';
    echo 'Ahora tienes que ' .$accion;
?>
 
</body>
</html>