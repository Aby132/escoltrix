<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

function s($v) { return htmlspecialchars(trim((string)$v)); }

$name = isset($_POST['name']) ? s($_POST['name']) : '';
$email = isset($_POST['email']) ? s($_POST['email']) : '';
$mobile = isset($_POST['mobile']) ? s($_POST['mobile']) : '';
$subjectOpt = isset($_POST['subject']) ? s($_POST['subject']) : '';
$message = isset($_POST['message']) ? s($_POST['message']) : '';

$errors = [];
if (strlen($name) < 2) $errors['name'] = 'Enter at least 2 characters';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Enter a valid email';
if (!preg_match('/^[+]?\d{7,16}$/', preg_replace('/\s+/', '', $mobile))) $errors['mobile'] = 'Enter a valid phone';
if (strlen($message) < 10) $errors['message'] = 'Enter at least 10 characters';

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => 'Validation failed', 'errors' => $errors]);
    exit;
}

// Optimization: Send response to user immediately, then process email in background
ignore_user_abort(true);
set_time_limit(0);

// Prepare success response
$response = json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent successfully.']);

// Send headers and content to client, then close connection
ob_start();
echo $response;
$size = ob_get_length();
header("Content-Length: $size");
header('Connection: close');
ob_end_flush();
if (ob_get_level() > 0) { ob_flush(); }
flush();
if (function_exists('fastcgi_finish_request')) {
    fastcgi_finish_request();
}

// Below this line, the user has already received the response.
// We can now take our time to send the email.

$config = @include __DIR__ . '/includes/mailer_config.php';
$emailSubject = 'New Contact Message - Escoltrix Website';
$body = "<html><head><title>Contact Message</title><style>body{font-family:Arial,sans-serif;line-height:1.6;color:#333}.container{max-width:600px;margin:0 auto;padding:20px}.header{background:#0d6efd;color:#fff;padding:16px;text-align:center}.content{background:#f8f9fa;padding:16px;border-radius:8px}.field{margin-bottom:12px}.label{font-weight:bold;color:#0d6efd}.value{margin-top:4px;padding:8px;background:#fff;border-radius:6px;border:1px solid #eee}</style></head><body><div class='container'><div class='header'><h2>New Contact Message</h2></div><div class='content'><div class='field'><div class='label'>Name</div><div class='value'>" . $name . "</div></div><div class='field'><div class='label'>Email</div><div class='value'>" . $email . "</div></div><div class='field'><div class='label'>Mobile</div><div class='value'>" . $mobile . "</div></div>" . ($subjectOpt ? "<div class='field'><div class='label'>Subject</div><div class='value'>" . $subjectOpt . "</div></div>" : "") . "<div class='field'><div class='label'>Message</div><div class='value'>" . nl2br($message) . "</div></div><div class='field'><div class='label'>Submitted</div><div class='value'>" . date('Y-m-d H:i:s') . "</div></div></div></div></body></html>";

try {
    if (file_exists(__DIR__ . '/vendor/autoload.php')) {
        require_once __DIR__ . '/vendor/autoload.php';
    }
    if (class_exists('PHPMailer\\PHPMailer\\PHPMailer') && is_array($config)) {
        $m = new PHPMailer(true);
        $m->isSMTP();
        $m->Host = $config['host'];
        $m->SMTPAuth = true;
        $m->Username = $config['username'];
        $m->Password = $config['password'];
        $m->SMTPSecure = $config['encryption'];
        $m->Port = $config['port'];
        $m->CharSet = 'UTF-8';
        $m->setFrom($config['from_email'], $config['from_name']);
        $m->addAddress($config['to_email']);
        $m->addReplyTo($email, $name);
        $m->isHTML(true);
        $m->Subject = $emailSubject;
        $m->Body = $body;
        $m->AltBody = strip_tags($message);
        $m->send();
    } else {
        $to = isset($config['to_email']) ? $config['to_email'] : 'abyjoykutty@gmail.com';
        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=UTF-8',
            'From: ' . ($config['from_email'] ?? 'noreply@localhost'),
            'Reply-To: ' . $email,
            'X-Mailer: PHP/' . phpversion()
        ];
        mail($to, $emailSubject, $body, implode("\r\n", $headers));
    }
} catch (Exception $e) {
    // Log error silently since user already got success
    error_log("Message send failed: " . $e->getMessage());
}
?>




