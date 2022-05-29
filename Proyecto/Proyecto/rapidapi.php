<?php
	$peso=$_POST['valor1'];
	$altura=$_POST['valor2'];

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
			"X-RapidAPI-Key: ebc085339amsh25a0d0d19228425p1b2fe2jsndfe61a4f672f"
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
		echo($array->bmi);
	}

?>