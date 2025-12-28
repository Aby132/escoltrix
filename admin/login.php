<?php
require_once __DIR__ . '/../includes/admin_functions.php';

admin_start_secure_session();

// Prevent caching of sensitive pages
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');

$error = '';
$ipIdentifier = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!admin_rate_limit_check($ipIdentifier)) {
        $error = 'Too many failed attempts. Please try again later.';
    } elseif (!admin_verify_csrf_token($_POST['csrf_token'] ?? '')) {
        $error = 'Invalid CSRF token.';
    } else {
        $password = $_POST['password'] ?? '';
        if (password_verify($password, admin_get_password_hash())) {
            admin_regenerate_session();
            $_SESSION['admin_authenticated'] = true;
            admin_reset_rate_limit($ipIdentifier);
            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Incorrect password.';
        }
    }
}

$csrfToken = admin_generate_csrf_token();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Admin Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --bg-dark: #090c1b;
            --card-dark: #11152b;
            --card-light: #1b2040;
            --accent: #ff6b35;
            --text-primary: #f5f7ff;
            --text-muted: #a8b1d1;
        }
        * { box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top, rgba(255,255,255,0.08), transparent 55%),
                        radial-gradient(circle at bottom, rgba(255,107,53,0.15), transparent 50%),
                        var(--bg-dark);
            color: var(--text-primary);
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1rem;
        }
        .login-wrapper {
            width: 100%;
            max-width: 450px;
            position: relative;
        }
        .login-card {
            background: linear-gradient(160deg, var(--card-dark), var(--card-light));
            padding: 2.5rem;
            border-radius: 18px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.05);
            backdrop-filter: blur(8px);
        }
        .login-card h1 {
            margin: 0 0 1rem;
            font-size: 1.8rem;
            text-align: center;
        }
        .login-card p.subtitle {
            margin: 0 auto 2rem;
            text-align: center;
            max-width: 320px;
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        .form-group { margin-bottom: 1.25rem; }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        input[type="password"] {
            width: 100%;
            padding: 0.85rem 1rem;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(255,255,255,0.04);
            color: var(--text-primary);
            font-size: 1rem;
            transition: border-color 0.2s, transform 0.2s;
        }
        input[type="password"]:focus {
            outline: none;
            border-color: rgba(255,107,53,0.6);
            transform: translateY(-1px);
        }
        button {
            width: 100%;
            padding: 0.95rem;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff6b35, #ff9966);
            color: #fff;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(255,107,53,0.35);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        button:hover { transform: translateY(-1px); }
        button:disabled { opacity: 0.6; cursor: not-allowed; }
        .error {
            background: rgba(255,99,131,0.12);
            border: 1px solid rgba(255,99,131,0.4);
            color: #ff9eac;
            padding: 0.85rem 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }
        .info {
            font-size: 0.85rem;
            color: var(--text-muted);
            text-align: center;
            margin-top: 1.5rem;
        }
        @media (max-width: 480px) {
            .login-card { padding: 1.75rem; }
            .login-card h1 { font-size: 1.5rem; }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <h1>Admin Access</h1>
            <p class="subtitle">Secure area protected by rate limiting, CSRF tokens, and encrypted sessions.</p>
            <?php if (!empty($error)): ?>
                <div class="error"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="password">Administrator Password</label>
                    <input type="password" id="password" name="password" required autofocus>
                </div>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
                <button type="submit">Sign In</button>
            </form>
            <div class="info">
                Ensure you access this page over HTTPS. Contact the site owner if you do not recognize this login page.
            </div>
        </div>
    </div>
</body>
</html>

