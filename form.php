<?php

var_dump($_POST);

if (isset($_POST['email'])) {

    $email_to = "wildrealinit@gmail.com";
    $email_subject = "Hildebird: New message!";

    // validating expected data exists
    if (
            !isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message'])
    ) {
        problem('It looks like there is a problem with your form data.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    $error_message = "";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email address does not seem valid..<br>";
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Name does not seem valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'Message should not be less than 2 characters<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    } {
        // save to database
        // send to email
    }

    $email_message = "Form details following:\n\n";

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // creates email headers
    $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}
?>