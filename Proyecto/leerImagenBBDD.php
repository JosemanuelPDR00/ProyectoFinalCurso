<?php

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

    $consulta="SELECT imagen FROM usuario WHERE usuario='".$_SESSION['usuarioRegistrado']."'";
    
    $resultado=mysqli_query($conexion,$consulta);

    while($fila = mysqli_fetch_array($resultado)){

        $ruta_img=$fila["imagen"];

    }

?>