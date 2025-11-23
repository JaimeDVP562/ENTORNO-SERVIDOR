
<?php
require_once '../config.php';
require_once '../modelo/OptionModel.php';
require_once '../controlador/VoteController.php';

$pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
$modelo = new VotacionModelo($pdo);
$controlador = new VoteController($modelo);
$data = $controlador->procesar();

require_once '../vista/voteView.php';