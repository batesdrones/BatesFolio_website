<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];
    $to = 'andrew@batesfolio.net'; // Replace with your email address

    $subject = 'New message from contact form';
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

    $headers = "From: $email\r\n" .
        "Reply-To: $email\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Sorry, an error occurred. Please try again later.';
    }
}
?>
