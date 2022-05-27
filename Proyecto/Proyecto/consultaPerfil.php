<?php

    $usuarioRegistrado = $_SESSION['usuarioRegistrado'];

    try{

        // require("./templates/conexionBBDD.php");
        
        // $db = new Conexion();
        
        $db = new PDO('mysql:host=localhost; dbname=bbddProyecto', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER SET utf8");
        
        //INSTRUCCION PREPARADA SQL
        $sql="SELECT peso,altura FROM usuario WHERE USUARIO = ?";
        
        //PREPARACION DE LA CONSULTA
        $resultado=$db->prepare($sql);

        //EJECUTA LA INSTRUCCION SQL
        $resultado->execute(array($usuarioRegistrado));

        while($fila=$resultado->fetch()){
            echo "<div class='contenedorPerfilPeso'>
                        <p class='datosPerfilTitular'>PESO</p>
                        <p class='datosPerfil'>".
                            
                        $fila['peso']."
                        
                        </p>
                    </div>
                    
                    <div class='contenedorPerfilAltura'>
                        <p class='datosPerfilTitular'>ALTURA</p>
                        <p class='datosPerfil'>".
                            
                        $fila['altura']."
                            
                        </p>
                    </div>";
        }

        $resultado->closeCursor();

    }catch(Exception $e){
        //MENSAJE ERROR
        die("Error: ".$e->getMessage());
    }
        
?>