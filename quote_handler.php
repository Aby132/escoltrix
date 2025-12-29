<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Quote Handler - Process quote form submissions
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$company = isset($_POST['company']) ? trim($_POST['company']) : '';
$projectType = isset($_POST['projectType']) ? trim($_POST['projectType']) : '';
$industry = isset($_POST['industry']) ? trim($_POST['industry']) : '';
$location = isset($_POST['location']) ? trim($_POST['location']) : '';
$timeline = isset($_POST['timeline']) ? trim($_POST['timeline']) : '';
$requirements = isset($_POST['requirements']) ? trim($_POST['requirements']) : '';

// Split full name into first and last for email display
$nameParts = explode(' ', $fullName, 2);
$firstName = isset($nameParts[0]) ? $nameParts[0] : $fullName;
$lastName = isset($nameParts[1]) ? $nameParts[1] : '';

// Validation
$errors = [];

if (empty($fullName)) {
    $errors[] = 'Full name is required';
} elseif (strlen($fullName) < 2) {
    $errors[] = 'Full name must be at least 2 characters';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

if (empty($location)) {
    $errors[] = 'Project location is required';
}

// Privacy checkbox removed from UI; do not require it server-side

// If there are validation errors, return them
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Validation failed', 'errors' => $errors]);
    exit;
}

// Prepare email content
$emailContent = "
New Quote Request from Escoltrix Website

CONTACT INFORMATION:
Name: {$fullName}
Email: {$email}
Phone: {$phone}
Company: {$company}
Location: {$location}

ADDITIONAL INFORMATION:
Requirements: {$requirements}

Submitted on: " . date('Y-m-d H:i:s') . "
IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "
";

// OPTIMIZATION: Send success response immediately
ignore_user_abort(true);
set_time_limit(0);

$response = json_encode([
    'success' => true,
    'message' => 'Quote request submitted successfully. We will contact you within 24-48 hours.'
]);

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

// Background processing starts here...

// Email via PHPMailer (fallback to mail())
$subject = 'New Quote Request - ' . $fullName;
$configPath = __DIR__ . '/includes/mailer_config.php';
if (!file_exists($configPath)) {
    $configPath = dirname(__DIR__) . '/includes/mailer_config.php';
}
$config = @include $configPath;
$mailSent = false;

try {
    if (file_exists(__DIR__ . '/vendor/autoload.php')) {
        require_once __DIR__ . '/vendor/autoload.php';
    }
    if (class_exists('PHPMailer\\PHPMailer\\PHPMailer') && is_array($config) && !empty($config['host'])) {
        $mailer = new PHPMailer(true);
        $mailer->isSMTP();
        $mailer->Host = $config['host'];
        $mailer->SMTPAuth = true;
        $mailer->Username = $config['username'];
        $mailer->Password = $config['password'];
        $mailer->SMTPSecure = $config['encryption'];
        $mailer->Port = $config['port'];
        $mailer->CharSet = 'UTF-8';

        $mailer->setFrom($config['from_email'], $config['from_name']);
        $mailer->addAddress($config['to_email']);
        $mailer->addReplyTo($email, $fullName);
        $mailer->Subject = $subject;
        $mailer->Body = nl2br($emailContent);
        $mailer->AltBody = $emailContent;
        $mailer->isHTML(true);
        $mailer->send();
    } else {
        // Fallback to native mail()
        $to = isset($config['to_email']) ? $config['to_email'] : 'abyjoykutty@gmail.com';
        $headers = [
            'From: noreply@escoltrix.com',
            'Reply-To: ' . $email,
            'X-Mailer: PHP/' . phpversion(),
            'Content-Type: text/plain; charset=UTF-8'
        ];
        @mail($to, $subject, $emailContent, implode("\r\n", $headers));
    }
    // Set for log
    $mailSent = true;
} catch (Exception $e) {
    error_log('Quote email sending failed: ' . $e->getMessage());
    if (isset($mailer) && $mailer instanceof PHPMailer) {
        error_log('PHPMailer Error Info: ' . $mailer->ErrorInfo);
    }
}

// Log the submission
$logEntry = date('Y-m-d H:i:s') . " - Quote Request from: {$email} - " . ($mailSent ? 'Email sent' : 'Email failed') . "\n";
file_put_contents('quote_submissions.log', $logEntry, FILE_APPEND | LOCK_EX);

// Send auto-reply to customer
$autoReplySubject = 'Thank you for your quote request - Escoltrix';
$autoReplyContentHtml = nl2br("Dear {$fullName},\n\nThank you for your interest in Escoltrix Lightning Protection Solutions.\n\nWe have received your quote request and our team will review your requirements. You can expect to hear from us within 24-48 hours with a detailed proposal.\n\nYour request details:\n- Location: {$location}\n\nIf you have any urgent questions, please don't hesitate to contact us directly:\n- Email: info@escoltrix.com\n\nBest regards,\nEscoltrix Team");
try {
    if (class_exists('PHPMailer\\PHPMailer\\PHPMailer') && is_array($config)) {
        $auto = new PHPMailer(true);
        $auto->isSMTP();
        $auto->Host = $config['host'];
        $auto->SMTPAuth = true;
        $auto->Username = $config['username'];
        $auto->Password = $config['password'];
        $auto->SMTPSecure = $config['encryption'];
        $auto->Port = $config['port'];
        $auto->CharSet = 'UTF-8';
        $auto->setFrom($config['from_email'], $config['from_name']);
        $auto->addAddress($email, $fullName);
        $auto->isHTML(true);
        $auto->Subject = $autoReplySubject;
        $auto->Body = $autoReplyContentHtml;
        $auto->AltBody = strip_tags($autoReplyContentHtml);
        $auto->send();
    } else {
        $autoReplyHeaders = [
            'From: info@escoltrix.com',
            'X-Mailer: PHP/' . phpversion(),
            'Content-Type: text/plain; charset=UTF-8'
        ];
        @mail($email, $autoReplySubject, strip_tags($autoReplyContentHtml), implode("\r\n", $autoReplyHeaders));
    }
} catch (Exception $e) {
    error_log('Auto-reply (quote) failed: ' . $e->getMessage());
}
?>
