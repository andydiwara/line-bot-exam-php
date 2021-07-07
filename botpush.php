<?php



require "vendor/autoload.php";

$access_token = 'AZJzeJjpbPlRBZIMOAY0Ue46dCPgsS+XjyypT5QBN6Y0KC8maFZfwmJXZQrkDtoWHQF/CxLMeZe7SWVPhH4nS/igQPH9N1RrUWQ9Ztyn8i16Em5RuMYXyoCZ1+SkABvW6eiY2kvCbjEn/8FvISchugdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c3606ca52499ae9c87190c402215eae2';

$pushID = 'U46199542083b6bad1f8923f25a39b664';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







