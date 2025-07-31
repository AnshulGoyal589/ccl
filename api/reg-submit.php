<?php
// Debug version - shows detailed error information
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1); // Good to have for server logs

echo "<h3>Debug Information</h3>";
echo "<p><strong>Request Method:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // For a script that processes form data, it's crucial.
    // If this script could also be accessed via GET for other purposes, this die() might be too restrictive.
    // Assuming it's only for POST form submission.
    echo '<p style="color: red;">Error: Invalid request method. Form must be submitted via POST.</p>';
    // It's often better to redirect or show a user-friendly page than just die() with debug info.
    // For now, keeping it as is for debugging.
    exit; // Exit to prevent further script execution if not POST
}

echo "<p><strong>POST Data Received:</strong></p>";
echo "<pre>" . print_r($_POST, true) . "</pre>";

// Include PHPMailer - with error checking
echo "<p><strong>Loading PHPMailer...</strong></p>";
if (!file_exists(__DIR__ . '/phpmailer/PHPMailer.php')) { // Use __DIR__ for robustness
    die('<p style="color: red;">Error: PHPMailer not found. Please ensure phpmailer folder exists with PHPMailer.php file in the same directory as this script.</p>');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException; // Aliasing to avoid conflict if Google Exception is used
use PHPMailer\PHPMailer\SMTP;
// Assuming Google Client classes are properly autoloaded if $useGoogleSheets is true
// use Google\Client;
// use Google\Service\Sheets;
// use Google\Service\Sheets\ValueRange;


require __DIR__ . '/phpmailer/Exception.php';
require __DIR__ . '/phpmailer/PHPMailer.php';
require __DIR__ . '/phpmailer/SMTP.php';
echo "<p style='color: green;'>✓ PHPMailer loaded successfully</p>";

// Check Google Sheets dependencies
echo "<p><strong>Checking Google Sheets...</strong></p>";
$useGoogleSheets = false; // Default to false
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo '<p style="color: orange;">Warning: Google Sheets vendor/autoload.php not found. Skipping Google Sheets integration.</p>';
} else {
    require __DIR__ . '/vendor/autoload.php';
    echo "<p style='color: green;'>✓ Google Sheets autoloader found</p>";
    // if (!file_exists(__DIR__ . '/credentials.json')) {
    //     echo '<p style="color: orange;">Warning: credentials.json not found. Google Sheets integration will likely fail or be skipped.</p>';
    // } else {
        $useGoogleSheets = true; // Set to true only if both autoload and credentials seem present
        // echo "<p style='color: green;'>✓ credentials.json found. Google Sheets integration will be attempted.</p>";
    // }
}


// Validate required fields
echo "<p><strong>Validating form data...</strong></p>";
$required_fields = ['name', 'age', 'phone', 'email', 'speciality', 'state', 'city'];
$missing_fields = [];

foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        $missing_fields[] = $field;
    }
}

if (!empty($missing_fields)) {
    // For a debug script, die is okay. For production, redirect with error message.
    die('<p style="color: red;">Error: Missing required fields: ' . implode(', ', array_map('htmlspecialchars', $missing_fields)) . '</p>');
}

// Validate email format
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die('<p style="color: red;">Error: Invalid email format: ' . htmlspecialchars($_POST['email']) . '</p>');
}

echo "<p style='color: green;'>✓ All form validation passed</p>";

