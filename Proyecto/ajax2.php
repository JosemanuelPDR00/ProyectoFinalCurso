<?php

$lb = $_POST['valor1'];
$kg = $_POST['valor2'];

$resultado = $lb/$kg;

echo round($resultado, 3);

?>