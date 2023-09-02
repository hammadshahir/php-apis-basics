<?php

// Local or any url to get API
//$url = "http://localhost:8888/php-apis-basics/api/";

// URL from jsonplaceholder to display (get) data
$url = "https://jsonplaceholder.typicode.com/todos/1";

// ******* //
// The following piece of code will work ONLY if we are saving data through $_GET (more informaiton in api/save.php)

// URL to save file (send data) - as of now we will use localhost
$url = "http://localhost:8888/php/php-apis-basics/api/save.php?name=john&age=24";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// ****** //
// This code saves information through POST method.
// It will also work with file_get_contents('php://input')
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name=mary&age=50');
// An other way (Better Way) to send data is through JSON.
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name=mary&age=50');

// we can tell here to send us headers (even if they are empty to our response)

curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/plain'));


$data = curl_exec($ch);
//$data = file_get_contents($url);

echo "<pre>";
echo $data;

//echo "API data is showed here";
