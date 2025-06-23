<?php
// Nome do arquivo original e do arquivo de destino
$arquivo_original = 'assets/css/404.css';
$arquivo_minificado = 'assets/dist/404.min.css';

// Função para criar diretório se não existir
function criarDiretorio($caminho)
{
    $dir = dirname($caminho);
    if (!is_dir($dir)) {
        if (!mkdir($dir, 0755, true)) {
            throw new Exception("Não foi possível criar o diretório: $dir");
        }
    }
}

// Verifica se o arquivo original existe
if (!file_exists($arquivo_original)) {
    die("Erro: O arquivo '$arquivo_original' não foi encontrado.");
}

try {
    // Lê todo o conteúdo do arquivo CSS
    $css_original = file_get_contents($arquivo_original);

    if ($css_original === false) {
        throw new Exception("Erro ao ler o arquivo '$arquivo_original'");
    }

    echo "Arquivo original lido com sucesso (" . strlen($css_original) . " bytes)\n";

    // Cria o diretório de destino se não existir
    criarDiretorio($arquivo_minificado);

    // Configuração da requisição cURL
    $url = 'https://www.toptal.com/developers/cssminifier/api/raw';
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded",
            "User-Agent: Mozilla/5.0 (compatible; CSS-Minifier/1.0)"
        ],
        CURLOPT_POSTFIELDS => http_build_query(["input" => $css_original]),
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYHOST => false

    ]);

    echo "Enviando requisição para a API...\n";

    $resultado_minificado = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $erro_curl = curl_error($ch);

    curl_close($ch);

    // Verifica se houve erro no cURL
    if ($resultado_minificado === false) {
        throw new Exception("Erro cURL: " . $erro_curl);
    }

    // Verifica o código de resposta HTTP
    if ($http_code !== 200) {
        throw new Exception("Erro HTTP $http_code. Resposta: " . substr($resultado_minificado, 0, 200));
    }

    // Verifica se o resultado não está vazio
    if (empty($resultado_minificado)) {
        throw new Exception("A API retornou um resultado vazio");
    }

    echo "CSS minificado recebido (" . strlen($resultado_minificado) . " bytes)\n";

    // Verifica se houve redução no tamanho
    $tamanho_original = strlen($css_original);
    $tamanho_minificado = strlen($resultado_minificado);
    $economia = $tamanho_original - $tamanho_minificado;
    $percentual = round(($economia / $tamanho_original) * 100, 2);

    echo "Redução: $economia bytes ($percentual%)\n";

    // Salva o resultado minificado
    if (file_put_contents($arquivo_minificado, $resultado_minificado) === false) {
        throw new Exception("Erro ao salvar o arquivo minificado");
    }

    echo "✅ Sucesso! Arquivo '$arquivo_original' foi minificado para '$arquivo_minificado'\n";
    echo "📊 Tamanho original: " . number_format($tamanho_original) . " bytes\n";
    echo "📊 Tamanho minificado: " . number_format($tamanho_minificado) . " bytes\n";
    echo "💾 Economia: " . number_format($economia) . " bytes ($percentual%)\n";
} catch (Exception $e) {
    echo "❌ Erro: " . $e->getMessage() . "\n";

    // Debug adicional
    echo "\n--- DEBUG ---\n";
    echo "Arquivo original existe: " . (file_exists($arquivo_original) ? 'Sim' : 'Não') . "\n";
    echo "Diretório de destino: " . dirname($arquivo_minificado) . "\n";
    echo "Diretório de destino é gravável: " . (is_writable(dirname($arquivo_minificado)) ? 'Sim' : 'Não') . "\n";

    if (isset($css_original)) {
        echo "Tamanho do CSS original: " . strlen($css_original) . " bytes\n";
        echo "Primeiros 100 caracteres: " . substr($css_original, 0, 100) . "...\n";
    }

    if (isset($resultado_minificado)) {
        echo "Resposta da API (primeiros 200 chars): " . substr($resultado_minificado, 0, 200) . "\n";
    }
}
