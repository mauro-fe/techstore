<?php
// enviar-email.php

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Removi a linha: use PHPMailer\PHPMailer\SMTP;

// Carrega o PHPMailer
require 'vendor/autoload.php';

// ===== CONFIGURAÇÕES =====
$config = [
    // SMTP
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_username' => 'mauro.cardoso.1998@gmail.com',     // SEU EMAIL
    'smtp_password' => 'mjdoqrffhjoakfta',                 // SENHA DE APP

    // Remetente e Destinatário  
    'from_email' => 'megatechempresa@gmail.com',
    'from_name' => 'Site - Loja de Celulares',
    'to_email' => 'megatechempresa@gmail.com',              // EMAIL DA LOJA
    'to_name' => 'Loja de Celulares'
];

// Função para limpar dados
function limparDados($dados)
{
    return htmlspecialchars(trim($dados), ENT_QUOTES, 'UTF-8');
}

// Verifica método POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo json_encode(['success' => false, 'message' => 'Método inválido']);
    exit;
}

// Recebe os dados
$nome = limparDados($_POST['nome_completo'] ?? '');
$telefone = limparDados($_POST['telefone'] ?? '');
$email = limparDados($_POST['email'] ?? '');
$cidade = limparDados($_POST['cidade'] ?? '');
$comoEncontrou = limparDados($_POST['como_encontrou'] ?? '');
$mensagem = limparDados($_POST['mensagem'] ?? '');

// Validações
$erros = [];

if (strlen($nome) < 3) {
    $erros[] = 'Nome inválido';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = 'E-mail inválido';
}

if (strlen($telefone) < 10) {
    $erros[] = 'Telefone inválido';
}

if (strlen($cidade) < 3) {
    $erros[] = 'Cidade inválida';
}

if (empty($comoEncontrou)) {
    $erros[] = 'Selecione como nos encontrou';
}

if (strlen($mensagem) < 10) {
    $erros[] = 'Mensagem muito curta';
}

if (!empty($erros)) {
    echo json_encode(['success' => false, 'message' => implode(', ', $erros)]);
    exit;
}

// Mapear como encontrou
$origens = [
    'google' => 'Google / Pesquisa Online',
    'instagram' => 'Instagram',
    'facebook' => 'Facebook',
    'whatsapp' => 'WhatsApp',
    'indicacao' => 'Indicação de Amigos/Família',
    'anuncio' => 'Anúncio/Propaganda',
    'passando' => 'Passando na Loja',
    'outros' => 'Outros'
];

$origemTexto = $origens[$comoEncontrou] ?? 'Não informado';

// Criar instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $config['smtp_port'];

    // Para debug (descomente se precisar)
    // $mail->SMTPDebug = 2; // Use número ao invés de SMTP::DEBUG_SERVER

    $mail->CharSet = 'UTF-8';

    // Destinatários
    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($email, $nome);

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = "Novo Contato - $nome ($cidade)";

    // Template do email
    $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 20px auto;
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }
            .header {
                background: linear-gradient(135deg, #00abff 0%, #00abff 100%);
                color: white !important;
                padding: 30px;
                text-align: center;
            }
            .header h1 {
                margin: 0;
                font-size: 28px;
            }
            .content {
                padding: 40px 30px;
            }
            .info-item {
                background: #f8f9fa;
                padding: 15px 20px;
                margin-bottom: 15px;
                border-radius: 8px;
                border-left: 4px solid #667eea;
            }
            .info-item strong {
                color: #495057;
                display: block;
                margin-bottom: 5px;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .info-item p {
                margin: 0;
                color: #212529;
                font-size: 16px;
            }
            .info-item a {
                color: #667eea;
                text-decoration: none;
            }
            .message-section {
                background: #fff;
                padding: 25px;
                margin-top: 20px;
                border: 2px solid #e9ecef;
                border-radius: 8px;
            }
            .message-section h3 {
                color: #495057;
                margin-top: 0;
                font-size: 18px;
                margin-bottom: 15px;
            }
            .footer {
                background: #f8f9fa;
                padding: 20px;
                text-align: center;
                color: #6c757d;
                font-size: 14px;
                border-top: 1px solid #dee2e6;
            }
            .icon {
                display: inline-block;
                width: 20px;
                margin-right: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>📱 Novo Contato Recebido</h1>
                <p style="margin: 10px 0 0 0; opacity: 0.9;">Formulário do Site</p>
            </div>
            
            <div class="content">
                <div class="info-item">
                    <strong>👤 Nome Completo</strong>
                    <p>' . $nome . '</p>
                </div>
                
                <div class="info-item">
                    <strong>📧 E-mail</strong>
                    <p><a href="mailto:' . $email . '">' . $email . '</a></p>
                </div>
                
                <div class="info-item">
                    <strong>📞 Telefone</strong>
                    <p><a href="tel:' . $telefone . '">' . $telefone . '</a></p>
                </div>
                
                <div class="info-item">
                    <strong>📍 Cidade</strong>
                    <p>' . $cidade . '</p>
                </div>
                
                <div class="info-item">
                    <strong>🔍 Como nos encontrou</strong>
                    <p>' . $origemTexto . '</p>
                </div>
                
                <div class="message-section">
                    <h3>💬 Mensagem</h3>
                    <p style="line-height: 1.8;">' . nl2br($mensagem) . '</p>
                </div>
            </div>
            
            <div class="footer">
                <p><strong>Data/Hora:</strong> ' . date('d/m/Y \à\s H:i:s') . '</p>
                <p><strong>IP:</strong> ' . $_SERVER['REMOTE_ADDR'] . '</p>
                <p style="margin-top: 20px; font-size: 12px; color: #adb5bd;">
                    Este e-mail foi enviado automaticamente através do formulário de contato do site.
                </p>
            </div>
        </div>
    </body>
    </html>';

    // Versão texto
    $mail->AltBody = "NOVO CONTATO DO SITE\n\n";
    $mail->AltBody .= "Nome: $nome\n";
    $mail->AltBody .= "E-mail: $email\n";
    $mail->AltBody .= "Telefone: $telefone\n";
    $mail->AltBody .= "Cidade: $cidade\n";
    $mail->AltBody .= "Como nos encontrou: $origemTexto\n\n";
    $mail->AltBody .= "Mensagem:\n$mensagem\n\n";
    $mail->AltBody .= "Data/Hora: " . date('d/m/Y H:i:s');

    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.'
    ]);
} catch (Exception $e) {
    error_log("Erro PHPMailer: " . $mail->ErrorInfo);

    echo json_encode([
        'success' => false,
        'message' => 'Erro ao enviar mensagem. Por favor, tente novamente.',
        'debug' => $mail->ErrorInfo // Remova esta linha em produção
    ]);
}
