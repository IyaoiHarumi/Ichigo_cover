<?php

header('Content-Type: application/json');

$jsonFile = 'https://cdn.jsdelivr.net/gh/IyaoiHarumi/Ichigo_cover/random_quote/haiku.json';
$jsonData = file_get_contents($jsonFile);
$quotes = json_decode($jsonData, true);

$randomQuote = $quotes[array_rand($quotes)];

echo json_encode($randomQuote);

?>
