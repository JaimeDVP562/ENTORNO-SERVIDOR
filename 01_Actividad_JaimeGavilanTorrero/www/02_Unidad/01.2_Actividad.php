<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Generamos dos números aleatorios y se los introducimos a dos variables con las 
    cuales luego obtendremos la media-->
    <?php    
        $ramdonNumber = random_int(1,100);
        $ramdonNumber2 = random_int(1,100);
        $resultado = ($ramdonNumber + $ramdonNumber2) / 2;

        echo $ramdonNumber . "<br>";
        echo $ramdonNumber2 ."<br>";
        echo $resultado . "<br>";
    ?>
</body>
</html>