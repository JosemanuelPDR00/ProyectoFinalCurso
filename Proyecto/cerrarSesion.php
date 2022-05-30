<?php
    //Primero recuperamos la sesion
    session_start();
    
    //Destruimos los datos de session y la finalizamos
    session_destroy();
    
    //Lo devolvemos al inicio donde tiene que volver a pasar por el registro
    header("location:./index.php");
?>