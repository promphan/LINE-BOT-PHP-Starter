<?php
$access_token = 'zeGBrpY/hGuhti1FgrGD4zVRmnBlg78BqrhWjhZP20PQPcSv0ahDbsJkYn28D9RucmDqM16Lzm9BlzlfXAFB8JA+VnCMbQe7K5UJvPFug2oqOwNDA+xoA+IPrIAwV9wqeCxIKzGG6NRp8tbSciGW3wdB04t89/1O/w1cDnyilFU=';

curl -v -X POST https://api.line.me/v2/bot/message/reply \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {ACCESS_TOKEN}' \
-d '{
    "replyToken":"nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
    "messages":[
        {
            "type":"text",
            "text":"Hello, user"
        },
        {
            "type":"text",
            "text":"May I help you?"
        }
    ]
}'

			curl -v -X POST https://api.line.me/v2/bot/message/multicast \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {ACCESS_TOKEN}' \
-d '{
    "to": ["U4af4980629...","U0c229f96c4..."],
    "messages":[
        {
            "type":"text",
            "text":"Hello, world1"
        },
        {
            "type":"text",
            "text":"Hello, world2"
        }
    ]
}'
	$post = json_encode($data);
	$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
