<?php
// Ativa exibição de erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Caminhos corretos relativos à raiz
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/Helpers/utils.php';



// Obtém a marca passada por GET
$marca = strtolower($_GET['marca'] ?? '');

// Mapeamento das marcas e arquivos correspondentes
$mapas = [
    'iphone'  => ['Iphone.php', 'iphones'],
    'samsung' => ['Samsung.php', 'samsungs'],
    'xiaomi'  => ['Xiaomi.php', 'xiaomis'],
    'realme'  => ['Realme.php', 'realmes'],
];

// Verifica se a marca é válida
if (!isset($mapas[$marca])) {
    echo "<h2 class='text-danger text-center mt-5'>Marca não encontrada.</h2>";
    exit;
}

// Inclui o arquivo correto e carrega a variável de produtos
[$arquivo, $variavel] = $mapas[$marca];
require_once __DIR__ . "/Dados/{$arquivo}";
$produtos = $$variavel ?? [];
