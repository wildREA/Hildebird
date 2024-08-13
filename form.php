<?php
// PHPmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// lost connection
require_once "includes/classes/Exception.php";
require_once "includes/classes/PHPMailer.php";
require_once "includes/classes/SMTP.php";
// <===================> { ^ LIBRARY ^ ] <===================>
// initialization set
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// requirements
require_once("includes/db_config.php");
require_once("includes/functions.php");

$is_valid_input = false;

if (isset($_POST['email'])) {
    $email_to = "wildrealinit@gmail.com";
    $email_name = "wildREA";
    $email_subject = "Hildebird: New message!";
    if (
            !isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message'])
    ) {
        die('It looks like there is a problem with your form data.');
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $error_message = "";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message .= "Email address does not seem valid.<br>";
        $is_valid_input = true;
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Name does not seem valid.<br>';
        $is_valid_input = true;
    }
    if (strlen($message) < 2) {
        $error_message .= 'Message should not be less than 2 characters<br>';
        $is_valid_input = true;
    }
    if (strlen($error_message) > 0) {
        die($error_message);
    }

    // establishing connection to database
    $mysqli = db_connect($db_host, $db_user, $db_password, $db_name);
    $is_valid_input = true;

    if ($is_valid_input) {
        // save in database
        $stmt = $mysqli->prepare("INSERT INTO hildebird_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                //PHPMailer Object
                $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
                // Configure an SMTP
                $mail->isSMTP();
//              $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';
                $mail->Host = "smtp.gmail.com";
                $mail->Username = "wildrealinit@gmail.com";
                $mail->Password = "mcma flaz fapk ivlo"; // use app password | https://myaccount.google.com/apppasswords
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
                $mail->Port = 587; // TLS encryption
                $mail->isHTML(false);

                // sender information
                $mail->setFrom($email, $name);
                // primary recipients
                $mail->addAddress($email_to, $email_name);
                // address to which recipient will reply
                $mail->Subject = $email_subject;

                // email body construction
                $email_message = "Form details following:\n\n";
                $email_message .= "Name: " . clean_string($name) . "\n";
                $email_message .= "Email: " . clean_string($email) . "\n";
                $email_message .= "Message: " . clean_string($message) . "\n";
                $mail->Body = $email_message;

                if (!$mail->Send()) {
                    $error = 'Mail error: ' . $mail->ErrorInfo;
                    $is_valid_input = false;
                } else {
                    $error = 'Message sent!';
                    // closes prepare statement and database connection
                    $stmt->close();
                    $mysqli->close();
                    // redirect to contact page
                    header("Location: contact.php?status=success");
                    exit; // Make sure to call exit after redirect
                }
            } else {
                // redirect to contact page by error
                header("Location: contact.php?status=error");
                exit; // Make sure to call exit after redirect
            }
        }
    }
}