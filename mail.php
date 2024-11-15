<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "narmin.al.shaibani@gmail.com";
    $headers = "From: " . $email;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>