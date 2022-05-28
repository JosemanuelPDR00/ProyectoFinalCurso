<?php

$peso=$_GET['peso'];
$altura=$_GET['altura'];

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://body-mass-index-bmi-calculator.p.rapidapi.com/metric?weight=$peso&height=$altura",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: body-mass-index-bmi-calculator.p.rapidapi.com",
		"X-RapidAPI-Key: 5ec84b7c12mshf8ced472ae46b03p144a48jsn588bec71c5e7"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
//CREAMOS UN ARRAY A PARTIR DEL JSON
$array = json_decode($response);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo "<div id='resultadoIBM'>".$array->bmi."</div>";
}

?>