<?php

$composer require (nexmo/client) ;
$basic  = new \Nexmo\Client\Credentials\Basic(cb928c7f(Master),zjaLkqEVy28SEzTE);
$client = new \Nexmo\Client($basic);


try {
    $message = $client->message()->send([
        'to' => TO_NUMBER,
        'from' => 'Acme Inc',
        'text' => 'A text message sent using the Nexmo SMS API'
    ]);
    $response = $message->getResponseData();
    if($response['messages'][0]['status'] == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
    }
} catch (Exception $e) {
    echo "The message was not sent. Error: " . $e->getMessage() . "\n";
}




?>