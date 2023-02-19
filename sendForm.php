<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email parameters
    $to = 'info@depov.be';
    $subject = 'Contact Form Submission';
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Email message
    $email_message = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        // Success message
        echo "<div class='text-center mb-3'>Uw bericht is verzonden!</div>";
    } else {
        // Error message
        echo "<div class='text-center text-danger mb-3'>Error sending message!</div>";
    }
}
?>
