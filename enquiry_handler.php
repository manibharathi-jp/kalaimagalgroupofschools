<?php
ob_start();
error_reporting(0);
ini_set('display_errors', 0);

require_once('configi.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer-master/src/PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/PHPMailer-master/src/SMTP.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

$name  = trim($_POST['enq_name'] ?? '');
$email = trim($_POST['enq_email'] ?? '');
$phone = trim($_POST['enq_phone'] ?? '');
$grade = trim($_POST['enq_grade'] ?? '');

if (!$name || !$email || !$phone || !$grade) {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

if (!preg_match('/^[0-9]{10}$/', $phone)) {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Phone number must be 10 digits.']);
    exit;
}

$name  = $mysqli->real_escape_string($name);
$email = $mysqli->real_escape_string($email);
$phone = $mysqli->real_escape_string($phone);
$grade = $mysqli->real_escape_string($grade);

$sql = "INSERT INTO enquiries (name, email, phone, grade, created_at) VALUES ('$name', '$email', '$phone', '$grade', NOW())";

if (!$mysqli->query($sql)) {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again.']);
    exit;
}

// Send email notification
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'support@kalaimagalschools.com';
    $mail->Password   = 'hkgbynlepjwrcbnv';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('support@kalaimagalschools.com', 'Kalaimagal School Enquiry');
    $mail->addAddress('support@kalaimagalschools.com', 'Kalaimagal School');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry from ' . $name;
    $mail->Body = "
    <div style='font-family:Arial,sans-serif;max-width:600px;margin:auto;border:1px solid #ddd;border-radius:8px;overflow:hidden'>
        <div style='background:#1a3c8f;padding:20px;text-align:center'>
            <h2 style='color:#fff;margin:0'>New Admission Enquiry</h2>
        </div>
        <div style='padding:24px'>
            <table width='100%' cellpadding='10' style='border-collapse:collapse'>
                <tr style='background:#f5f5f5'><td><strong>Name</strong></td><td>$name</td></tr>
                <tr><td><strong>Email</strong></td><td>$email</td></tr>
                <tr style='background:#f5f5f5'><td><strong>Phone</strong></td><td>$phone</td></tr>
                <tr><td><strong>Grade Interested</strong></td><td>$grade</td></tr>
            </table>
        </div>
        <div style='background:#f9f9f9;padding:12px;text-align:center;color:#888;font-size:12px'>
            Kalaimagal Matric. Hr. Sec. School &mdash; kalaimagalgroupofschools.com
        </div>
    </div>";

    $mail->send();
} catch (Exception $e) {
    // DB save succeeded; email failure is non-critical
}

ob_end_clean();
echo json_encode(['success' => true, 'message' => 'Thank you! We will contact you shortly.']);
