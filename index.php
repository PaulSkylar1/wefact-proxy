<?php
$api_url = 'https://api.mijnwefact.nl/v2/';
$api_key = 'c7d471a8e10707630b836495759f8a38';

$postdata = array(
    'controller' => 'pricequote',
    'action'     => 'list'
);

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept: application/json",
    "apikey: $api_key"
]);

$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
?>