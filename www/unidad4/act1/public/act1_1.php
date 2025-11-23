<?php

/**
 * 
 *1) require config.php
 *2) require modelo/curso_modelo.php
 *3) require modelo/estudiante_modelo.php
 *4) require controlador/instituto_controlador.php
 *5) crear PDO ($pdo);
 *6) instanciar modelos: 
 *    6.1) $modelocurso=new CursoModelo($pdo); 
 *    6.2) $modeloestudiante=new EstudianteModelo($pdo);
 *7) instanciar controlador:
 *    7.1) $controlador = new InstitutoControlador($modelocurso, $modeloestudiante)
 *8) $data = $controlador->ejecutar()
 *9) require vista/vista_instituto.php   ← la vista recibe $data y SOLO pinta
 */
require_once "../config.php";
require_once "../modelo/curso_modelo.php";
require_once "../modelo/estudiante_modelo.php";
require_once "../controlador/instituto_controlador.php";

// Conexión con la base de datos
$pdo = new PDO("mysql:host=db;dbname=instituto;charset=utf8mb4", "root", "root");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$modelocurso = new CursoModelo($pdo);
$modeloestudiante = new EstudianteModelo($pdo);
$controlador = new InstitutoControlador($modelocurso, $modeloestudiante);
$datos = $controlador->ejecutar();
require_once "../vista/vista_instituto.php";

?>  