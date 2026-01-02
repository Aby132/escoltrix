<?php
require_once __DIR__ . '/../includes/admin_functions.php';
require_once __DIR__ . '/../includes/db_connect.php';

admin_require_authentication();
$csrfToken = admin_generate_csrf_token();

$message = '';
$error = '';

// Handle Delete
if (isset($_GET['delete_id'])) {
    // Simple csrf check for GET delete is cleaner with a token in URL, but for now assuming admin context is enough or could improve later. 
    // Ideally should be a POST form for deletion.
    // Let's rely on standard POST for this example to be safe.
}

// Handle Form Submission (Add News)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_news'])) {
    if (admin_verify_csrf_token($_POST['csrf_token'] ?? '')) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $news_date = $_POST['news_date'];

        if (!empty($title) && !empty($content) && !empty($news_date)) {
            $stmt = $conn->prepare("INSERT INTO news (title, content, news_date) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $content, $news_date);
            if ($stmt->execute()) {
                $message = "News item added successfully.";
            } else {
                $error = "Error adding news: " . $conn->error;
            }
            $stmt->close();
        } else {
            $error = "All fields are required.";
        }
    } else {
        $error = "Invalid CSRF token.";
    }
}

// Handle Delete via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_news'])) {
    if (admin_verify_csrf_token($_POST['csrf_token'] ?? '')) {
        $id = $_POST['news_id'];
        $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $message = "News item deleted successfully.";
        } else {
            $error = "Error deleting news: " . $conn->error;
        }
        $stmt->close();
    } else {
        $error = "Invalid CSRF token.";
    }
}

// Fetch News
$result = $conn->query("SELECT * FROM news ORDER BY news_date DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage News - Escoltrix Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg: #080a1a;
            --panel: #11152b;
            --panel-light: #182042;
            --border: rgba(255,255,255,0.08);
            --accent: #ff6b35;
            --text: #f4f7ff;
            --muted: #a8b1d1;
             --danger: #ef4444;
            --success: #10b981;
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
            overflow-y: auto;
        }
        .card {
            background: var(--panel-light);
            border-radius: 16px;
            padding: 1.75rem;
            border: 1px solid var(--border);
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
            margin-bottom: 2rem;
        }
        .card h2 {
            margin: 0 0 1.5rem;
            font-size: 1.2rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 1rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--muted);
        }
        .form-control {
            width: 100%;
            padding: 0.8rem;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #0b0f24;
            color: var(--text);
            font-family: inherit;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--accent);
        }
        .btn {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 0.8rem 1.6rem;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        .btn:hover { opacity: 0.9; }
        .btn-danger { background: var(--danger); }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            text-align: left;
            padding: 1rem;
            border-bottom: 1px solid var(--border);
        }
        .table th {
            color: var(--muted);
            font-weight: 600;
        }
        .badge {
            padding: 0.25rem 0.5rem;
            background: rgba(255, 107, 53, 0.2);
            color: var(--accent);
            border-radius: 4px;
            font-size: 0.85rem;
        }
        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }
        .alert-success { background: rgba(16, 185, 129, 0.2); color: var(--success); }
        .alert-danger { background: rgba(239, 68, 68, 0.2); color: var(--danger); }
        @media (max-width: 900px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; height: auto; position: static; }
             .nav-links { display: flex; overflow-x: auto; gap: 0.5rem; padding-bottom: 1rem; }
            .content { padding: 1.5rem; }
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div>
            <div class="brand">Escoltrix Admin</div>
            <nav class="nav-links">
                <a href="dashboard.php">Overview</a>
                <a href="manage_news.php" class="active">News & Updates</a>
                <a href="#">Messages</a>
                <a href="#">Quote Requests</a>
            </nav>
        </div>
        <a class="logout" href="logout.php">Logout</a>
    </aside>

    <main class="content">
        <h1>Manage News</h1>
        
        <?php if ($message): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <!-- Add News Form -->
        <div class="card">
            <h2>Add New Update</h2>
            <form method="POST" action="">
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="e.g. New Product Launch" required>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="news_date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control" rows="4" placeholder="Brief description..." required></textarea>
                </div>
                <button type="submit" name="add_news" class="btn">Publish Update</button>
            </form>
        </div>

        <!-- News List -->
        <div class="card">
            <h2>Existing News</h2>
            <div style="overflow-x: auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><span class="badge"><?php echo htmlspecialchars($row['news_date']); ?></span></td>
                                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                                    <td><?php echo htmlspecialchars(substr($row['content'], 0, 80)) . '...'; ?></td>
                                    <td>
                                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
                                            <input type="hidden" name="news_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_news" class="btn btn-danger" style="padding: 0.5rem 0.8rem; font-size: 0.8rem;">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" style="text-align: center; color: var(--muted);">No news found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
<?php $conn->close(); ?>
