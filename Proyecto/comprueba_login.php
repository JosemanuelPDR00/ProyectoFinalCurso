<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar Usuario</title>
</head>
<body>
    <?php

    try{
        //CONEXION A TRAVÉS DE PDO
        $conexion='mysql:dbname=bbddProyecto;host=127.0.0.1';
        $user='root';
        $password='';

        $db=new PDO($conexion,$user,$password);

        //LA CONEXION UTILIZARÁ LOS SIGUIENTES ATRIBUTOS
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //INSTRUCCION SQL
        $sql="SELECT * FROM usuario WHERE USUARIO= :usuario AND CONTRASEÑA= :contra";

        //PREPARACION DE LA CONSULTA CON MARCADORES
        $resultado=$db->prepare($sql);

        //OBTENEMOS LOS VALORES INTRODUCIDOS EN LOS CAMPOS (*CON LAS DOS FUNCIONES ANTERIORES EVITAMOS LA INYECCION SQL*)
        $usuario=htmlentities(addslashes($_POST['usuario']));
        $contra=htmlentities(addslashes($_POST['contra']));

        //ENLAZAMOS LOS MARCADORES A LAS VARIABLES
        $resultado->bindValue(":usuario", $usuario);
        $resultado->bindValue(":contra", $contra);

        //EJECUTA LA INSTRUCCION SQL
        $resultado->execute();

        //COMPROBAMOS EL Nº DE REGISTROS ENCONTRADOS
        $numero_registro = $resultado->rowCount();

        //SI EL USUARIO EXISTE
        if($numero_registro!=0){
            
            //CREAMOS SESION
            session_start();
            
            $_SESSION["usuarioRegistrado"]=$_POST["usuario"];
            
            //ENTRAMOS AL INTERIOR DE NUESTRA PAGINA
            header("location:./paginaInicio.php");
        }else{
            //SI NO NOS MANDA A REGISTRARNOS YA QUE NO TENDRÍA NINGUNA CUENTA
            header("location:./registro.html");
        }

    }catch(Exception $e){
        //MENSAJE DE ERROR
        die("Error: ".$e->getMessage());
    }

    ?>
</body>
</html>