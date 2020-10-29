
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'jarodiking17@gmail.com';                     // SMTP username
    $mail->Password   = 'Liesbeth345';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('jarodiking17@gmail.com', 'Mailer');
    $mail->addAddress('deathhounddutch@gmail.com', 'Joe User');     // Add a recipient

    $body = "<p><strong>Hello</strong> this is my first email with phpmailer</p>";

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';

    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>











<html>
    <head>
        <link rel='stylesheet' href='scriptes/css.css'>
        <script src='scriptes/js.js'></script>
    </head>
    <body>

    <div class="background-image">
    </div>

    <div class='reg-container'>
        <div class='inputField'>
            name
            <br>
            <input type="text">
        </div>
        <div class='inputField'>
            phone
            <br>
            <input type="text">
        </div>
        <div class='inputField'>
            email
            <br>
            <input type="text">
        </div>
        <div class='inputField'>
            message
            <br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>



    </div>



    </body>
</html>