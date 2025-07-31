
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'championcricketleague@outlook.com';
    $mail->Password = 'Indu@1027!'; // Ensure this is correct
    $mail->SMTPSecure = 'ssl'; // or 'tls'
    $mail->Port = 465; // or 587

    $mail->setFrom('championcricketleague@outlook.com');
    $mail->addAddress('championcricketleague@outlook.com'); // Change to your email

    $mail->isHTML(true);
    $mail->Subject = 'Contact Enquiry';
    $mail->Body = '
    <h3 align="center"> Enquiry Form</h3>
        <table border="1" width="100%" cellpadding="5" cellspacing="5">
          <tr>
            <td width="30%"> Name</td>
            <td width="70%">'.$_POST["name"].'</td>
          </tr>
          <tr>
            <td width="30%"> Mobile</td>
            <td width="70%">'.$_POST["phone"].'</td>
          </tr>
          <tr>
            <td width="30%">Email</td>
            <td width="70%">'.$_POST["email"].'</td>
          </tr>
          <tr>
            <td width="30%">Message</td>
            
            <td width="70%">'.$_POST["message"].'</td>
          </tr>
          
        </table>
    ';

    $mail->send();
     echo
      "
      <script>
      alert('Contact Enquiry Sent Successfully');
      document.location.href = 'index.php';
      </script>
      ";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

