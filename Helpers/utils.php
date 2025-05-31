<?php

function getImagesForModel($pasta): array
{

    // Caminho físico correto no servidor (filesystem)
    $caminhoAbsoluto = realpath(__DIR__ . '/../assets/img/iphone/' . $pasta);

    // Caminho para o navegador
    $caminhoRelativo = 'assets/img/iphone/' . $pasta;

    $imagens = [];

    if ($pasta && $caminhoAbsoluto && is_dir($caminhoAbsoluto)) {
        foreach (glob($caminhoAbsoluto . "/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $img) {
            $nomeArquivo = basename($img);
            $imagens[] = $caminhoRelativo . '/' . $nomeArquivo;
        }
    }

    return $imagens;
}
