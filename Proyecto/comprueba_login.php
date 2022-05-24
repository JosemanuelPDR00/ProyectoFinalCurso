<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprobarUsuario</title>
</head>
<body>
    <?php

    try{
        $base=new PDO("mysql:host=localhost; dbname:bbddProyecto", "root", "123456");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM usuario WHERE usuario= :usuario AND contra= :contra";

        $resultado=$base->prepare($sql);

        $usuario=htmlentities(addslashes($_POST['usuario']));
        $contra=htmlentities(addslashes($_POST['contra']));

        $resultado->bindValue(":usuario", $usuario);
        $resultado->bindValue(":contra", $contra);

        $resultado->execute();

        $numero_registro = $resultado->rowCount();

        if($numero_registro!=0){
            echo "<h2>Adelante!!</h2>";
        }else{
            header("location:registro.html");
        }

    }catch(Exception $e){
        die("Error: ".$e->getMessage());
    }

    ?>
</body>
</html>