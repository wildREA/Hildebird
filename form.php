<?php
die("died too early"); // error with PHPmailer connection
// PHPmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// lost connection
require_once "includes/classes/Exception.php";
require_once "includes/classes/PHPMailer.php";
require_once "includes/classes/SMTP.php";
die("died too late");
// <===================> { ^ LIBRARY ^ ] <===================>

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

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
                // send email
                //PHPMailer Object
                $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
                // From email address and name
                $mail->From = $email;
                $mail->FromName = $name;
                // To address and name
                $mail->addAddress($email_to, $email_name);
                // Address to which recipient will reply
                $mail->addReplyTo("reply@yourdomain.com", "Reply");
                
                $mail->isHTML(false);
                $mail->Subject = $email_subject;

                try {
                    $mail->send();
                    echo "Message has been sent successfully";
                } catch (Exception $e) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }

//                if (IsSendmail) {
//                    var_dump("mail was sent to $email_to");
//                }
//            } else {
//                var_dump("no you dont");
////                header("Location: contact.php?status-error"); // no changes
            }

            $is_valid_input = true;

            // closes prepare statement
            $stmt->close();

            // closes database connection
            $mysqli->close();

            // post email
            if (isset($_GET["status"])) {
                switch ($_GET["status"]) {
                    case "success":
                        echo "<div class='alert alert-success'>Your message was sent successfully. Thank you!</div>";
                        break;
                    case "success":
                        echo "<div class='alert alert-warning'>Your message was saved, but failed to send email.</div>";
                        break;
                    case "no_changes":
                        echo "<div class='alert alert-alert'>No changes were made.</div>";
                        break;
                    case "success":
                        echo "<div class='alert alert-danger'>Invalid input. Please correct the errors and try again.</div>";
                        break;
                    default:
                        echo "<div class='alert alert-danger'>Please fill out the form first.</div>";
                        break;
                }
            }
            // redirect to form page (bootstrap)
            $is_valid_input = true;
        } else {
            // redirect to form page by error
            header("Location: form.php?status=invalid_input");
        }
    }

    $email_message = "Form details following:\n\n";
    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
}