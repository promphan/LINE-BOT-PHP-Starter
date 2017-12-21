<?php
$access_token = 'cliSkcUd9yFy3wl+uflX5QjTpHiyuK/PkpDWxhLz7bF4RoxYR9dibtxSW1RX1LglfT5cihOIB86kx3cg5SaW9Su7R249Z+E0CuACCalYwSDINqrTDk8KErYSkiyhrGbtSmf+g5gJDQbqs+5yG27bYQdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
