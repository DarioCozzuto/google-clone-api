<?php

$curl = curl_init();

$query_search = $_POST['query_search']; 

curl_setopt_array($curl, [
	CURLOPT_URL => "http://api.serpstack.com/search?access_key=5830ddb2114e27d1837ce027975dd67c&query=".$query_search."",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$data = json_decode($response, TRUE); ?>

