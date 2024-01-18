<?php
    $to_mail = "arpitramoliya92@gmail.com";
    $subject = "Simple Email Test via PHP";
    $body    = "Hi, This is test email send by PHP script in 2020 from Google";
    $header  =  "From: arpitramoliya30756@gmail.com";

    if(mail($to_mail, $subject, $body, $header)) {
        echo "Email Successfully sent to $to_mail...";
    } else{
        echo "Email Sending failed.....";
    }
?>