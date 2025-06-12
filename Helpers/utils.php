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
