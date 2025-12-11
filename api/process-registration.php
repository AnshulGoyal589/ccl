<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

header('Content-Type: application/json');

require dirname(__DIR__) . '/vendor/autoload.php';
include __DIR__ . '/../razorpay-config.php';


$configFile = dirname(__DIR__) . '/config/config.php';
if (!file_exists($configFile)) {
    die('<p style="color: red;">CRITICAL ERROR: Configuration file not found. Please create config.php.</p>');
}
$config = require $configFile;

use Razorpay\Api\Api;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit();
}

$required_fields = ['name', 'age', 'phone', 'email', 'speciality', 'state', 'city'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        http_response_code(400);
        echo json_encode(['error' => "Field '$field' is required."]);
        exit();
    }
}

// --- 3. Main Processing Block ---
try {
    // Sanitize input data
    $regId = 'CCLREG' . date('YmdHis');
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $age = htmlspecialchars(trim($_POST['age']), ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $speciality = htmlspecialchars(trim($_POST['speciality']), ENT_QUOTES, 'UTF-8');
    $state = htmlspecialchars(trim($_POST['state']), ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars(trim($_POST['city']), ENT_QUOTES, 'UTF-8');
    $couponCode = isset($_POST['c-code']) && trim($_POST['c-code']) !== '' ? htmlspecialchars(trim($_POST['c-code']), ENT_QUOTES, 'UTF-8') : 'N/A';


    // --- 5. PHPMailer Email Sending ---
    $mail = new PHPMailer(true);
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = $config['smtp']['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp']['username'];
    $mail->Password = $config['smtp']['password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $config['smtp']['port'];

    // Send notification to ADMIN
    $mail->setFrom($config['email']['from_address'], $config['email']['from_name']);
    $mail->addAddress($config['email']['admin_email']);
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true);
    $mail->Subject = 'New Cricket League Registration - ' . $name;
    $mail->Body = '
        <h3 style="text-align: center;">New Registration Enquiry</h3>
        <table border="1" width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
            <tr><td style="width:30%;"><strong>Registration ID</strong></td><td>' . $regId . '</td></tr>
            <tr><td><strong>Name</strong></td><td>' . $name . '</td></tr>
            <tr><td><strong>Age</strong></td><td>' . $age . '</td></tr>
            <tr><td><strong>Mobile</strong></td><td>' . $phone . '</td></tr>
            <tr><td><strong>Email</strong></td><td>' . $email . '</td></tr>
            <tr><td><strong>Specialty</strong></td><td>' . $speciality . '</td></tr>
            <tr><td><strong>State</strong></td><td>' . $state . '</td></tr>
            <tr><td><strong>City</strong></td><td>' . $city . '</td></tr>
            <tr><td><strong>Coupon Code</strong></td><td>' . $couponCode . '</td></tr>
            <tr><td><strong>Date</strong></td><td>' . date('d-M-Y H:i:s') . '</td></tr>
        </table>';
    $mail->AltBody = "Registration Details:\nID: $regId\nName: $name\nAge: $age\nMobile: $phone\nEmail: $email\nSpecialty: $speciality\nState: $state\nCity: $city\nCoupon: $couponCode";

    $mail->send();
    
    // Send confirmation to USER
    $mail->clearAddresses();
    $mail->clearReplyTos();
    $mail->addAddress($email, $name);
    $mail->Subject = 'Your Registration for Champion Cricket League';
    $mail->Body = "<h3>Hi {$name},</h3><p>Thank you for registering. Your registration ID is: <strong>{$regId}</strong>. Please proceed with the payment to complete the process.</p>";
    $mail->send();

    // --- 6. Calculate Amount and Create Razorpay Order ---
    $amount_in_inr = 0;
    switch ($speciality) {
        case 'Batsman':
        case 'Bowler':
            $amount_in_inr = 799;
            break;
        case 'All Rounder':
        case 'Wicketkeeper':
            $amount_in_inr = 1199;
            break;
        default:
            throw new Exception('Invalid specialty selected.');
    }
    $amount_in_paise = $amount_in_inr * 100;

    $api = new Api(KEY_ID, KEY_SECRET);
    $orderData = [
        'receipt'         => $regId, // Use our own Reg ID as receipt
        'amount'          => $amount_in_paise,
        'currency'        => 'INR',
        'payment_capture' => 1
    ];
    $razorpayOrder = $api->order->create($orderData);

    // --- 7. Prepare and Send Success Response ---
    $response_data = [
        "status"       => "success",
        "razorpay_key" => KEY_ID,
        "order_id"     => $razorpayOrder['id'],
        "amount"       => $amount_in_paise,
        "currency"     => "INR",
        "name"         => "Champion Cricket League",
        "description"  => "Trial Registration Fees",
        "prefill"      => [
            "name"     => $name,
            "email"    => $email,
            "contact"  => $phone,
        ],
    ];
    echo json_encode($response_data);
    exit;

} catch (Exception $e) {
    // --- 8. Catch-All Error Handler ---
    http_response_code(500); // Internal Server Error
    error_log("PROCESS-REGISTRATION ERROR: " . $e->getMessage()); // Log the detailed error for you
    // Send a generic error message to the user
    echo json_encode(['error' => 'An unexpected error occurred. Please try again later.']);
    exit;
}