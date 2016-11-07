<?php
// Get the PHP helper library from twilio.com/docs/php/install
//require_once '/path/to/vendor/autoload.php'; // Loads the library
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC5403fd3dc6db39046894d83ab142394e";
$token = "1099960fe96109a7c9fb293ae69cc4a4";
$client = new Client($sid, $token);

$client->messages->create(
    "+919971803309",
    array(
        'from' => '+14698444876 ',
        'body' => "HI Ashu, Pran1av here",
        
    )
);