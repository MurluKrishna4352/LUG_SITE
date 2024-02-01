<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'lugbpdc@dubai.bits-pilani.ac.in';
    $subject = 'New message from your website';
    $headers = "From: " . $email;
    $body = "You have received a new message from the user $name.\n".
            "Here is the message:\n$message";

    if(mail($to, $subject, $body, $headers)) {
        echo "Mail Sent!";
    } else {
        echo "Failed to send mail.";
    }
}
?>