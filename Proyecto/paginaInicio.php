<?php
    include "./templates/plantillaCabecera.inc.php";
    include "./templates/plantillaNav.inc.php";
?>

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
                        <div class="botonApartado" onclick="meVoyAlCuerpoHumano()">IR</div>
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
                        <div class="botonApartado" onclick="meVoyATablas()">IR</div>
                    </div>
                    <div class="imagenApartado imagenApartado2"></div>
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
                        <div class="botonApartado" onclick="meVoyAHerramientas()">IR</div>
                    </div>
                </div>
            </div>

        </div><!-- CIERRE CONTENIDO DE LA PAGINA -->

<?php
    include "./templates/plantillaPiePagina.inc.php";
?>