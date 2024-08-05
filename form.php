<?php
// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Basic validation
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "All fields are required.";
    exit;
}

// Sanitize and validate email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
}

// Process the data (e.g., save to a database or send an email)
// Example: send an email
$to = 'your-email@example.com';
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";
mail($to, $subject, $mailBody, $headers);

// Provide feedback to the user
echo "Thank you for your message. We will get back to you soon.";
?>
