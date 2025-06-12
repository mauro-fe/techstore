<?php
// contact.php - Sistema de envio de emails com AJAX e SweetAlert 2
// MegaTech - Sistema de contato

require_once 'vendor/autoload.php'; // Composer autoload para PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Configurações do email - CONFIGURE ESTAS VARIÁVEIS
$config = [
    // Configurações SMTP
    'smtp_host' => 'smtp.gmail.com', // ou smtp do seu provedor
    'smtp_port' => 587,
    'smtp_secure' => PHPMailer::ENCRYPTION_STARTTLS,
    'smtp_username' => 'mauro.cardoso.1998@gmail.com', // Seu email
    'smtp_password' => 'lndsutpoplwoyvuu', // Senha de app do Gmail ou senha normal

    // Configurações do destinatário
    'to_email' => 'devmaurofelix@gmail.com',
    'to_name' => 'MegaTech',

    // Configurações do remetente
    'from_email' => 'mauro.cardoso.1998@gmail.com',
    'from_name' => 'Site MegaTech',

    // URL de redirecionamento após envio (fallback para JS desabilitado)
    'success_redirect' => 'contato.html?success=1',
    'error_redirect' => 'contato.html?error=1'
];

// Função para retornar resposta JSON
function sendJsonResponse($success, $message, $data = [])
{
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// Função para verificar se é uma requisição AJAX
function isAjaxRequest()
{
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

// Função para limpar dados de entrada
function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Função para validar email
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Função para validar telefone brasileiro
function validatePhone($phone)
{
    $phone = preg_replace('/[^0-9]/', '', $phone);
    return strlen($phone) >= 10 && strlen($phone) <= 11;
}

// Verificar se é uma requisição POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if (isAjaxRequest()) {
        sendJsonResponse(false, 'Método de requisição inválido');
    } else {
        header('Location: ' . $config['error_redirect']);
        exit;
    }
}

// Capturar e sanitizar dados do formulário
$nome = sanitizeInput($_POST['nome_completo'] ?? ''); // Note o espaço extra no name
$telefone = sanitizeInput($_POST['telefone'] ?? '');
$email = sanitizeInput($_POST['email'] ?? '');
$cidade = sanitizeInput($_POST['tidade'] ?? '');
$como_encontrou = sanitizeInput($_POST['com_nos_encontrou'] ?? '');
$mensagem = sanitizeInput($_POST['mensagem'] ?? '');

// Array de erros
$errors = [];

// Validações
if (empty($nome)) {
    $errors[] = 'Nome completo é obrigatório';
}

if (empty($telefone)) {
    $errors[] = 'Telefone é obrigatório';
} elseif (!validatePhone($telefone)) {
    $errors[] = 'Telefone deve conter entre 10 e 11 dígitos';
}

if (empty($email)) {
    $errors[] = 'E-mail é obrigatório';
} elseif (!validateEmail($email)) {
    $errors[] = 'E-mail inválido';
}

if (empty($cidade)) {
    $errors[] = 'Cidade é obrigatória';
}

if (empty($como_encontrou)) {
    $errors[] = 'Campo "Como nos encontrou" é obrigatório';
}

if (empty($mensagem)) {
    $errors[] = 'Mensagem é obrigatória';
} elseif (strlen($mensagem) < 10) {
    $errors[] = 'Mensagem deve ter pelo menos 10 caracteres';
}

// Se houver erros
if (!empty($errors)) {
    $error_msg = implode(', ', $errors);

    if (isAjaxRequest()) {
        sendJsonResponse(false, $error_msg, ['errors' => $errors]);
    } else {
        header('Location: ' . $config['error_redirect'] . '&msg=' . urlencode($error_msg));
        exit;
    }
}

// Mapear valores do select "Como nos encontrou"
$como_encontrou_map = [
    'google' => 'Google / Pesquisa Online',
    'instagram' => 'Instagram',
    'facebook' => 'Facebook',
    'whatsapp' => 'WhatsApp',
    'indicacao' => 'Indicação de Amigos/Família',
    'anuncio' => 'Anúncio/Propaganda',
    'passando' => 'Passando na Loja',
    'outros' => 'Outros'
];

$como_encontrou_texto = $como_encontrou_map[$como_encontrou] ?? $como_encontrou;

// Validações extras de segurança
if (strlen($nome) > 100) {
    $error = 'Nome muito longo (máximo 100 caracteres)';
    if (isAjaxRequest()) {
        sendJsonResponse(false, $error);
    } else {
        header('Location: ' . $config['error_redirect'] . '&msg=' . urlencode($error));
        exit;
    }
}

if (strlen($mensagem) > 5000) {
    $error = 'Mensagem muito longa (máximo 5000 caracteres)';
    if (isAjaxRequest()) {
        sendJsonResponse(false, $error);
    } else {
        header('Location: ' . $config['error_redirect'] . '&msg=' . urlencode($error));
        exit;
    }
}

