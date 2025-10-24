
<?php
    $color = $_COOKIE["micookie"] ?? 'white';
    setcookie("micookie", $value, time() + 10);
    //echo "Cookie creada";
    //print_r($value);
    ?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

</head>

<body>

<body>
    <main class="container">

    <!-- ✅ añadir enctype -->
     <div style="background-color: <?= $_COOKIE["micookie"];?>;">
        <h1>Selecciona un color de fondo</h1>
            <form method="post" action="">
                <label>
                    <select name="color">
                        <option value="white">Blanco</option>
                        <option value="red">Rojo</option>
                        <option value="green">Verde</option>
                        <option value="blue">Azul</option>
                        <option value="yellow">Amarillo</option>
                        <option value="orange">Naranja</option>
                        <option value="pink">Rosa</option>
                    </select>
                </label>
                <button type="submit">Enviar</button>
            </form>
            
     </div>

    </form>



    </main>

</body>

</html>