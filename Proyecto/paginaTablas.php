<?php
    include "./templates/plantillaCabecera.inc.php";
    include "./templates/plantillaNav.inc.php";
?>

        <!-- CONTENIDO DE LA PAGINA -->
        <div class="contenedorContenido">
            <div class="apartadoPagina">
                TABLAS
            </div>

            <a href="javascript:abrirVentana()"><div id="añadirNuevaTabla"><i class="fa-solid fa-plus"></i></div></a>


            <div id="contenedorFlotante">

                <a href="javascript:cerrarVentana()"><div id="cerrar"><i class="fa-solid fa-xmark"></i></div></a>

                <p id="tituloNuevaTabla">NUEVA TABLA</p>

                <div id="contenedorFormularioTablas">
                    <form action="./insertarTablas.php" method="post">

                        <p class="titularesTablas">TITULO NUEVA TABLA:</p>
                            <input type="text" name="tituloTabla" id="tituloTabla">
                                
                        <p class="titularesTablas">DESCRIPCIÓN:</p>
                            <input type="text" name="descripcionTabla" id="tituloTabla">

                        <br>
                                
                        <input type="submit" value="GUARDAR TABLA" class="botonEnviarTabla">
                    </form>
                </div>
                
            </div>

            <div class='contenedorVisualizarTablas'>
                <?php
                    require_once("./consultaApartadoTablas.php");
                ?>
            </div>

            <div class="contenedorPaginacion">
                <?php
                /*-------------------PAGINACION---------------------------------*/

                    for($i=1;$i<=$total_paginas;$i++){

                        echo "<a class='paginacionContenido' href='?pagina=" .$i."'>".$i."</a>  ";

                    }
                
                ?>
            </div>





        </div>

<?php
    include "./templates/plantillaPiePagina.inc.php";
?>