<?php



require "vendor/autoload.php";

$access_token = 'Y3O5E8HcuGG7LNWdqDZpWEjsJifpXyi8SniNr6upK6U=';

$channelSecret = 'c3606ca52499ae9c87190c402215eae2';

$pushID = 'U46199542083b6bad1f8923f25a39b664';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







