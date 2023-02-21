<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
    $to_email = "siebe@depov.be";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: website@depov.be";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
