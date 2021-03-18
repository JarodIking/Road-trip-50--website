<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

if (empty($name)) {
    header('location: index.php?nouser');
}


if (empty($email)) {
    header('location: index.php?noemail');
}

if (empty($message)) {
    header('location: index.php?nomessage');
}

if (empty($name)) {
    header('location: index.php?nouser');
}



if(!isset($_POST['hidden']) || $_POST['hidden'] === ''){



    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'roadTripInschrijving@gmail.com';                     // SMTP username
        $mail->Password   = 'Awewf!3345gfFFvs3l';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('liesbeth345@gmail.com', 'Liesbeth Engelberts');     // Add a recipient

        $body = "
            <h1>Contact van ". $name . "</h1>
            <br>
            <br>
            <h2>Email: ". $email . "</h2>
            <br>
            <br>
            <h3>Bericht: ". $message . "</h3>


        
        
        ";

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact ' . $name;

        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        header('location: index.php');
        echo '<script>alert("Message sent")</script>';
      
    } catch (Exception $e) {
        echo "Message could not be sent";
    }
}
?>
