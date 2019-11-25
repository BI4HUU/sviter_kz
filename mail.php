<?php

    $to = "be4huu@gmail.com";
    $subject = "Sviter";
    $message = implode (" | ", $_POST );
    $headers = "From: info@sviter.kz\r\nReply-to: info@sviter.kz\r\nContent-type: text/plain; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);

?> 
<?php  echo 'test' ?>