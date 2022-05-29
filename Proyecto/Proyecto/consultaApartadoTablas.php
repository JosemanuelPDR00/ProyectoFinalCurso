<?php

    $usuarioRegistrado = $_SESSION['usuarioRegistrado'];

    try{


        //CONEXION A BASE DE DATOS CON PDO
        $db = new PDO('mysql:host=localhost; dbname=bbddProyecto', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER SET utf8");

        //NUMERO DE REGISTROS QUE QUEREMOS QUE MUESTRE
        $tamagno_paginas=3;

        //SI EL USUARIO HA CLICADO EN LA PAGINACION
        if(isset($_GET['pagina'])){
            //SI PULSA EN UNO ME MANTENGO EN LA PAGINA
            if($_GET['pagina']==1){
                header("Location: ./paginaTablas.php");
            }else{
                //SI PULSAMOS EN OTRA NUMERO, CAMBIAMOS DE PAGINA
                $pagina=$_GET['pagina'];
            }
        }else{
            //PAGINA EN LA QUE NOS ENCONTAMOS
            $pagina=1;
        }

        //VARIABLE QUE INDICA DESDE DONDE EMPEZAMOS A CONTAR EN LA PAGINACION
        $empezar_desde=($pagina-1)*$tamagno_paginas;

        
        //INSTRUCCION PREPARADA SQL
        $sql="SELECT nombreTabla,descripcionTabla FROM tablas WHERE USUARIO = '$usuarioRegistrado'";
        
        //PREPARACION DE LA CONSULTA
        $resultado=$db->prepare($sql);

        //EJECUTA LA INSTRUCCION SQL
        $resultado->execute(array($usuarioRegistrado));

        //NUMERO DE REGISTROS ALMACENADOS
        $numFilas=$resultado->rowCount();
        //NUMERO DE PAGINAS NECESARIAS PARA EL NUMERO DE REGISTROS QUE HAYA EN BBDD
        $total_paginas=ceil($numFilas/$tamagno_paginas);

        // //SALIDAS DE PRUEBA
        // echo "Numero de registros: ".$numFilas."<br>";
        // echo "Tamaño de pagina: ". $tamagno_paginas."<br>";
        // echo "mostrando pagina: ".$pagina." de ". $total_paginas . "<br>";

        

        $resultado->closeCursor();

        $sql_limite="SELECT * FROM tablas WHERE usuario = '$usuarioRegistrado' LIMIT $empezar_desde,$tamagno_paginas";

        //PREPARACION DE LA CONSULTA
        $resultado=$db->prepare($sql_limite);

        //EJECUTA LA INSTRUCCION SQL
        $resultado->execute(array());

        while($fila=$resultado->fetch()){

            echo   "<div class='contenedorInfoTabla'>
                        <div class='tituloInfoTabla'>".$fila['nombreTabla']."</div>
                        <div class='descripcionInfoTabla'>".$fila['descripcionTabla']."</div>
                    </div>";
        }

    }catch(Exception $e){
        //MENSAJE ERROR
        die("Error: ".$e->getMessage());
    }

?>