<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITULO E ICONO DEL NAVEGADOR -->
    <title>FitPhysique</title>
    <link rel="icon" href="./img/logo.png">
    <!-- HOJA DE ESTILO  -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ARCHIVO JAVASCRIPT -->
    <script src="./js/index.js"></script>
    <!-- TIPOGRAFÍA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Exo&display=swap" rel="stylesheet">
    <!-- ICONOS DE FONTAWESOME -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php
    //REANUDAMOS LA SESSION 
    session_start();

    if(!isset($_SESSION["usuarioRegistrado"])){

        header("location:./index.php");

    }
    
    ?>


    <!-- BARRA SUPERIOR DE NAVEGACION -->
    <div id="barraSuperior">
        <div class="logo"></div>
        <div class="apartadoNavegacion" onclick="meVoyAInicio()">INICIO</div>
        <div class="apartadoNavegacion" onclick="meVoyAlCuerpoHumano()">CUERPO HUMANO</div>
        <div class="apartadoNavegacion" onclick="meVoyATablas()">TABLAS</div>
        <div class="apartadoNavegacion" onclick="meVoyAHerramientas()">HERRAMIENTAS</div>
        <div class="apartadoNavegacion perfil" onclick="meVoyAPerfil()">PERFIL</div>
    </div>

        <!-- CHECKBOX INVISIBLE QUE ESTARÁ DELANTE PARA CLICAR SOBRE ÉL Y REALIZAR UNA FUNCIONALIDAD CON EL CSS -->
        <input type="checkbox" id="invisibleCheckbox">

        <!-- LINEAS DEL MENU HAMBURGUESA -->
        <div id="contenedorHamburguesa">
            <span class="lineaHamburguesa" id="linea1"></span>
            <span class="lineaHamburguesa" id="linea2"></span>
            <span class="lineaHamburguesa" id="linea3"></span>
        </div>

        <!-- APARTADOS QUE MOSTRAREMOS EN EL APARTADO DESPLEGABLE -->
        <nav id="barraDesplegable">
            <div class="logo"></div>
            <li class="apartados" onclick="meVoyAInicio()">INICIO</li>
            <li class="apartados" onclick="meVoyAlCuerpoHumano()">CUERPO HUMANO</li>
            <li class="apartados" onclick="meVoyATablas()">TABLAS</li>
            <li class="apartados" onclick="meVoyAHerramientas()">HERRAMIENTAS</li>
            <li class="apartados" onclick="meVoyAPerfil()">PERFIL</li>
        </nav>

        <!-- CONTENIDO DE LA PAGINA -->
        <div class="contenedorContenido">
            <!-- TITULO DE LA PAGINA -->
            <div class="apartadoPagina">   
            INICIO
            </div>

            <!-- APARTADO 1 -->
            <div class="contenedorInicio contenedor1">
                <div class="apartado">APARTADO 1</div>
                <div class="rowApartado">
                    <div class="imagenApartado imagenApartado1"></div>
                    <div class="columnaApartado">
                        <div class="tituloApartado">CUERPO HUMANO</div>
                        <div class="descripcionApartado">Seleccion en la que puedes ir seleccionando partes del cuerpo humano y te va mostrando los diferentes ejercicios posibles de cada musculo.</div>
                        <div class="botonApartado">IR</div>
                    </div>
                </div>
            </div>

            <!-- APARTADO 2 -->
            <div class="contenedorInicio contenedor2">
                <div class="apartado">APARTADO 2</div>
                <div class="rowApartado">
                    <div class="columnaApartado">
                        <div class="tituloApartado">TABLAS</div>
                        <div class="descripcionApartado">Crea tus tablas de entrenamientos, tendrás la opcion de realizar tu tabla de forma personalizada.</div>
                        <div class="botonApartado">IR</div>
                    </div>
                    <div class="imagenApartado imagenApartado2">
                        imagen
                    </div>
                </div>
            </div>

            <!-- APARTADO 3 -->
            <div class="contenedorInicio contenedor1">
                <div class="apartado">APARTADO 3</div>
                <div class="rowApartado">
                    <div class="imagenApartado imagenApartado3">
                    </div>
                    <div class="columnaApartado">
                        <div class="tituloApartado">HERRAMIENTAS</div>
                        <div class="descripcionApartado">En este apartado podeis encontrar algunas herramientas relacionadas con el deporte y los entrenamientos.</div>
                        <div class="botonApartado">IR</div>
                    </div>
                </div>
            </div>

        </div><!-- CIERRE CONTENIDO DE LA PAGINA -->
</body>
</html>