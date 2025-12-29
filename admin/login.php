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
    <title>Secure Admin Portal | Escoltrix</title>
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #4cc9f0;
            --secondary: #4361ee;
            --accent: #f72585;
            --dark-bg: #0a0e17;
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.05);
            --text-main: #ffffff;
            --text-muted: #94a3b8;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        /* Animated Background */
        .bg-glow {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(67, 97, 238, 0.15) 0%, rgba(10, 14, 23, 0) 70%);
            border-radius: 50%;
            top: -200px;
            left: -100px;
            z-index: 0;
            animation: pulse-glow 15s infinite alternate;
        }
        
        .bg-glow-2 {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(247, 37, 133, 0.1) 0%, rgba(10, 14, 23, 0) 70%);
            border-radius: 50%;
            bottom: -150px;
            right: -100px;
            z-index: 0;
            animation: pulse-glow 12s infinite alternate-reverse;
        }
        
        @keyframes pulse-glow {
            0% { transform: scale(1) translate(0, 0); opacity: 0.5; }
            100% { transform: scale(1.2) translate(50px, 30px); opacity: 0.8; }
        }
        
        /* Glass Card */
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }
        
        .login-card {
            background: rgba(17, 25, 40, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        
        .brand-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        
        .brand-icon {
            font-size: 2.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1rem;
            display: inline-block;
        }
        
        .brand-header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }
        
        .brand-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        
        /* Form Elements */
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
            margin-left: 0.25rem;
        }
        
        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            color: var(--text-muted);
            font-size: 1rem;
            pointer-events: none;
            transition: color 0.3s ease;
        }
        
        .form-control {
            width: 100%;
            padding: 0.85rem 1rem 0.85rem 2.75rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: white;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.07);
            box-shadow: 0 0 0 4px rgba(76, 201, 240, 0.1);
        }
        
        .form-control:focus + .input-icon {
            color: var(--primary);
        }
        
        .btn-login {
            width: 100%;
            padding: 0.9rem;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(67, 97, 238, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        /* Error Message */
        .error-alert {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .back-link {
            text-align: center;
            margin-top: 2rem;
        }
        
        .back-link a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .back-link a:hover {
            color: white;
        }
        
        /* Mobile adjustment */
        @media (max-width: 480px) {
            .login-card {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Abstract Backgrounds -->
    <div class="bg-glow"></div>
    <div class="bg-glow-2"></div>

    <div class="login-container">
        <div class="login-card">
            <div class="brand-header">
                <i class="fas fa-shield-alt brand-icon"></i>
                <h1>Admin Access</h1>
                <p>Escoltrix Secure Dashboard</p>
            </div>
            
            <?php if (!empty($error)): ?>
                <div class="error-alert">
                    <i class="fas fa-exclamation-circle"></i>
                    <span><?php echo htmlspecialchars($error); ?></span>
                </div>
            <?php endif; ?>

            <form method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="password">Administrator Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter secure key" required autofocus>
                        <i class="fas fa-lock input-icon"></i>
                    </div>
                </div>
                
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
                
                <button type="submit" class="btn-login">
                    Authenticate <i class="fas fa-arrow-right" style="margin-left: 8px; font-size: 14px;"></i>
                </button>
            </form>
            
            <div class="back-link">
                <a href="../index.php">
                    <i class="fas fa-chevron-left"></i> Return to Website
                </a>
            </div>
        </div>
    </div>
</body>
</html>

