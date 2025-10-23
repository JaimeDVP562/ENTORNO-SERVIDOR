<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $value = "valor_De_la_cookie";

    setcookie("micookie", $value);
    setcookie("micookie", $value, time()+3600);
    echo "Cookie creada";
    ?>

</body>

</html>