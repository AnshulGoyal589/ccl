<?php
// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Include Google Sheets
require __DIR__ . '/vendor/autoload.php';
use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

try {
    // Google Sheets Configuration
    $client = new Google\Client();
    $client->setApplicationName('Champion Cricket League Registration');
    $client->setScopes([Google\Service\Sheets::SPREADSHEETS]);
    // $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');

    $service = new Google\Service\Sheets($client);
    $spreadsheetId = '1Xftm2YunRej0XbvGgKUOWAkC-QGTQqHFoDhvpMmEUAo';

    // Prepare registration data
    $regId = 'CCLREG' . date('YmdHis');
    $values = [
        [
            $regId,
            date('d-M-Y H:i:s'),
            $_POST['name'],
            $_POST['age'],
            $_POST['phone'],
            $_POST['email'],
            $_POST['speciality'],
            $_POST['state'],
            $_POST['city'],
            $_POST['c-code'] ?? 'N/A',
            // $_POST['transactionId'] ?? 'N/A'
        ]
    ];

    $body = new Google\Service\Sheets\ValueRange([
        'values' => $values
    ]);

    // Append data to Google Sheet
    $result = $service->spreadsheets_values->append(
        $spreadsheetId,
        'Sheet1!A:J', // Assuming your sheet is named 'Sheet1' and you want to append to columns A through J
        $body,
        ['valueInputOption' => 'RAW']
    );



    // Initialize PHPMailer (Commented out as per original code)
    // $mail = new PHPMailer(true);

    // // Server settings
    // $mail->isSMTP();
    // $mail->Host = 'smtp.hostinger.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = 'coscocricketleague9@gmail.com';
    // $mail->Password = 'Pass@#123';
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    // $mail->Port = 465;

    // // Recipients
    // $mail->setFrom('coscocricketleague9@gmail.com', 'Champion Cricket League');
    // $mail->addAddress('coscocricketleague9@gmail.com');

    // // Content
    // $mail->isHTML(true);
    // $mail->Subject = 'Cosco Registration Enquiry';
    // $mail->Body = '
    // <h3 align="center">Enquiry Form</h3>
    // <table border="1" width="100%" cellpadding="5" cellspacing="5">
    //     <tr>
    //         <td width="30%">Name</td>
    //         <td width="70%">'.htmlspecialchars($_POST["name"]).'</td>
    //     </tr>
    //     <tr>
    //         <td width="30%">Age</td>
    //         <td width="70%">'.htmlspecialchars($_POST["age"]).'</td>
    //     </tr>
    //     <tr>
    //         <td width="30%">Mobile</td>
    //         <td width="70%">'.htmlspecialchars($_POST["phone"]).'</td>
    //     </tr>
    //     <tr>
    //         <td width="30%">Email</td>
    //         <td width="70%">'.htmlspecialchars($_POST["email"]).'</td>
    //     </tr>
    //     <tr>
    //         <td width="30%">Specialty</td>
    //         <td width="70%">'.htmlspecialchars($_POST["speciality"]).'</td>
    //     </tr>
    //     <tr>
    //         <td width="30%">Coupon Code</td>
    //         <td width="70%">'.htmlspecialchars($_POST["c-code"] ?? "N/A").'</td> // Corrected duplicate key and used null coalescing
    //     </tr>
    //     <tr>
    //         <td width="30%">State</td>
    //         <td width="70%">'.htmlspecialchars($_POST["state"]).'</td>
    //     </tr>
    //     <tr>
    //         <td width="30%">City</td>
    //         <td width="70%">'.htmlspecialchars($_POST["city"]).'</td>
    //     </tr>
    // </table>'; // Removed duplicate "Coupon Code" row from HTML body as it was already present

    // // Plain text alternative
    // $mail->AltBody = "Registration Details:\n\n" .
    //     "Name: " . $_POST["name"] . "\n" .
    //     "Age: " . $_POST["age"] . "\n" .
    //     "Mobile: " . $_POST["phone"] . "\n" .
    //     "Email: " . $_POST["email"] . "\n" .
    //     "Specialty: " . $_POST["speciality"] . "\n" .
    //     // "Transaction ID: " . $_POST["transactionId"] . "\n" .
    //     "Coupon Code: " . ($_POST["c-code"] ?? "N/A") . "\n" . // Used null coalescing
    //     "State: " . $_POST["state"] . "\n" .
    //     "City: " . $_POST["city"] . "\n"; // Removed duplicate "Coupon Code" from AltBody

    // // Send email
    // $mail->send();

    // Success response
    echo "
    <script>
    alert('Registration Enquiry Sent Successfully');
    document.location.href = '/';
    </script>
    ";

} catch (Exception $e) {
    // Error handling
    $errorMessage = "An error occurred: " . $e->getMessage();
    // The $mail variable might not be defined if the error occurs before PHPMailer initialization
    // So, we check if it's set and if ErrorInfo property exists before trying to access it.
    // if (isset($mail) && property_exists($mail, 'ErrorInfo')) {
    //     $errorMessage .= "\nMailer Error: " . $mail->ErrorInfo;
    // }
    // Since PHPMailer is commented out, the $mail->ErrorInfo part is not relevant for now.
    // If you uncomment PHPMailer, ensure $mail is defined before this check.
    error_log("Error in registration script: " . $errorMessage); // Log error for server-side debugging
    echo "
    <script>
    alert('An error occurred during registration. Please try again later. Error: ".addslashes($e->getMessage())."');
    document.location.href = '/'; // Or a specific error page
    </script>
    ";
}
?>