<?php
// ===== ARQUIVO: helpers/utils.php =====
// Adicione esta função ao seu arquivo utils.php existente

/**
 * Busca todas as imagens de uma pasta específica
 * @param string $folderPath Caminho relativo da pasta (ex: 'iphone/11')
 * @return array Array com as URLs das imagens
 */
function getImagesForModel($folderPath)
{
    $images = [];
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    // Ajuste o caminho base conforme sua estrutura
    $basePath = __DIR__ . '/../assets/img/';
    $fullPath = $basePath . $folderPath;

    if (is_dir($fullPath)) {
        $files = scandir($fullPath);

        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                if (in_array($extension, $allowedExtensions)) {
                    // Monta a URL completa da imagem
                    $images[] = BASE_URL . '/assets/img/' . $folderPath . '/' . $file;
                }
            }
        }

        // Ordena as imagens por nome
        sort($images);
    }

    return $images;
}

// ===== ARQUIVO: api/get-images.php =====
// Este arquivo é opcional, só use se preferir carregar via AJAX

header('Content-Type: application/json');

// Configurações - ajuste conforme seu projeto
define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', 'http://localhost/seu-projeto'); // Ajuste para sua URL real

// Função para buscar imagens de uma pasta
function getImagesFromFolder($folderPath)
{
    $images = [];
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    // Caminho completo da pasta
    $fullPath = BASE_PATH . '/assets/img/' . $folderPath;

    if (is_dir($fullPath)) {
        $files = scandir($fullPath);

        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                if (in_array($extension, $allowedExtensions)) {
                    $images[] = [
                        'filename' => $file,
                        'url' => BASE_URL . '/assets/img/' . $folderPath . '/' . $file
                    ];
                }
            }
        }

        sort($images);
    }

    return $images;
}

// Pega os parâmetros
$pasta = $_GET['pasta'] ?? '';
$id = $_GET['id'] ?? '';

if (empty($pasta)) {
    echo json_encode(['success' => false, 'message' => 'Pasta não especificada']);
    exit;
}

try {
    $images = getImagesFromFolder($pasta);

    echo json_encode([
        'success' => !empty($images),
        'images' => $images,
        'total' => count($images),
        'message' => empty($images) ? 'Nenhuma imagem encontrada' : ''
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Erro ao buscar imagens: ' . $e->getMessage()
    ]);
}
