<?php
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
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$company = isset($_POST['company']) ? trim($_POST['company']) : '';
$position = isset($_POST['position']) ? trim($_POST['position']) : '';
$projectType = isset($_POST['projectType']) ? trim($_POST['projectType']) : '';
$industry = isset($_POST['industry']) ? trim($_POST['industry']) : '';
$facilitySize = isset($_POST['facilitySize']) ? trim($_POST['facilitySize']) : '';
$budget = isset($_POST['budget']) ? trim($_POST['budget']) : '';
$location = isset($_POST['location']) ? trim($_POST['location']) : '';
$protectionTypes = isset($_POST['protectionTypes']) ? $_POST['protectionTypes'] : [];
$timeline = isset($_POST['timeline']) ? trim($_POST['timeline']) : '';
$requirements = isset($_POST['requirements']) ? trim($_POST['requirements']) : '';
$newsletter = isset($_POST['newsletter']) ? true : false;
$privacy = isset($_POST['privacy']) ? true : false;

// Validation
$errors = [];

if (empty($firstName)) {
    $errors[] = 'First name is required';
}

if (empty($lastName)) {
    $errors[] = 'Last name is required';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

if (empty($projectType)) {
    $errors[] = 'Project type is required';
}

if (empty($industry)) {
    $errors[] = 'Industry is required';
}

if (empty($location)) {
    $errors[] = 'Project location is required';
}

if (empty($requirements)) {
    $errors[] = 'Detailed requirements are required';
}

if (!$privacy) {
    $errors[] = 'Privacy policy agreement is required';
}

// If there are validation errors, return them
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Validation failed', 'errors' => $errors]);
    exit;
}

// Prepare email content
$protectionTypesText = is_array($protectionTypes) ? implode(', ', $protectionTypes) : $protectionTypes;

$emailContent = "
New Quote Request from Escoltrix Website

CONTACT INFORMATION:
Name: {$firstName} {$lastName}
Email: {$email}
Phone: {$phone}
Company: {$company}
Position: {$position}

PROJECT INFORMATION:
Project Type: {$projectType}
Industry: {$industry}
Facility Size: {$facilitySize}
Budget: {$budget}
Location: {$location}
Timeline: {$timeline}

PROTECTION REQUIREMENTS:
Types Needed: {$protectionTypesText}

DETAILED REQUIREMENTS:
{$requirements}

NEWSLETTER SUBSCRIPTION: " . ($newsletter ? 'Yes' : 'No') . "

Submitted on: " . date('Y-m-d H:i:s') . "
IP Address: " . $_SERVER['REMOTE_ADDR'] . "
";

// Email configuration
$to = 'info@escoltrix.com'; // Update with your email
$subject = 'New Quote Request - ' . $firstName . ' ' . $lastName;
$headers = [
    'From: noreply@escoltrix.com',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/plain; charset=UTF-8'
];

// Send email
$mailSent = mail($to, $subject, $emailContent, implode("\r\n", $headers));

// Log the submission (optional)
$logEntry = date('Y-m-d H:i:s') . " - Quote Request from: {$email} - " . ($mailSent ? 'Email sent' : 'Email failed') . "\n";
file_put_contents('quote_submissions.log', $logEntry, FILE_APPEND | LOCK_EX);

// Send auto-reply to customer
$autoReplySubject = 'Thank you for your quote request - Escoltrix';
$autoReplyContent = "
Dear {$firstName},

Thank you for your interest in Escoltrix Lightning Protection Solutions.

We have received your quote request and our team will review your requirements. You can expect to hear from us within 24-48 hours with a detailed proposal.

Your request details:
- Project Type: {$projectType}
- Industry: {$industry}
- Location: {$location}

If you have any urgent questions, please don't hesitate to contact us directly:
- Phone: +91 98187 47608
- Email: info@escoltrix.com

Best regards,
Escoltrix Team
";

$autoReplyHeaders = [
    'From: info@escoltrix.com',
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/plain; charset=UTF-8'
];

mail($email, $autoReplySubject, $autoReplyContent, implode("\r\n", $autoReplyHeaders));

// Return success response
echo json_encode([
    'success' => true,
    'message' => 'Quote request submitted successfully. We will contact you within 24-48 hours.'
]);
?>
