<?php
// Debug version - shows detailed error information
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1); // Good to have for server logs

// --- 1. Load Configuration ---
echo "<h3>Debug Information</h3>";
echo "<p><strong>Loading configuration...</strong></p>";
$configFile = dirname(__DIR__) . '/config/config.php';
if (!file_exists($configFile)) {
    die('<p style="color: red;">CRITICAL ERROR: Configuration file not found. Please create config.php.</p>');
}
$config = require $configFile;
echo "<p style='color: green;'>✓ Configuration loaded successfully</p>";


// --- 2. Unified Dependency Loading (Composer) ---
echo "<p><strong>Loading dependencies via Composer...</strong></p>";
$autoloader = dirname(__DIR__) . '/vendor/autoload.php';
if (!file_exists($autoloader)) {
    die('<p style="color: red;">CRITICAL ERROR: Composer autoloader not found. Please run "composer install".</p>');
}
require $autoloader;
// This single require handles both PHPMailer and Google Client
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\SMTP;
echo "<p style='color: green;'>✓ All dependencies loaded successfully</p>";


// --- 3. Request and Validation ---
echo "<p><strong>Request Method:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('<p style="color: red;">Error: Invalid request method. This script only accepts POST requests.</p>');
}

echo "<p><strong>POST Data Received:</strong></p>";
echo "<pre>" . print_r($_POST, true) . "</pre>";

echo "<p><strong>Validating form data...</strong></p>";
$required_fields = ['name', 'age', 'phone', 'email', 'speciality', 'state', 'city'];
$missing_fields = [];
foreach ($required_fields as $field) {
    // Improved check: ensures field exists and is not just whitespace
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        $missing_fields[] = $field;
    }
}
if (!empty($missing_fields)) {
    die('<p style="color: red;">Error: Missing required fields: ' . implode(', ', array_map('htmlspecialchars', $missing_fields)) . '</p>');
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die('<p style="color: red;">Error: Invalid email format: ' . htmlspecialchars($_POST['email']) . '</p>');
}
echo "<p style='color: green;'>✓ All form validation passed</p>";


// --- 4. Main Processing Block ---
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

    echo "<p><strong>Sanitized Data:</strong></p>";
    echo "<ul><li>Reg ID: $regId</li><li>Name: $name</li><li>Age: $age</li><li>Phone: $phone</li><li>Email: $email</li><li>Speciality: $speciality</li><li>State: $state</li><li>City: $city</li><li>Coupon: $couponCode</li></ul>";

    // --- 5. Google Sheets Integration ---
    echo "<p><strong>Attempting Google Sheets integration...</strong></p>";
    if (!file_exists($config['google_sheets']['credentials_path'])) {
        echo '<p style="color: orange;">Warning: Google credentials.json not found at specified path. Skipping Google Sheets integration.</p>';
    } else {
        try {
            $client = new \Google\Client();
            $client->setApplicationName('Champion Cricket League Registration');
            $client->setScopes([\Google\Service\Sheets::SPREADSHEETS]);
            $client->setAuthConfig($config['google_sheets']['credentials_path']); // FIXED: Using config path
            $client->setAccessType('offline');

            $service = new \Google\Service\Sheets($client);
            $spreadsheetId = $config['google_sheets']['spreadsheet_id']; // Using config value

            $values = [[$regId, date('d-M-Y H:i:s'), $name, $age, $phone, $email, $speciality, $state, $city, $couponCode]];
            $body = new \Google\Service\Sheets\ValueRange(['values' => $values]);

            $result = $service->spreadsheets_values->append($spreadsheetId, 'Sheet1!A:J', $body, ['valueInputOption' => 'USER_ENTERED']);
            echo "<p style='color: green;'>✓ Data saved to Google Sheets successfully.</p>";

        } catch (\Exception $e) { // Catch any exception related to Google API
            echo "<p style='color: orange;'>Warning: Google Sheets integration failed - " . htmlspecialchars($e->getMessage()) . "</p>";
            error_log('Google Sheets Error: ' . $e->getMessage()); // Log error for admin
        }
    }

    // --- 6. PHPMailer Email Sending ---
    echo "<p><strong>Attempting to send email...</strong></p>";
    $mail = new PHPMailer(true); // Enable exceptions

    // Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Debugoutput = function($str, $level) { echo "<p>SMTP DEBUG ($level): " . htmlspecialchars($str) . "</p>"; };

    // SMTP Configuration from config file
    $mail->isSMTP();
    $mail->Host = $config['smtp']['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp']['username'];
    $mail->Password = $config['smtp']['password']; // FIXED: Using secure password from config
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $config['smtp']['port'];

    // Recipients from config file
    $mail->setFrom($config['email']['from_address'], $config['email']['from_name']);
    $mail->addAddress($config['email']['admin_email']);
    $mail->addReplyTo($email, $name);

    // Content
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
    echo "<p style='color: green; font-size: 18px;'>✓ SUCCESS: Email sent successfully!</p>";


    // --- 7. Successful Completion ---
    echo "<hr><p style='color:green; font-weight:bold;'>All processing steps completed.</p>";
    // For a debug script, a JS redirect is fine.
    // For production, you would remove all `echo` statements and use: header('Location: /thank-you.html');
    // echo "<script>alert('Enquiry Sent successfully!')</script>";
    echo "<script>alert('Enquiry Sent successfully!'); window.location.href = '/';</script>";
    exit;

} catch (PHPMailerException $e) {
    echo "<h3 style='color: red;'>A Critical Email Error Occurred:</h3>";
    echo "<p style='color: red;'>Message: " . htmlspecialchars($e->errorMessage()) . "</p>";
    error_log("PHPMailer Error: " . $e->errorMessage()); // Log error for admin
    echo "<script>alert('An error occurred while sending your enquiry. Please contact support.'); window.location.href = '/';</script>";
    exit;

} catch (Exception $e) { // Catch all other general exceptions
    echo "<h3 style='color: red;'>A Critical Error Occurred:</h3>";
    echo "<p style='color: red;'><strong>Error Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p style='color: red;'><strong>File:</strong> " . $e->getFile() . " on line " . $e->getLine() . "</p>";
    error_log("Critical Form Error: " . $e->getMessage() . " in " . $e->getFile() . " on line " . $e->getLine()); // Log error for admin
    echo "<script>alert('An unexpected error occurred. Please try again later.'); window.location.href = '/';</script>";
    exit;
}