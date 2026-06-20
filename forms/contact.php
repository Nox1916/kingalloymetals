<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "kingalloymetals16@gmail.com";

    $body = "
Name: $name

Email: $email

Subject: $subject

Message:
$message
";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "OK";
    } else {
        http_response_code(500);
        echo "Failed";
    }
}
?>