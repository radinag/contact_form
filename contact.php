<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'John Doe Website';
    $email_subject = 'New Message';
    $email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Message: $message.\n";

    $to = "you@you.com"; // insert your email address
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>