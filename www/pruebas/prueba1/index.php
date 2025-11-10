<?php

require_once "Tienda.php";

// Conexión con la base de datos
$conn = new PDO("mysql:host=db;dbname=dwes;charset=utf8mb4", "root", "root");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM tienda";
$sentencia = $conn->prepare($sql);

// Cargar datos como objetos de la clase Tienda
$sentencia->setFetchMode(PDO::FETCH_CLASS, "Tienda");
$sentencia->execute();

// Mostrar todos los registros
while($t = $sentencia->fetch()) {
    echo $t . "<br>";
}
?>