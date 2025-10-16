<?php

/**
 * enviar-email.php (drop-in)
 * 
 * Coloque este arquivo na RAIZ do projeto (ex.: C:\xampp\htdocs\techstore\enviar-email.php)
 * OU em public/api/enviar-email.php e ajuste o $basePath abaixo.
 */

header('Content-Type: App/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// ===== bootstrap do projeto (Composer + Dotenv/Eloquent) =====
$basePath = __DIR__; // se mover para public/api, use: dirname(__DIR__, 1) ou 2 conforme sua estrutura
require $basePath . '/vendor/autoload.php';

use App\Core\Bootstrap;
use GUMP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (class_exists(\App\Core\Bootstrap::class)) {
    // Inicializa sessão, .env e (se quiser) Eloquent
    Bootstrap::init($basePath);
} else {
    // fallback: só Dotenv (caso não esteja usando o Bootstrap)
    if (file_exists($basePath . '/.env')) {
        (Dotenv\Dotenv::createImmutable($basePath))->load();
    }
}

// ===== helpers rápidos =====
function respond($ok, $message, $extra = [], $code = 200)
{
    http_response_code($ok ? $code : ($code === 200 ? 400 : $code));
    echo json_encode(array_merge(['success' => $ok, 'message' => $message], $extra), JSON_UNESCAPED_UNICODE);
    exit;
}
function in($key, $arr, $default = '')
{
    return isset($arr[$key]) ? trim((string)$arr[$key]) : $default;
}

// ===== lê payload (form-data ou JSON) =====
$payload = $_POST;
if (empty($payload)) {
    $json = file_get_contents('php://input');
    if ($json) {
        $decoded = json_decode($json, true);
        if (is_array($decoded)) $payload = $decoded;
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Método inválido', [], 405);
}

// normaliza campos esperados
$data = [
    'nome_completo' => in('nome_completo', $payload),
    'telefone'      => in('telefone', $payload),
    'email'         => in('email', $payload),
    'cidade'        => in('cidade', $payload),
    'como_encontrou' => in('como_encontrou', $payload),
    'mensagem'      => in('mensagem', $payload),
];

// ===== validação (GUMP) =====
$g = new GUMP('pt-br');
$g->filter_rules([
    'nome_completo' => 'trim|sanitize_string',
    'telefone'      => 'trim',
    'email'         => 'trim|sanitize_email',
    'cidade'        => 'trim|sanitize_string',
    'como_encontrou' => 'trim|sanitize_string',
    'mensagem'      => 'trim'
]);
$g->validation_rules([
    'nome_completo' => 'required|min_len,3|max_len,150',
    'email'         => 'required|valid_email',
    'telefone'      => 'required|min_len,10|max_len,40',
    'cidade'        => 'required|min_len,3|max_len,100',
    'como_encontrou' => 'required',
    'mensagem'      => 'required|min_len,10|max_len,5000'
]);

$data = $g->run($data);
if ($data === false) {
    // junta erros amigáveis
    $errors = $g->get_errors_array();
    respond(false, 'Erros de validação', ['errors' => $errors], 422);
}

// mapeia origem
$origens = [
    'google'    => 'Google / Pesquisa Online',
    'instagram' => 'Instagram',
    'facebook'  => 'Facebook',
    'whatsapp'  => 'WhatsApp',
    'indicacao' => 'Indicação',
    'anuncio'   => 'Anúncio/Propaganda',
    'passando'  => 'Passando na Loja',
    'outros'    => 'Outros'
];
$origemTexto = $origens[$data['como_encontrou']] ?? 'Não informado';

// ===== monta e envia com PHPMailer =====
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $_ENV['MAIL_HOST'] ?? '';
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['MAIL_USERNAME'] ?? '';
    $mail->Password   = $_ENV['MAIL_PASSWORD'] ?? '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int)($_ENV['MAIL_PORT'] ?? 587);
    $mail->CharSet    = 'UTF-8';

    $fromEmail = $_ENV['MAIL_FROM'] ?? ($_ENV['MAIL_USERNAME'] ?? 'no-reply@localhost');
    $fromName  = $_ENV['MAIL_FROM_NAME'] ?? 'TechStore';
    $toEmail   = $_ENV['MAIL_TO'] ?? $fromEmail;          // para onde vai chegar
    $toName    = $_ENV['MAIL_TO_NAME'] ?? 'Contato Loja';

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail, $toName);
    $mail->addReplyTo($data['email'], $data['nome_completo']);

    $mail->isHTML(true);
    $mail->Subject = "Novo Contato - {$data['nome_completo']} ({$data['cidade']})";

    // corpo HTML
    $body = '
    <!DOCTYPE html><html><head><meta charset="UTF-8">
    <style>
      body{font-family:Arial,sans-serif;background:#f4f4f4;margin:0}
      .container{max-width:600px;margin:20px auto;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 0 20px rgba(0,0,0,0.08)}
      .header{background:#00abff;color:#fff;padding:24px 30px}
      .content{padding:28px 30px}
      .item{background:#f8f9fa;padding:12px 16px;margin:0 0 10px;border-radius:8px;border-left:4px solid #00abff}
      .item strong{display:block;font-size:12px;color:#495057;letter-spacing:.5px;text-transform:uppercase;margin-bottom:4px}
      .message{padding:16px;border:2px solid #e9ecef;border-radius:8px;margin-top:12px}
      .footer{background:#f8f9fa;padding:16px;text-align:center;color:#6c757d;font-size:13px}
      a{color:#00abff;text-decoration:none}
    </style></head><body>
    <div class="container">
      <div class="header"><h2 style="margin:0">📱 Novo Contato Recebido</h2><p style="margin:6px 0 0;opacity:.9">Formulário do Site</p></div>
      <div class="content">
        <div class="item"><strong>Nome Completo</strong><div>' . htmlspecialchars($data['nome_completo']) . '</div></div>
        <div class="item"><strong>E-mail</strong><div><a href="mailto:' . htmlspecialchars($data['email']) . '">' . htmlspecialchars($data['email']) . '</a></div></div>
        <div class="item"><strong>Telefone</strong><div><a href="tel:' . htmlspecialchars($data['telefone']) . '">' . htmlspecialchars($data['telefone']) . '</a></div></div>
        <div class="item"><strong>Cidade</strong><div>' . htmlspecialchars($data['cidade']) . '</div></div>
        <div class="item"><strong>Como nos encontrou</strong><div>' . htmlspecialchars($origemTexto) . '</div></div>
        <div class="message"><strong>Mensagem</strong><div style="margin-top:6px">' . nl2br(htmlspecialchars($data['mensagem'])) . '</div></div>
      </div>
      <div class="footer">
        <div><strong>Data/Hora:</strong> ' . date('d/m/Y \à\s H:i:s') . '</div>
        <div><strong>IP:</strong> ' . ($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0') . '</div>
        <div style="margin-top:10px;color:#adb5bd">E-mail automático do formulário de contato.</div>
      </div>
    </div></body></html>';

    $mail->Body    = $body;
    $mail->AltBody =
        "NOVO CONTATO DO SITE\n\n" .
        "Nome: {$data['nome_completo']}\n" .
        "E-mail: {$data['email']}\n" .
        "Telefone: {$data['telefone']}\n" .
        "Cidade: {$data['cidade']}\n" .
        "Como nos encontrou: {$origemTexto}\n\n" .
        "Mensagem:\n{$data['mensagem']}\n\n" .
        "Data/Hora: " . date('d/m/Y H:i:s');

    $mail->send();
    respond(true, 'Mensagem enviada com sucesso! Obrigado pelo contato.');
} catch (Exception $e) {
    error_log('Erro PHPMailer: ' . $mail->ErrorInfo);
    respond(false, 'Erro ao enviar mensagem. Tente novamente mais tarde.', [
        // 'debug' => $mail->ErrorInfo   // descomente somente em DEV
    ], 500);
}
