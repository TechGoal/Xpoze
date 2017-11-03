<?php
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $to = "dhruvikn@gmail.com";
    $subject = "New Email Address for Mailing List";
    $headers = "From: $email\n";
    $message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

    Email Address: $email\n
    Name: $name\n
    Comment: $comment\n
    Phone Number: $phone\n";

    $user = "$email";
    $usersubject = "Thank You";
    $userheaders = "From: Xpoze Studios and Productions\n";
    $usermessage = "Thank you for contacting us! We'll revert back as soon as possible.";
    mail($to,$subject,$message,$headers);
    mail($user,$usersubject,$usermessage,$userheaders);

    header('Location: ./thankyou.html');
?>