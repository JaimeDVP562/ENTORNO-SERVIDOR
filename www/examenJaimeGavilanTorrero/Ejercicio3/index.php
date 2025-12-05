<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <?php
        ?>
        <form action="guardar_color.php" method="post">
            <h2>Color favorito</h2>
            <label for="">Elige tu color favorito</label></br>
            <select name="color" id="color">
                <option value="rojo">rojo</option>
                <option value="verde">verde</option>
                <option value="azul">azul</option>
            </select></br>
            <button type="submit">Elige tu color favorito</button>
        </form>
    </main>
</body>

</html>