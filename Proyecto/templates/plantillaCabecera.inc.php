<?php
    //REANUDAMOS LA SESSION 
    session_start();

    if(!isset($_SESSION["usuarioRegistrado"])){

        header("location:./index.php");

    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITULO E ICONO DEL NAVEGADOR -->
    <title>FitPhysique</title>
    <link rel="icon" href="./img/logo.png">
    <!-- HOJA DE ESTILO  -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ARCHIVO JAVASCRIPT -->
    <script src="./js/index.js"></script>
    <!-- TIPOGRAFÍA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Exo&display=swap" rel="stylesheet">
    <!-- ICONOS DE FONTAWESOME -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- UTILIZACION DE AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>