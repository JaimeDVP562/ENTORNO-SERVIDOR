<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
/*
---
title: Unidad 2:  Actividad_3_7
desc:  Pareja de dados o no
tags: [PHP, basico]
---
*/
?>


<body>


    <div>
        <p>Ejemplos: </p>

        <?php
        // Declaramos las variables 
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);

        // Utilizamos if-else para mostrar comprobar los resultados
        if ($dado1 == $dado2) {
            echo ("<p>Ha sacado una pareja de $dado1.</p>");
        } else {
            echo ("<p>No has sacado pareja. </p> ");
        }

        ?>
        <img src="img/<?php echo ($dado1); ?>.svg" alt="">
        <img src="img/<?php echo ($dado2); ?>.svg" alt="">

    </div>



</body>

</html>