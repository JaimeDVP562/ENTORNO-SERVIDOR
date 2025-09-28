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
    $precio1 = 25;
    $precio2 = 30;
    // Creamos el operador espacial 
    $resultado = $precio1 <=> $precio2; 

    // Para mostrar el mensaje tendremos que utilizar un if-else 
    if ($resultado == -1) {
        echo "El producto 1 es más barato";
    } else if($resultado == 0){
        echo "Ambos productos cuestan lo mismo";
    }else if($resultado == 1){
        echo "El producto 1 es más caro";
    }
    
    ?>

</body>

</html>