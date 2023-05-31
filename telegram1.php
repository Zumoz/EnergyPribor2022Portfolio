<?php

$name = $_POST['con_name'];
$lastname = $_POST['user_lastname'];
$email = $_POST['con_email'];
$message = $_POST['con_message'];
$token = "1272919286:AAFRPx95POF6dMi0ydC0MLsQbqIFXBZq4j8";
$chat_id = "-455722247";
$arr = array(
	'Имя: ' => $name,
	
	'Email: ' => $email,
	'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("http://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	header('Location: index.html');
} else {
	echo "Error";
}
?>

