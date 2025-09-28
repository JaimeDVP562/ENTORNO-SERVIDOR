<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Declaramos las variables apartado A

    $host = "localhost"; // Cadena obligatoria
    $puerto = "3306"; //debería ser entero, pero llega como cadena
    $usuario = "root"; // Cadena obligatoria
    $clave = null; // Debería ser cadena pero está vacía
    $debug = "true"; // debería ser booleano

    // Mostrar valores con print_r() apartado B

    print_r([
        'host' => $host,
        'puerto' => $puerto,
        'usuario' => $usuario,
        'clave' => $clave,
        'debug' => $debug
    ]);

    // Verificar los tipos con var_dump
    var_dump($host);    // string
    var_dump($puerto);  // string (debería ser int)
    var_dump($usuario); // string
    var_dump($clave);   // NULL (debería ser string)
    var_dump($debug);   // string (debería ser bool)


    // Correcciones de tipo apartado D

    // Convertimos la variable %puerto a entero
    settype($puerto, "integer");
    // Convertimos la variable %debug a booleano
    settype($debug, "boolean");
    // Si la clave es null la convertimos a una cadena vacia
    $clave = $clave ?? "";
    // Si quisieramos cambiarlo con el operador Elvis lo hariamos de la siguiente forma
    // $clave = $clave ?: ""; 


    // Volvemos a confirmar los tiposd e las variables con var_dump
    var_dump($host);    // string
    var_dump($puerto);  // int
    var_dump($usuario); // string
    var_dump($clave);   // string (vacía si antes era null)
    var_dump($debug);   // booleano

    ?>

</body>

</html>