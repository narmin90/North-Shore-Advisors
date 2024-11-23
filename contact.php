<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $emailFrom = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));
    
    $emailTo = "Narmin@northshoreadvisors.co";

    if (!$emailFrom) {
        echo "Invalid email address.";
        exit;
    }

    // Construct email headers
    $headers = "From: " . $emailFrom . "\r\n";
    $headers .= "Reply-To: " . $emailFrom . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Construct email body
    $txt = "You have received an e-mail from " . $name . " (" . $phone . ").\n\n";
    $txt .= "Message:\n" . $message;

    // Send the email
    if (mail($emailTo, $subject, $txt, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