// Proteção contra spam (honeypot e rate limiting)
session_start();

// Rate limiting: máximo 3 envios por sessão em 10 minutos
$current_time = time();
if (!isset($_SESSION['contact_attempts'])) {
    $_SESSION['contact_attempts'] = [];
}

// Limpar tentativas antigas (mais de 10 minutos)
$_SESSION['contact_attempts'] = array_filter($_SESSION['contact_attempts'], function ($timestamp) use ($current_time) {
    return ($current_time - $timestamp) < 600; // 10 minutos
});

if (count($_SESSION['contact_attempts']) >= 3) {
    $error = 'Muitas tentativas. Aguarde alguns minutos antes de tentar novamente.';
    if (isAjaxRequest()) {
        sendJsonResponse(false, $error);
    } else {
        header('Location: ' . $config['error_redirect'] . '&msg=' . urlencode($error));
        exit;
    }
}

try {
    // Criar instância do PHPMailer
    $mail = new PHPMailer(true);

    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = $config['smtp_host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];
    $mail->SMTPSecure = $config['smtp_secure'];
    $mail->Port = $config['smtp_port'];

    // Configurar charset
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    // Destinatários
    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($email, $nome);

    // Configurar como HTML
    $mail->isHTML(true);
    $mail->Subject = 'Novo contato do site - ' . $nome;

    // Corpo do email em HTML
    $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #2c3e50; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
            .content { background: #f9f9f9; padding: 30px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #2c3e50; margin-bottom: 5px; }
            .value { margin-top: 5px; padding: 12px; background: white; border-left: 4px solid #3498db; border-radius: 4px; }
            .footer { background: #34495e; color: white; padding: 15px; text-align: center; font-size: 12px; border-radius: 0 0 8px 8px; }
            .highlight { background: #e8f5e8; border-left-color: #27ae60; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>📧 Novo Contato - MegaTech</h1>
                <p style="margin: 0; font-size: 14px; opacity: 0.9;">Formulário de contato do site</p>
            </div>
            
            <div class="content">
                <p><strong>Você recebeu uma nova mensagem através do formulário de contato do site.</strong></p>
                
                <div class="field">
                    <div class="label">👤 Nome Completo:</div>
                    <div class="value highlight">' . htmlspecialchars($nome) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">📱 Telefone:</div>
                    <div class="value">' . htmlspecialchars($telefone) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">📧 E-mail:</div>
                    <div class="value">' . htmlspecialchars($email) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">🏙️ Cidade:</div>
                    <div class="value">' . htmlspecialchars($cidade) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">🔍 Como nos encontrou:</div>
                    <div class="value">' . htmlspecialchars($como_encontrou_texto) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">💬 Mensagem:</div>
                    <div class="value" style="white-space: pre-wrap;">' . htmlspecialchars($mensagem) . '</div>
                </div>
                
                <div style="background: #fff3cd; padding: 15px; border-radius: 6px; margin-top: 20px; border-left: 4px solid #ffc107;">
                    <h4 style="margin-top: 0; color: #856404;">⚡ Ação Recomendada:</h4>
                    <p style="margin-bottom: 0; color: #856404;">Responder em até 24 horas conforme prometido no site.</p>
                </div>
            </div>
            
            <div class="footer">
                <p>📅 Enviado em: ' . date('d/m/Y às H:i:s') . '</p>
                <p>🌐 IP do visitante: ' . $_SERVER['REMOTE_ADDR'] . '</p>
                <p>🖥️ User Agent: ' . substr($_SERVER['HTTP_USER_AGENT'], 0, 100) . '</p>
                <p style="margin-top: 10px; font-weight: bold;">MegaTech - Sistema de Contato</p>
            </div>
        </div>
    </body>
    </html>';

    // Versão em texto simples (fallback)
    $mail->AltBody = "=== NOVO CONTATO - MEGATECH ===\n\n"
        . "Nome: $nome\n"
        . "Telefone: $telefone\n"
        . "E-mail: $email\n"
        . "Cidade: $cidade\n"
        . "Como nos encontrou: $como_encontrou_texto\n\n"
        . "Mensagem:\n$mensagem\n\n"
        . "---\n"
        . "Enviado em: " . date('d/m/Y às H:i:s') . "\n"
        . "IP: " . $_SERVER['REMOTE_ADDR'];

    // Enviar email
    $mail->send();

    // Registrar tentativa bem-sucedida
    $_SESSION['contact_attempts'][] = $current_time;

    // Log de sucesso
    error_log("Contato enviado com sucesso - Nome: $nome, Email: $email, IP: " . $_SERVER['REMOTE_ADDR'], 0);

    // Enviar email de confirmação para o cliente (opcional)
    sendConfirmationEmail($email, $nome, $config);

    // Resposta de sucesso
    if (isAjaxRequest()) {
        sendJsonResponse(true, 'Mensagem enviada com sucesso! Entraremos em contato em breve.', [
            'nome' => $nome,
            'email' => $email,
            'timestamp' => date('d/m/Y H:i:s')
        ]);
    } else {
        header('Location: ' . $config['success_redirect']);
        exit;
    }
} catch (Exception $e) {
    // Log do erro
    error_log("Erro ao enviar email de contato: {$mail->ErrorInfo} - IP: " . $_SERVER['REMOTE_ADDR'], 0);

    $error_message = 'Erro interno do servidor. Nossa equipe foi notificada.';

    if (isAjaxRequest()) {
        sendJsonResponse(false, $error_message, ['error_code' => 'SMTP_ERROR']);
    } else {
        header('Location: ' . $config['error_redirect'] . '&msg=' . urlencode($error_message));
        exit;
    }
}

// Função de email de confirmação para o cliente
function sendConfirmationEmail($cliente_email, $cliente_nome, $config)
{
    try {
        $mail = new PHPMailer(true);

        // Mesmas configurações SMTP
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->SMTPSecure = $config['smtp_secure'];
        $mail->Port = $config['smtp_port'];
        $mail->CharSet = 'UTF-8';

        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($cliente_email, $cliente_nome);

        $mail->isHTML(true);
        $mail->Subject = '✅ Confirmação - Sua mensagem foi recebida - MegaTech';

        $mail->Body = '
        <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #f8f9fa;">
            <div style="background: #2c3e50; color: white; padding: 25px; text-align: center; border-radius: 8px 8px 0 0;">
                <h1 style="margin: 0; font-size: 24px;">✅ Mensagem Recebida!</h1>
                <p style="margin: 10px 0 0 0; opacity: 0.9;">Confirmação automática</p>
            </div>
            
            <div style="padding: 30px; background: white;">
                <p style="font-size: 16px; margin-bottom: 20px;">Olá <strong>' . htmlspecialchars($cliente_nome) . '</strong>,</p>
                
                <p>Recebemos sua mensagem e nossa equipe analisará seu contato com atenção.</p>
                <p><strong style="color: #27ae60;">Responderemos em até 24 horas!</strong></p>
                
                <div style="background: #e8f5e8; padding: 20px; margin: 25px 0; border-radius: 8px; border-left: 4px solid #27ae60;">
                    <h3 style="margin-top: 0; color: #2c3e50;">📞 Nossos Contatos:</h3>
                    <p style="margin: 8px 0;"><strong>📱 Telefone/WhatsApp:</strong> (44) 99801-1086</p>
                    <p style="margin: 8px 0;"><strong>📧 E-mail:</strong> contato@megatech.com.br</p>
                    <p style="margin: 8px 0;"><strong>📍 Endereço:</strong> Av. Brasil - Centro, Campina da Lagoa/PR</p>
                    <p style="margin: 8px 0;"><strong>🕐 Horário:</strong> Seg-Sex: 8h-18h | Sáb: 8h-12h</p>
                </div>
                
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 25px;">
                    <h4 style="margin-top: 0; color: #2c3e50;">🌟 Siga-nos nas redes sociais:</h4>
                    <p style="margin-bottom: 0;">
                        <a href="https://www.instagram.com/megatech_cdl/" style="color: #e1306c; text-decoration: none; margin-right: 15px;">📷 Instagram</a>
                        <a href="https://www.facebook.com/MegaTech2k21/" style="color: #1877f2; text-decoration: none;">📘 Facebook</a>
                    </p>
                </div>
                
                <p style="margin-top: 25px; text-align: center; color: #7f8c8d;">
                    Obrigado por escolher a <strong style="color: #2c3e50;">MegaTech</strong>!
                </p>
            </div>
            
            <div style="background: #2c3e50; color: white; padding: 15px; text-align: center; font-size: 12px; border-radius: 0 0 8px 8px;">
                <p style="margin: 0;">Este é um e-mail automático. Não responda a esta mensagem.</p>
                <p style="margin: 5px 0 0 0;">© ' . date('Y') . ' MegaTech - Todos os direitos reservados</p>
            </div>
        </div>';

        $mail->AltBody = "Olá $cliente_nome!\n\n"
            . "Recebemos sua mensagem e entraremos em contato em até 24 horas.\n\n"
            . "Nossos contatos:\n"
            . "Telefone: (44) 99801-1086\n"
            . "E-mail: contato@megatech.com.br\n"
            . "Endereço: Av. Brasil - Centro, Campina da Lagoa/PR\n\n"
            . "Obrigado por escolher a MegaTech!";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Erro ao enviar confirmação para $cliente_email: {$mail->ErrorInfo}", 0);
        return false;
    }
}
