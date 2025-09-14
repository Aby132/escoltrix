<?php
// Contact Form Handler
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate mobile number
function validate_mobile($mobile) {
    $mobile = preg_replace('/\s+/', '', $mobile); // Remove spaces
    return preg_match('/^[\+]?[1-9][\d]{0,15}$/', $mobile);
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

// If JSON input is empty, try form data
if (empty($input)) {
    $input = $_POST;
}

// Validate required fields
$required_fields = ['name', 'email', 'mobile', 'message', 'captcha'];
$errors = [];

foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        $errors[] = ucfirst($field) . ' is required';
    }
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields', 'errors' => $errors]);
    exit;
}

// Sanitize inputs
$name = sanitize_input($input['name']);
$email = sanitize_input($input['email']);
$mobile = sanitize_input($input['mobile']);
$message = sanitize_input($input['message']);
$captcha = sanitize_input($input['captcha']);

// Validation
$validation_errors = [];

// Validate name
if (strlen($name) < 2) {
    $validation_errors[] = 'Name must be at least 2 characters long';
}

// Validate email
if (!validate_email($email)) {
    $validation_errors[] = 'Please enter a valid email address';
}

// Validate mobile
if (!validate_mobile($mobile)) {
    $validation_errors[] = 'Please enter a valid mobile number';
}

// Validate message
if (strlen($message) < 10) {
    $validation_errors[] = 'Message must be at least 10 characters long';
}

// Note: In a real implementation, you'd validate captcha against session data
// For now, we'll skip captcha validation in the backend

if (!empty($validation_errors)) {
    echo json_encode(['success' => false, 'message' => 'Validation failed', 'errors' => $validation_errors]);
    exit;
}

// Prepare email content
$to = 'info@escoltrix.com'; // Change to your actual email
$subject = 'New Contact Form Submission - Escoltrix Website';

$email_body = "
<html>
<head>
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #007bff, #0056b3); color: white; padding: 20px; text-align: center; }
        .content { background: #f8f9fa; padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #007bff; }
        .value { margin-top: 5px; padding: 10px; background: white; border-radius: 5px; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
            <p>Escoltrix Website</p>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Name:</div>
                <div class='value'>" . htmlspecialchars($name) . "</div>
            </div>
            <div class='field'>
                <div class='label'>Email:</div>
                <div class='value'>" . htmlspecialchars($email) . "</div>
            </div>
            <div class='field'>
                <div class='label'>Mobile:</div>
                <div class='value'>" . htmlspecialchars($mobile) . "</div>
            </div>
            <div class='field'>
                <div class='label'>Message:</div>
                <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
            </div>
            <div class='field'>
                <div class='label'>Submitted:</div>
                <div class='value'>" . date('Y-m-d H:i:s') . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>This email was sent from the Escoltrix website contact form.</p>
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = array(
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: noreply@escoltrix.com',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion()
);

// Try to send email
$mail_sent = false;
try {
    $mail_sent = mail($to, $subject, $email_body, implode("\r\n", $headers));
} catch (Exception $e) {
    error_log('Email sending failed: ' . $e->getMessage());
}

// Save to database or file (optional)
try {
    // Create submissions directory if it doesn't exist
    $submissions_dir = 'submissions';
    if (!is_dir($submissions_dir)) {
        mkdir($submissions_dir, 0755, true);
    }
    
    // Save submission to file
    $submission_data = array(
        'timestamp' => date('Y-m-d H:i:s'),
        'name' => $name,
        'email' => $email,
        'mobile' => $mobile,
        'message' => $message,
        'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
    );
    
    $filename = $submissions_dir . '/submission_' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.json';
    file_put_contents($filename, json_encode($submission_data, JSON_PRETTY_PRINT));
    
} catch (Exception $e) {
    error_log('Failed to save submission: ' . $e->getMessage());
}

// Auto-reply to user
$auto_reply_subject = 'Thank you for contacting Escoltrix';
$auto_reply_body = "
<html>
<head>
    <title>Thank you for contacting Escoltrix</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #007bff, #0056b3); color: white; padding: 20px; text-align: center; }
        .content { background: #f8f9fa; padding: 20px; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Thank you for contacting Escoltrix</h2>
        </div>
        <div class='content'>
            <p>Dear " . htmlspecialchars($name) . ",</p>
            <p>Thank you for your interest in Escoltrix lightning protection solutions. We have received your message and will get back to you within 24 hours.</p>
            <p>Your message:</p>
            <div style='background: white; padding: 15px; border-radius: 5px; margin: 15px 0;'>
                " . nl2br(htmlspecialchars($message)) . "
            </div>
            <p>Best regards,<br>
            The Escoltrix Team</p>
        </div>
        <div class='footer'>
            <p>Escoltrix - Cutting Edge Solution for a Modern Facility</p>
            <p>Email: info@escoltrix.com</p>
        </div>
    </div>
</body>
</html>
";

$auto_reply_headers = array(
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: info@escoltrix.com',
    'Reply-To: info@escoltrix.com',
    'X-Mailer: PHP/' . phpversion()
);

try {
    mail($email, $auto_reply_subject, $auto_reply_body, implode("\r\n", $auto_reply_headers));
} catch (Exception $e) {
    error_log('Auto-reply failed: ' . $e->getMessage());
}

// Return response
if ($mail_sent) {
    echo json_encode([
        'success' => true, 
        'message' => 'Thank you! Your message has been sent successfully. We will get back to you soon.'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Sorry, there was an error sending your message. Please try again later or contact us directly.'
    ]);
}
?>
