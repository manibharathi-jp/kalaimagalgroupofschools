<?php
require_once('configi.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

$name  = trim($_POST['enq_name'] ?? '');
$email = trim($_POST['enq_email'] ?? '');
$phone = trim($_POST['enq_phone'] ?? '');
$grade = trim($_POST['enq_grade'] ?? '');

if (!$name || !$email || !$phone || !$grade) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

if (!preg_match('/^[0-9]{10}$/', $phone)) {
    echo json_encode(['success' => false, 'message' => 'Phone number must be 10 digits.']);
    exit;
}

$name  = $mysqli->real_escape_string($name);
$email = $mysqli->real_escape_string($email);
$phone = $mysqli->real_escape_string($phone);
$grade = $mysqli->real_escape_string($grade);

$sql = "INSERT INTO enquiries (name, email, phone, grade, created_at) VALUES ('$name', '$email', '$phone', '$grade', NOW())";

if ($mysqli->query($sql)) {
    echo json_encode(['success' => true, 'message' => 'Thank you! We will contact you shortly.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again.']);
}
