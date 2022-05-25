<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIERRE SESSION</title>
</head>
<body>
    <?php
    
    //Primero recuperamos la sesion
    session_start();
    
    //Destruimos los datos de session y la finalizamos
    session_destroy();
    
    //Lo devolvemos al inicio donde tiene que volver a pasar por el registro
    header("location:./index.php");
    
    ?>
</body>
</html>