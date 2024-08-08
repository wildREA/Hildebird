<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("includes/db_config.php");
require_once("includes/functions.php");

$output = "";

if (isset($_POST['email'])) {

    $email_to = "wildrealinit@gmail.com";
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
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Name does not seem valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'Message should not be less than 2 characters<br>';
    }

    if (strlen($error_message) > 0) {
        die($error_message);
    }

    $mysqli = db_connect($db_host, $db_user, $db_password, $db_name);

    $stmt = $mysqli->prepare("INSERT INTO hildebird_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $output = "Message(s) has been successfully saved. <br> Message: ";
    } else {
        $output = "Failed to save your message.";
    }

    $stmt->close();

    $sql = "SELECT `id`, `name`, `email`, `message` FROM `hildebird_messages`";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $output .= $row->name . " - " . $row->email . " - " . $row->message . "<br>";
        }
    } else {
        $output = "No data found.";
    }

    $email_message = "Form details following:\n\n";
    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    // Uncomment the line below to send the email
    // @mail($email_to, $email_subject, $email_message, $headers);
}

echo $output;