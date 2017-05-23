<?php
$access_token = 'USmKqZfRdc/6eVGL90a0T5+yKtSlfzGgWY0E32guD5TU9vPqlHlaEUU9TzJ4B16tTkL4qdoV5JjgSecsi47OHgZaQXhdwBubRQUhxg4w2pBwubiOqDp3f5JVS4UDJJy111VxMQGNdoiWUYWsJbsYVwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
