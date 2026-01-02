<?php
/**
 * Shared admin helper functions.
 */

function admin_start_secure_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    if (headers_sent()) {
        return;
    }

    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    
    // Set cookie parameters only if session is not active
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    
    session_start();
}

function admin_get_password_hash(): string
{
    static $hash = null;
    if ($hash === null) {
        $config = include __DIR__ . '/admin_config.php';
        $hash = $config['password_hash'] ?? '';
    }
    return $hash;
}

function admin_is_authenticated(): bool
{
    admin_start_secure_session();
    return !empty($_SESSION['admin_authenticated']);
}

function admin_require_authentication(): void
{
    if (!admin_is_authenticated()) {
        header('Location: login.php');
        exit;
    }
}

function admin_regenerate_session(): void
{
    admin_start_secure_session();
    session_regenerate_id(true);
}

function admin_generate_csrf_token(): string
{
    admin_start_secure_session();
    if (empty($_SESSION['admin_csrf_token'])) {
        $_SESSION['admin_csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['admin_csrf_token'];
}

function admin_verify_csrf_token(?string $token): bool
{
    admin_start_secure_session();
    return isset($_SESSION['admin_csrf_token']) && hash_equals($_SESSION['admin_csrf_token'], (string)$token);
}

function admin_rate_limit_check(string $identifier, int $maxAttempts = 5, int $decaySeconds = 900): bool
{
    $storageDir = __DIR__ . '/../storage';
    if (!is_dir($storageDir)) {
        mkdir($storageDir, 0755, true);
    }
    $file = $storageDir . '/admin_rate_limit.json';
    $data = [];
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $data = json_decode($json, true) ?: [];
    }

    $now = time();
    if (!isset($data[$identifier]) || ($now - $data[$identifier]['last_attempt']) > $decaySeconds) {
        $data[$identifier] = ['attempts' => 0, 'last_attempt' => $now];
    }

    if ($data[$identifier]['attempts'] >= $maxAttempts && ($now - $data[$identifier]['last_attempt']) <= $decaySeconds) {
        return false;
    }

    $data[$identifier]['attempts']++;
    $data[$identifier]['last_attempt'] = $now;
    file_put_contents($file, json_encode($data));

    return true;
}

function admin_reset_rate_limit(string $identifier): void
{
    $file = __DIR__ . '/../storage/admin_rate_limit.json';
    if (!file_exists($file)) {
        return;
    }
    $json = file_get_contents($file);
    $data = json_decode($json, true) ?: [];
    if (isset($data[$identifier])) {
        unset($data[$identifier]);
        file_put_contents($file, json_encode($data));
    }
}

