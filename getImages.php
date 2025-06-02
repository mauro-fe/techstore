<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/Helpers/utils.php';


if (!isset($_GET['pasta'])) {
    http_response_code(400);
    echo json_encode(['erro' => 'Parâmetro "pasta" ausente.']);
    exit;
}

$pasta = $_GET['pasta'];
$imagens = getImagesForModel($pasta);
header('Content-Type: application/json');
echo json_encode($imagens);
