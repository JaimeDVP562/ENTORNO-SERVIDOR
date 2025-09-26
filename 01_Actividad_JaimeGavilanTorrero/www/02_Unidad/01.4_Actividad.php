<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $ramdonNumber = rand(0, 100);
    echo "<h1>Nivel: {$ramdonNumber}%</h1>";
    ?>

    <meter value="<?= $ramdonNumber ?>" min="0" max="100"></meter>
</body>

</html>