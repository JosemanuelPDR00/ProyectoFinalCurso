<?php

    try{
        //OBTENEMOS LOS VALORES INTRODUCIDOS EN LOS CAMPOS (*CON LAS DOS FUNCIONES ANTERIORES EVITAMOS LA INYECCION SQL*)
        $usuario=htmlentities(addslashes($_POST['usuario']));
        $contra=htmlentities(addslashes($_POST['contra']));
        
        //COMPROBAREMOS SI EL LOGIN EXISTE O NO EN LA BASE DE DATOS
        $contador=0;
        

        //CONEXION A TRAVÉS DE PDO
        $conexion='mysql:dbname=bbddProyecto;host=127.0.0.1';
        $user='root';
        $password='';
        $db=new PDO($conexion,$user,$password);

        //LA CONEXION UTILIZARÁ LOS SIGUIENTES ATRIBUTOS
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //INSTRUCCION SQL
        $sql="SELECT * FROM usuario WHERE USUARIO= :usuario /*AND CONTRASEÑA= :contra*/";

        //PREPARACION Y EJECUCION DE LA CONSULTA CON MARCADORES
        $resultado=$db->prepare($sql);
        $resultado->execute(array(":usuario"=>$usuario));


        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            if(password_verify($contra, $registro['contraseña'])){
                $contador++;
            }
        }
        if($contador>0){
            //CREAMOS SESION
            session_start();
            
            $_SESSION["usuarioRegistrado"]=$_POST["usuario"];
            
            //ENTRAMOS AL INTERIOR DE NUESTRA PAGINA
            header("location:./paginaInicio.php");
        }else{
            //SI NO NOS MANDA A REGISTRARNOS YA QUE NO TENDRÍA NINGUNA CUENTA
            header("location:./registro.php");
        }


    }catch(Exception $e){
        //MENSAJE DE ERROR
        die("Error: ".$e->getMessage());
    }

?>