<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://accuweatherstefan-skliarovv1.p.rapidapi.com/get24HoursConditionsByLocationKey",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "locationKey=pune",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: AccuWeatherstefan-skliarovV1.p.rapidapi.com",
		"X-RapidAPI-Key: e6a6dc5d35msh60a886ec6adba2bp122dbejsnf89760d99554",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}