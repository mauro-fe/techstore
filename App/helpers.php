<?php
function envs(string $key, $default = null)
{
    return $_ENV[$key] ?? $default;
}
function base_url(string $path = '')
{
    return rtrim(envs('BASE_URL', '/'), '/') . '/' . ltrim($path, '/');
}

function flash_set(string $key, string $message): void
{
    $_SESSION['__flash'][$key] = $message;
}
function flash_get(string $key): ?string
{
    if (!isset($_SESSION['__flash'][$key])) return null;
    $msg = $_SESSION['__flash'][$key];
    unset($_SESSION['__flash'][$key]);
    return $msg;
}

/** -------- CSRF -------- */
function csrf_token(): string
{
    if (empty($_SESSION['__csrf'])) {
        $_SESSION['__csrf'] = bin2hex(random_bytes(16));
    }
    return $_SESSION['__csrf'];
}
function csrf_input(): string
{
    return '<input type="hidden" name="_csrf" value="' . htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') . '">';
}
function csrf_check(?string $token): bool
{
    return is_string($token) && !empty($_SESSION['__csrf']) && hash_equals($_SESSION['__csrf'], $token);
}
