<?php
require_once __DIR__ . '/../includes/admin_functions.php';
admin_require_authentication();
$csrfToken = admin_generate_csrf_token();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --bg: #080a1a;
            --panel: #11152b;
            --panel-light: #182042;
            --border: rgba(255,255,255,0.08);
            --accent: #ff6b35;
            --text: #f4f7ff;
            --muted: #a8b1d1;
        }
        * { box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(120deg, #07091b, #0f1a3a);
            color: var(--text);
            margin: 0;
            min-height: 100vh;
            display: flex;
        }
        .sidebar {
            width: 260px;
            background: var(--panel);
            padding: 2rem 1.5rem;
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            border-right: 1px solid var(--border);
        }
        .brand {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }
        .nav-links a {
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            color: var(--muted);
            text-decoration: none;
            margin-bottom: 0.5rem;
            transition: background 0.2s, color 0.2s;
        }
        .nav-links a:hover, .nav-links a.active {
            background: rgba(255,255,255,0.06);
            color: var(--text);
        }
        .logout {
            margin-top: auto;
            color: #ff9e9e;
            text-decoration: none;
            font-weight: 600;
        }
        .content {
            flex: 1;
            padding: 2rem 3rem;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        .card {
            background: var(--panel-light);
            border-radius: 16px;
            padding: 1.75rem;
            border: 1px solid var(--border);
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
        }
        .card h2 {
            margin: 0 0 0.75rem;
            font-size: 1.2rem;
        }
        .info { color: var(--muted); font-size: 0.95rem; line-height: 1.6; }
        form button {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 0.8rem 1.6rem;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 1rem;
        }
        @media (max-width: 900px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; height: auto; flex-direction: row; align-items: center; gap: 1rem; }
            .nav-links { display: flex; gap: 0.75rem; flex-wrap: wrap; }
            .nav-links a { margin: 0; }
            .logout { margin-top: 0; }
            .content { padding: 1.5rem; }
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div>
            <div class="brand">Escoltrix Admin</div>
            <nav class="nav-links">
                <a href="dashboard.php" class="active">Overview</a>
                <a href="#">Messages</a>
                <a href="#">Quote Requests</a>
                <a href="#">System Health</a>
            </nav>
        </div>
        <a class="logout" href="logout.php">Logout</a>
    </aside>
    <main class="content">
        <div class="grid">
            <div class="card">
                <h2>Secure Session</h2>
                <p class="info">
                    You are signed in with elevated privileges. All actions should run over HTTPS.
                    Session IDs are regenerated on login and cookies are marked HttpOnly + Secure.
                </p>
            </div>
            <div class="card">
                <h2>Rate Limiting</h2>
                <p class="info">
                    Login attempts are rate-limited per IP. Excessive failures lock the user out temporarily.
                    Adjust thresholds in <code>includes/admin_functions.php</code>.
                </p>
            </div>
            <div class="card">
                <h2>Protected Action (Demo)</h2>
                <p class="info">Example of CSRF-protected maintenance trigger.</p>
                <form method="POST" action="dashboard.php">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
                    <button type="submit" name="demo_action" value="1">Run Maintenance Task</button>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['demo_action'])) {
                    if (admin_verify_csrf_token($_POST['csrf_token'] ?? '')) {
                        echo '<p class="info" style="color:#58d68d;margin-top:1rem;">Maintenance task triggered (demo).</p>';
                    } else {
                        echo '<p class="info" style="color:#ff8a8a;margin-top:1rem;">Invalid CSRF token.</p>';
                    }
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>

