<?php
// Iniciamos sesion
session_start();

// Creamos el array
$mascotas =
    [
        ['id' => '1', 'especie' => 'Perro', 'raza' => 'Labrador', 'edad' => 5, 'sexo' => 'Macho'],
        ['id' => '2', 'especie' => 'Gato', 'raza' => 'Siames', 'edad' => 2, 'sexo' => 'Hembra'],
        ['id' => '3', 'especie' => 'Ave', 'raza' => 'Canario', 'edad' => 3, 'sexo' => 'Hembra'],
        ['id' => '4', 'especie' => 'Roedor', 'raza' => 'Hamster', 'edad' => 3, 'sexo' => 'Hembra'],
        ['id' => '5', 'especie' => 'Reptil', 'raza' => 'Serpiente', 'edad' => 7, 'sexo' => 'Macho'],
        ['id' => '6', 'especie' => 'Gato', 'raza' => 'Persa', 'edad' => 10, 'sexo' => 'Macho'],
        ['id' => '7', 'especie' => 'Perro', 'raza' => 'Bulldog', 'edad' => 6, 'sexo' => 'Macho'],
        ['id' => '8', 'especie' => 'Ave', 'raza' => 'Perico', 'edad' => 6, 'sexo' => 'Macho'],
        ['id' => '9', 'especie' => 'Roedor', 'raza' => 'Cobaya', 'edad' => 3, 'sexo' => 'Hembra'],
        ['id' => '10', 'especie' => 'Reptil', 'raza' => 'Iguana', 'edad' => 8, 'sexo' => 'Macho'],
        ['id' => '11', 'especie' => 'Perro', 'raza' => 'Golden', 'edad' => 6, 'sexo' => 'Macho'],
        ['id' => '12', 'especie' => 'Gato', 'raza' => 'Angora', 'edad' => 4, 'sexo' => 'Hembra'],
        ['id' => '13', 'especie' => 'Perro', 'raza' => 'Chihu', 'edad' => 1, 'sexo' => 'Hembra'],
        ['id' => '14', 'especie' => 'Ave', 'raza' => 'Loro', 'edad' => 12, 'sexo' => 'Macho'],
        ['id' => '15', 'especie' => 'Reptil', 'raza' => 'Caleón', 'edad' => 4, 'sexo' => 'Hembra'],
        ['id' => '16', 'especie' => 'Perro', 'raza' => 'Beagle', 'edad' => 2, 'sexo' => 'Macho'],
        ['id' => '17', 'especie' => 'Perro', 'raza' => 'Dálmata', 'edad' => 9, 'sexo' => 'Hembra'],
        ['id' => '18', 'especie' => 'Gato', 'raza' => 'Bengala', 'edad' => 5, 'sexo' => 'Hembra'],
        ['id' => '19', 'especie' => 'Ave', 'raza' => 'Cacatúa', 'edad' => 8, 'sexo' => 'Hembra'],
        ['id' => '20', 'especie' => 'Roedor', 'raza' => 'Dumbo', 'edad' => 2, 'sexo' => 'Macho'],
    ];

    if (!empty($_POST['edad'])) {
        $edad = $_POST['edad'];
    }
// Mostramos el array
echo "<table>";
echo  "<th><td>id</td><td>especie</td><td>raza</td><td>edad</td><td>sexo</td></th>";
echo "<tbody>";
foreach ($mascotas as $key => $value) {
    echo "<tr><td>" . $value['id'] . "</td><td>" . $value['especie'] . "</td><td>" . $value['raza'] . "</td><td>" . $value['edad']  . "</td><td>" . $value['sexo'] . "</td></tr>";
}
echo "</tbody>";
echo "</table>";

?>
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
        <form action="" method="post">
            <h2>Filtrar mascotas por edad</h2>
            <h3>Selecciona una edad</h3>
            <select name="" id="edad">
                <option value="mostrarTodos">Mostrar todos</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            <button type="submit">Mostrar mascotas</button>
        </form>
    </main>
</body>

</html>