<?php

$request = new HttpRequest();
$request->setUrl('https://body-mass-index-bmi-calculator.p.rapidapi.com/weight-category');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'bmi' => '19.2'
]);

$request->setHeaders([
	'X-RapidAPI-Host' => 'body-mass-index-bmi-calculator.p.rapidapi.com',
	'X-RapidAPI-Key' => '87051b1f9dmshb3a54a8a24cb7dap143986jsnc75a547ab72d'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}