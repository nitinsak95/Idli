<?php

// Copy your client id and secret from Google developer console

$clientId = '935052334293-kgluv0l2vqje19nt68dln8r6bnf11dr2.apps.googleusercontent.com';
$clientSecret = 'r-q4xFthFIYn9blUIbsxDioR';
$redirectUrl = 'http://localhost/googlea';


// -----------------------------------------------------------------------------
// DO NOT EDIT BELOW THIS LINE
// -----------------------------------------------------------------------------


require_once 'src/Google_Client.php';

session_start();

$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->setScopes(array('https://spreadsheets.google.com/feeds'));


if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    print_r(json_decode($client->getAccessToken(), true));
    exit;
}

print '<a href="' . $client->createAuthUrl() . '">Authenticate</a>';
