<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

if (empty($name)) {
    header('location: index.php?nouser');
}

if (empty($phone)) {
    header('location: index.php?nophone');
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

    function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => "" ,
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $res = curl_exec($ch);
        curl_close($ch);

        return json_decode($res, true);
    }


    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);

    if ($result['success']) {
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
            $mail->Username   = '';                     // SMTP username
            $mail->Password   = '';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('liesbeth345@gmail.com', 'Liesbeth Engelberts');     // Add a recipient

            $body = "
                <h1>Inschrijving van ". $name . "</h1>
                <br>
                <br>
                <h2>Telefoon: ". $phone . "</h2>
                <br>
                <br>
                <h2>Email: ". $email . "</h2>
                <br>
                <br>
                <h3>Bericht: ". $message . "</h3>


            
            
            ";

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Inschrijving ' . $name;

            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            $mail->send();
            
            header('location: index.php');
            echo '<script>alert("Message sent")</script>';
        
        } catch (Exception $e) {
            echo "Message could not be sent";
        };
	
    } else {
        // If the CAPTCHA box wasn't checked
       echo '<script>alert("Error Message");</script>';
    }
}


?>
