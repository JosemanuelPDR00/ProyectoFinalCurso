<?php

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