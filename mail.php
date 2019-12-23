<?php
	$to = "nikita.volfer@gmail.com";
	$subject = "Sviter";
    $message = implode (" | ", $_POST );
    $headers = "From: info@sviter.kz\r\nReply-to: info@sviter.kz\r\nContent-type: text/plain; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);
	file_get_contents('https://api.telegram.org/bot876993138:AAFtqXVt6q9nBte8DRn9t67qVs1OhB6M5VY/sendMessage?chat_id=389818935&text=' . $message)
?>
<?php  echo 'test' ?>
