<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $email_subject = "PORTFOLIO EMAIL"
    $email_body = 
        "User Name: $name.\n"
        "User Email: $email.\n"
        "User Message: $message.\n";

$to = "tiaowillis2@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");    
}

          
?>