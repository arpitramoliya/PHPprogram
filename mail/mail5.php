<?php

$to = "leedonniee@example.com";
$subject = "Hello, World!";
$message = "This is a test email sent from PHP.";
$headers = "From: arpitramoliya30756@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}

?>
