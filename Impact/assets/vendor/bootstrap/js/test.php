<?php
// Recipient email address
$to = "recipient@example.com";

// Subject of the email
$subject = "Hello from PHP";

// Message body
$message = "This is a test email sent from PHP.";

// Additional headers (optional)
$headers = "From: your_email@example.com\r\n";
$headers .= "Reply-To: your_email@example.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>