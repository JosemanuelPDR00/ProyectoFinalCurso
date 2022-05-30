<?php
    session_start();

    if(!isset($_SESSION["usuarioRegistrado"])){

        header("location:./index.php");

    }

    $titulo=$_POST['tituloTabla'];
    $descripcion=$_POST['descripcionTabla'];
    $usuario=$_SESSION["usuarioRegistrado"];


    //DATOS PARA LA CONEXION A LA BASE DE DATOS
    $db_host="localhost";
    $db_nombre="bbddProyecto";
    $db_usuario="root";
    $db_password="";
    //CONEXION 
    $conexion = mysqli_connect($db_host,$db_usuario,$db_password);
    //SI LA CONEXION DA ERROR, NOS SALIMOS
    if(mysqli_connect_errno()){
        echo "Fallo en la conexion";
        exit();
    }
    //SELECCION BBDD
    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
    //SELECCION DEL JUEGO DE CARACTERES
    mysqli_set_charset($conexion, "utf8");

    //CONSULTA SQL A REALIZAR
    $consulta = "INSERT INTO tablas(usuario, nombreTabla, descripcionTabla) VALUES ('$usuario','$titulo','$descripcion')";

    //RESULTADO SOBRE LA CONEXION A LA BASE DE DATOS INDICADA
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado==false){
        echo "Error en la consulta";
    }else{
        echo "Registro guardado";
        header("location:./paginaTablas.php");
    }