try {
    // Sanitize input data
    $regId = 'CCLREG' . date('YmdHis');
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
    $age = htmlspecialchars(trim($_POST['age']), ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL); // Use filter_var for email sanitization
    $speciality = htmlspecialchars(trim($_POST['speciality']), ENT_QUOTES, 'UTF-8');
    $state = htmlspecialchars(trim($_POST['state']), ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars(trim($_POST['city']), ENT_QUOTES, 'UTF-8');
    $couponCode = isset($_POST['c-code']) && trim($_POST['c-code']) !== '' ? htmlspecialchars(trim($_POST['c-code']), ENT_QUOTES, 'UTF-8') : 'N/A';

    echo "<p><strong>Sanitized Data:</strong></p>";
    echo "<ul>";
    echo "<li>Registration ID: $regId</li>";
    echo "<li>Name: $name</li>";
    echo "<li>Age: $age</li>";
    echo "<li>Phone: $phone</li>";
    echo "<li>Email: $email</li>";
    echo "<li>Speciality: $speciality</li>";
    echo "<li>State: $state</li>";
    echo "<li>City: $city</li>";
    echo "<li>Coupon Code: $couponCode</li>";
    echo "</ul>";

    // Google Sheets Integration (if available)
    if ($useGoogleSheets) {
        echo "<p><strong>Attempting Google Sheets integration...</strong></p>";
        try {
            $client = new \Google\Client(); // Use fully qualified name or ensure 'use Google\Client;' is active
            $client->setApplicationName('Champion Cricket League Registration');
            $client->setScopes([\Google\Service\Sheets::SPREADSHEETS]);
            // $client->setAuthConfig(__DIR__ . '/credentials.json'); // Use __DIR__ for path
            $client->setAccessType('offline');

            $service = new \Google\Service\Sheets($client);
            $spreadsheetId = '1CV06Zv0bE47aFHV9lsGRoIZCdHUhHGgj62P0M4GRcAw'; // Ensure this ID is correct

            $values = [
                [
                    $regId,
                    date('d-M-Y H:i:s'),
                    $name,
                    $age,
                    $phone,
                    $email,
                    $speciality,
                    $state,
                    $city,
                    $couponCode
                ]
            ];

            $body = new \Google\Service\Sheets\ValueRange([
                'values' => $values
            ]);

            $result = $service->spreadsheets_values->append(
                $spreadsheetId,
                'Sheet1!A:J', // Ensure 'Sheet1' is the correct sheet name
                $body,
                ['valueInputOption' => 'USER_ENTERED'] // Changed to USER_ENTERED, RAW is also fine
            );

            echo "<p style='color: green;'>✓ Data saved to Google Sheets successfully. Updates: " . htmlspecialchars(json_encode($result->getUpdates())) . "</p>";

        } catch (\Google\Exception $e) { // More specific catch for Google API errors
            echo "<p style='color: orange;'>Warning: Google Sheets API Error - " . htmlspecialchars($e->getMessage()) . "</p>";
            echo "<p>Continuing process if possible...</p>";
            // Log this error for server-side review: error_log('Google Sheets API Error: ' . $e->getMessage());
        } catch (Exception $e) { // Generic catch for other issues during GSheets setup
            echo "<p style='color: orange;'>Warning: Google Sheets integration failed (general error) - " . htmlspecialchars($e->getMessage()) . "</p>";
            echo "<p>Continuing process if possible...</p>";
            // Log this error: error_log('Google Sheets General Error: ' . $e->getMessage());
        }
    } else {
        echo "<p style='color: #cc8400;'>Skipping Google Sheets integration (dependencies not met or disabled).</p>";
    }

    // Initialize PHPMailer (Commented out part)
    $emailSentSuccessfully = false; // Flag to track email status if it were active
    $phpMailerActive = false; // Set to true if you uncomment the mailer code

    // if ($phpMailerActive) {
        // echo "<p><strong>Initializing email...</strong></p>";
        // $mail = new PHPMailer(true);

        // // Enable debug output
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        // $mail->Debugoutput = function($str, $level) {
        //     echo "<p style='color: blue; font-size: 12px;'>SMTP DEBUG ($level): " . htmlspecialchars($str) . "</p>";
        // };

        // // SMTP Configuration
        // $mail->isSMTP();
        // $mail->Host = 'smtp-mail.outlook.com';
        // $mail->SMTPAuth = true;
        // $mail->Username = 'championcricketleague@outlook.com'; // Replace with actual username
        // $mail->Password = 'zpzjhpdrglotoizx'; // Replace with actual password or app password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $mail->Port = 587;
        // $mail->Timeout = 60;
        
        // echo "<p style='color: green;'>✓ SMTP configuration set</p>";

        // // Recipients
        // $mail->setFrom('championcricketleague@outlook.com', 'Champion Cricket League');
        // $mail->addAddress('championcricketleague@outlook.com', 'Champion Cricket League Admin'); // Send to admin
        // // Optionally, send a confirmation to the user:
        // // $mail->addAddress($email, $name);
        // $mail->addReplyTo($email, $name);
        
        // echo "<p style='color: green;'>✓ Email recipients set</p>";

        // // Content
        // $mail->isHTML(true);
        // $mail->Subject = 'New Cricket League Registration - ' . $name;
        // $mail->Body = '
        // <h3 style="text-align: center;">New Registration Enquiry</h3>
        // <table border="1" width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
        //     <tr><td style="width:30%;"><strong>Registration ID</strong></td><td>' . $regId . '</td></tr>
        //     <tr><td><strong>Name</strong></td><td>' . $name . '</td></tr>
        //     <tr><td><strong>Age</strong></td><td>' . $age . '</td></tr>
        //     <tr><td><strong>Mobile</strong></td><td>' . $phone . '</td></tr>
        //     <tr><td><strong>Email</strong></td><td>' . $email . '</td></tr>
        //     <tr><td><strong>Specialty</strong></td><td>' . $speciality . '</td></tr>
        //     <tr><td><strong>State</strong></td><td>' . $state . '</td></tr>
        //     <tr><td><strong>City</strong></td><td>' . $city . '</td></tr>
        //     <tr><td><strong>Coupon Code</strong></td><td>' . $couponCode . '</td></tr>
        //     <tr><td><strong>Date</strong></td><td>' . date('d-M-Y H:i:s') . '</td></tr>
        // </table>';

        // $mail->AltBody = "Registration Details:\nID: $regId\nName: $name\nAge: $age\nMobile: $phone\nEmail: $email\nSpecialty: $speciality\nState: $state\nCity: $city\nCoupon: $couponCode\nDate: " . date('d-M-Y H:i:s');

        // echo "<p style='color: green;'>✓ Email content prepared</p>";
        // echo "<p><strong>Attempting to send email...</strong></p>";

        // // Send email
        // if ($mail->send()) {
        //     echo "<p style='color: green; font-size: 18px;'>✓ SUCCESS: Email sent successfully!</p>";
        //     $emailSentSuccessfully = true;
        // } else {
        //     // PHPMailer throws an exception on failure if $mail = new PHPMailer(true);
        //     // So this 'else' might not be reached if SMTPDebug is not verbose enough to show the error before exception.
        //     // The exception will be caught by the main catch block.
        //     echo "<p style='color: red; font-size: 16px;'>ERROR: Email failed to send. Mailer Error: " . htmlspecialchars($mail->ErrorInfo) . "</p>";
        // }
    // } else {
    //    echo "<p style='color: #cc8400;'>Skipping Email sending (PHPMailer section is commented out or disabled).</p>";
    // }


    // --- Successful Completion Point ---
    // If we reach here, it means the script's main tasks (validation, GSheets attempt) are done
    // without throwing an exception that gets caught by the main 'catch' block.
    // The PHPMailer part is currently commented out. If it were active, its success/failure would also be a factor.

    echo "<hr><p style='color:green; font-weight:bold;'>All processing steps completed (see logs above for details).</p>";
    echo "
    <script>
        alert('Enquiry Sent successfully!');
        window.location.href = '/';
    </script>
    ";
    exit; // Crucial to prevent any further output below this point after starting the redirect.

} catch (PHPMailerException $e) { // Catch PHPMailer specific exceptions first
    echo "<h3 style='color: red;'>PHPMailer Error:</h3>";
    echo "<p style='color: red;'>Message: " . htmlspecialchars($e->errorMessage()) . "</p>"; // PHPMailer's own error message
    if (isset($mail) && !empty($mail->ErrorInfo)) {
         echo "<p style='color: red;'>Mailer ErrorInfo: " . htmlspecialchars($mail->ErrorInfo) . "</p>";
    }
    // Log the error for server-side debugging
    error_log("PHPMailer Error: " . $e->errorMessage() . (isset($mail) ? " | MailerInfo: " . $mail->ErrorInfo : ""));

    // Optionally, provide a user-friendly message and redirect for critical mail errors too
    echo "<script>alert('A critical error occurred while trying to send an email. Please contact support. Details: " . addslashes($e->errorMessage()) . "'); window.location.href = '/error-page.html';</script>";
    exit;

} catch (Exception $e) { // Catch all other general exceptions
    echo "<h3 style='color: red;'>A Critical Error Occurred:</h3>";
    echo "<p style='color: red;'><strong>Error Type:</strong> " . get_class($e) . "</p>";
    echo "<p style='color: red;'><strong>Error Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p style='color: red;'><strong>File:</strong> " . $e->getFile() . "</p>";
    echo "<p style='color: red;'><strong>Line:</strong> " . $e->getLine() . "</p>";
    
    // Log the full error for server-side debugging
    error_log("Critical Error: " . $e->getMessage() . " in " . $e->getFile() . " on line " . $e->getLine() . "\nStack Trace:\n" . $e->getTraceAsString());

    echo "<h4>Stack Trace:</h4>";
    echo "<pre style='color: red; font-size: 12px; border: 1px solid #ccc; padding: 10px; background-color: #f9f9f9;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";

    // User-friendly message and redirect
    echo "
    <script>
        alert('An unexpected error occurred during the process. Please try again later or contact support. Error: ".addslashes($e->getMessage())."');
        window.location.href = '/'; // Or a specific error page e.g., '/error-page.html'
    </script>
    ";
    exit;
}

// This part will not be reached if the try block completes successfully due to `exit;` after the redirect script,
// or if an exception is caught and `exit;` is called in the catch block.
echo "<hr>";
echo "<p><strong>Server Information (if script didn't exit earlier):</strong></p>";
echo "<ul>";
echo "<li>PHP Version: " . phpversion() . "</li>";
echo "<li>Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "</li>";
echo "<li>Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Unknown') . "</li>";
echo "<li>Script Name: " . ($_SERVER['SCRIPT_NAME'] ?? 'Unknown') . "</li>";
echo "</ul>";

?>