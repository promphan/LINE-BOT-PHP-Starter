<?php
$access_token = 'MSvu/u3ZJwxm2A8ovg+OMPAEIAqBR3a806AuMD/GAipOZ8KeDz8mD5YCdxs/UX/OcmDqM16Lzm9BlzlfXAFB8JA+VnCMbQe7K5UJvPFug2pPBaSoZlLbPPv9sPgQZ11x2JEa2KXeuEco45sykgVxtwdB04t89/1O/w1cDnyilFU=
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
