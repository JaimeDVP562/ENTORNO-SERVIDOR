<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Generar número aleatorio entre 0 y 100
    $ramdonNumber = rand(0, 100);
    echo "<h1>Nivel: {$ramdonNumber}%</h1>";
    ?>

    <!-- Representación visual con <meter> -->
    <meter value="<?= $ramdonNumber ?>" min="0" max="100"></meter>
</body>

</html>