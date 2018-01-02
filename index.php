<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('LineBot');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV["cdR4qbjspZ6VBhx9Ji1Z/IZIqG/vOmNGX1HBK9SRtkixNZjbeItifORhUEcdh+8DcmDqM16Lzm9BlzlfXAFB8JA+VnCMbQe7K5UJvPFug2pVduBkLJ8zYxlBEGtoOugVvUjkY4yYkdiy9O3k4hh9lQdB04t89/1O/w1cDnyilFU"]);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV["a7e37199507737199a7b3374b0f89e1f"]]);

$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
try {
  $events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);
} catch(\LINE\LINEBot\Exception\InvalidSignatureException $e) {
  error_log('parseEventRequest failed. InvalidSignatureException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownEventTypeException $e) {
  error_log('parseEventRequest failed. UnknownEventTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownMessageTypeException $e) {
  error_log('parseEventRequest failed. UnknownMessageTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\InvalidEventRequestException $e) {
  error_log('parseEventRequest failed. InvalidEventRequestException => '.var_export($e, true));
}
<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('LineBot');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV["cdR4qbjspZ6VBhx9Ji1Z/IZIqG/vOmNGX1HBK9SRtkixNZjbeItifORhUEcdh+8DcmDqM16Lzm9BlzlfXAFB8JA+VnCMbQe7K5UJvPFug2pVduBkLJ8zYxlBEGtoOugVvUjkY4yYkdiy9O3k4hh9lQdB04t89/1O/w1cDnyilFU"]);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV["a7e37199507737199a7b3374b0f89e1f"]]);

$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
try {
  $events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);
} catch(\LINE\LINEBot\Exception\InvalidSignatureException $e) {
  error_log('parseEventRequest failed. InvalidSignatureException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownEventTypeException $e) {
  error_log('parseEventRequest failed. UnknownEventTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownMessageTypeException $e) {
  error_log('parseEventRequest failed. UnknownMessageTypeException => '.var_export($e, true));
} catch(\LINE\LINEBot\Exception\InvalidEventRequestException $e) {
  error_log('parseEventRequest failed. InvalidEventRequestException => '.var_export($e, true));
}

foreach ($events as $event) {

  // Postback Event
  if (($event instanceof \LINE\LINEBot\Event\PostbackEvent)) {
    $logger->info('Postback message has come');
    continue;
  }

  // Location Event
  if  ($event instanceof LINE\LINEBot\Event\MessageEvent\LocationMessage) {
    $logger->info("location -> ".$event->getLatitude().",".$event->getLongitude());
    continue;
  }
  
  // Message Event = TextMessage
  if (($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage)) {
    // get message text
    $messageText=strtolower(trim($event->getText()));
    
  }

}  
