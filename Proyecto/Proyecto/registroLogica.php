<?php
    //VARIABLES QUE RECOGEMOS DEL FORMULARIO
    $nombreUsuario = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNaccimiento = $_POST['fechaNacimiento'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contra'];

    //CIFRADO DE LA CONTRASEÑA
    $contraseña_cifrada=password_hash($contraseña, PASSWORD_DEFAULT, array("cost"=>12));



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
    $consulta = "INSERT INTO usuario(nombre, apellidos, fechaNac, peso, altura, correo, usuario, contraseña, imagen) VALUES ('$nombreUsuario','$apellidos','$fechaNaccimiento',0,0,'$correo','$usuario','$contraseña_cifrada','NULL')";

    //RESULTADO SOBRE LA CONEXION A LA BASE DE DATOS INDICADA
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado==false){
        echo "Error en la consulta";
    }else{
        echo "Registro guardado";
        header("location:./index.php");
    }








    //imagen
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tamaño_imagen = $_FILES['imagen']['size'];

    //SI SE CUMPLE EL TAMAÑO
    if($tamaño_imagen<=2000000){
        //SI SE CUMPLE EL FORMATO
        if($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif"){

            
            //RUTA DE LA CARPETA DESTINO DEL SERVIDOR DE IMAGENES SUBIDAS
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/ProyectoFinalCurso/Proyecto/imagenesSubidas/';
            
            //MOVEMOS DE LA CARPETA TEMPORAL LA IMAGEN HASTA LA CARPETA DESTINO + NOMBRE DE LA IMAGEN QUE ESTAMOS MOVIENDO
            move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
        }else{
            //MENSAJE DE FORMATO ERRONEO
            echo "El formato esperado es: .jpeg, .jpg, .png, .gif .";
        }
        
    }else{
        //MENSAJE DE TAMAÑO DEMASIADO GRANDE
        echo "El tamaño de la imagen es demasiado grande.";
    }



    //CONSULTA SQL A REALIZAR
    $sql = "UPDATE usuario SET imagen='$nombre_imagen' WHERE usuario='$usuario'";

    //RESULTADO SOBRE LA CONEXION A LA BASE DE DATOS INDICADA
    $resultado2 = mysqli_query($conexion, $sql);

?>