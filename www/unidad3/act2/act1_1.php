<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

</head>

<body>
    <?php
    $value = "valor_De_la_cookie";

    setcookie("micookie", $value);
    setcookie("micookie", $value, time() + 3600);
    //echo "Cookie creada";
    ?>

    <?php
    $mensaje = '';
    $color = $_POST['color'] ?? '';

    $mostrar_formulario = true;

    if (!empty($_POST)) { // solo entramos si hubo envío
        if (!empty($_POST['value'])) {
            $color = $_POST['color'];

            $mostrar_formulario = false;
        }
    }
    ?>

    <!-- ✅ añadir enctype -->
     <div style="background-color: <?php $color?>;">
            <form method="post" action="" enctype="multipart/form-data">
        <h1>Selecciona un color de fondo</h1>
        <?php if ($mostrar_formulario): ?>
            <form method="post" action="">
                <label>
                    <select name="color">
                        <option value="Blanco">Blanco</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Rosa">Rosa</option>
                    </select>
                </label>
                <button type="submit">Enviar</button>
            </form>

     </div>
        <?php
        endif;
        ?>
        <?php echo $mensaje; ?>
    </form>



</body>

</html>