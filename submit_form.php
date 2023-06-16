<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set up email parameters
    $to = "andrew@batesfolio.net"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;
    
    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message! Will be in touch!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
