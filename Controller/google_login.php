<?php
require_once '../vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('6582319807-pegsdi4op6prug9n5msitsiqda2o2c1r.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost:3000/Controller/google_callback.php');
$client->addScope("email");
$client->addScope("profile");

$login_url = $client->createAuthUrl();
header('Location: ' . $login_url);
