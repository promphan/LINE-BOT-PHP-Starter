<?php
$access_token = 'cdR4qbjspZ6VBhx9Ji1Z/IZIqG/vOmNGX1HBK9SRtkixNZjbeItifORhUEcdh+8DcmDqM16Lzm9BlzlfXAFB8JA+VnCMbQe7K5UJvPFug2pVduBkLJ8zYxlBEGtoOugVvUjkY4yYkdiy9O3k4hh9lQdB04t89/1O/w1cDnyilFU=
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
