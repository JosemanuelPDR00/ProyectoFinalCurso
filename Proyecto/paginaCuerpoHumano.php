<?php
    include "./templates/plantillaCabecera.inc.php";
    include "./templates/plantillaNav.inc.php";
?>

        <!-- CONTENIDO DE LA PAGINA -->
        <div class="contenedorContenido">
            <div class="apartadoPagina">
                CUERPO HUMANO
            </div>

            <!-- CREACION DE MAPA EN LA IMAGEN DEL CUERPO POR DELANTE -->
            <map name="CuerpoHumanoDelantera">
                <area shape="poly" coords="59,165,86,154,85,225,56,303,34,303,43,244,52,210" href="#" alt="brazoIzquierdo" onclick="mostrar()" title="Brazo" class="cuerpoBrazo">
                <area shape="poly" coords="234,165,239,210,244,233,248,299,228,302,220,279,209,249,207,174,214,150" href="#" alt="brazoDerecho" onclick="mostrar()" title="Brazo" class="cuerpoBrazo">
                <area shape="poly" coords="60,159,71,118,123,98,178,100,225,116,235,137,254,161,210,128,179,120,120,119,91,132,75,159" href="#" alt="Hombro+Trapecio" onclick="mostrar()" title="Hombro+Trapecio" class="cuerpoHombro">
                <area shape="poly" coords="93,137,151,127,209,134,205,168,186,184,152,181,110,183,94,157" href="#" alt="Pectoral" onclick="mostrar()" title="Pectoral" class="cuerpoPectoral">
                <area shape="poly" coords="152,183,199,197,197,272,146,335,99,269,103,196" href="#" alt="Abdominales" onclick="mostrar()" title="Abdominales" class="cuerpoAbs">
                <area shape="poly" coords="145,347,200,298,210,362,199,470,193,594,168,593,161,522,147,398,138,509,137,590,115,590,97,505,97,505,95,427,84,346,100,287" href="#" alt="Piernas" onclick="mostrar()" title="Piernas" class="cuerpoPierna">
            </map>

            <!-- CREACION DE MAPA EN LA IMAGEN DEL CUERPO POR DETRAS -->
            <map name="CuerpoHumanoTrasera">
                <area shape="poly" coords="52,163,75,148,78,236,58,307,40,301,43,229" href="#" alt="BrazoIzquierdo" title="Brazo" onclick="mostrar()" class="cuerpoBrazo">
                <area shape="poly" coords="228,167,205,154,203,236,232,307,251,304,241,237" href="#" alt="BrazoDerecho" title="Brazo" onclick="mostrar()" class="cuerpoBrazo">
                <area shape="poly" coords="52,148,76,107,192,108,220,123,226,153,197,129,142,115,78,127" href="#" alt="Hombro+Trapecio" title="Hombro+Trapecio" onclick="mostrar()" class="cuerpoHombro">
                <area shape="poly" coords="83,132,198,131,187,229,90,233" href="#" alt="Espalda" title="Espalda" onclick="mostrar()" class="cuerpoEspalda">
                <area shape="poly" coords="88,288,194,285,203,367,188,472,187,545,147,548,141,403,123,553,87,542,79,376" href="#" alt="Piernas" title="Piernas" onclick="mostrar()" class="cuerpoPierna">
            </map>

            <!-- IMAGENES CUERPO HUMANO CON EL MAPA ASIGNADO -->
            <div class="contenedorCuerpoHumano">
                <img src="./img/CuerpoHumanoDelantera.png" alt="FALLA EL CUERPO HUMANO DELANTERA" class="imagenCuerpoHumano" usemap="#CuerpoHumanoDelantera">
                <img src="./img/CuerpoHumanoTrasera.png" alt="FALLA EL CUERPO HUMANO TRASERA" class="imagenCuerpoHumano" usemap="#CuerpoHumanoTrasera">
            </div>

            <!-- CONTENEDOR DE EJERCICIOS -->
            <div class="contenedorEjercicios">
                <!-- EJERCICIOS DE ABDOMINALES -->
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesBasicas.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES BASICAS</div>
                </div>
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesBicicleta.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES BICICLETA</div>
                </div>
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesConMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES RODILLAS AL PECHO</div>
                </div>
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesConRueda.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES CON RUEDA</div>
                </div>
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesEscalada.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES ESCALADA</div>
                </div>
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesLaterales.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES LATERALES</div>
                </div>
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesPatadas.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES LEVANTANDO PIERNAS</div>
                </div>
                <div class="ejercicio ocultoAbs">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/abdominales/AbdominalesSitUp.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ABDOMINALES SIT UPS</div>
                </div>

                <!-- EJERCICIOS DE BRAZO -->
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/AntebrazoConBarra.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ANTEBRAZO CON BARRA</div>
                </div>
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/AntebrazoSuperiorConMancuerna.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ANTEBRAZO SUPERIOR</div>
                </div>
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/BicepsConBarra.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">BICEPS CON BARRA</div>
                </div>
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/BicepsConMancuerna.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">BICEPS CON MANCUERNA</div>
                </div>
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/BicepsConMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">BICEPS EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/TricepsConBarra.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">TRICEPS CON BARRA</div>
                </div>
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/TricepsConMancuerna.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">TRICEPS CON MANCUERNA</div>
                </div>
                <div class="ejercicio ocultoBrazo">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/brazos/TricepsPesoCorporal.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">TRICEPS CON PESO CORPORAL</div>
                </div>

                <!-- EJERCICIOS DE ESPALDA -->
                <div class="ejercicio ocultoEspalda">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/espalda/Dominadas.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">DOMINADAS</div>
                </div>
                <div class="ejercicio ocultoEspalda">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/espalda/DorsalesAlternos.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">DORSALES ALTERNOS</div>
                </div>
                <div class="ejercicio ocultoEspalda">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/espalda/DorsalesConBarra.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">DORSALES CON BARRA</div>
                </div>
                <div class="ejercicio ocultoEspalda">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/espalda/EspaldaSubidaCuerda.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">SUBIDA A LA CUERDA</div>
                </div>
                <div class="ejercicio ocultoEspalda">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/espalda/RemoEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">REMO EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoEspalda">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/espalda/RemoEnMaquinaAgarreAbierto.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">REMO EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoEspalda">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/espalda/RetraccionEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">REMO A UNA MANO</div>
                </div>

                <!-- EJERCICIOS DE HOMBRO+TRAPECIO -->
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/HombroCentral.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">HOMBRO CENTRAL</div>
                </div>
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/HombroDelantero.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">HOMBRO DELANTERO</div>
                </div>
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/HombroEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">HOMBRO EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/HombroTrasero.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">HOMBRO TRASERO</div>
                </div>
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/HombroTraseroEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">HOMBRO TRASERO EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/TrapecioConBarra.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">TRAPECIO CON BARRA</div>
                </div>
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/TrapecioConMancuerna.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">TRAPECIO CON MANCUERNA</div>
                </div>
                <div class="ejercicio ocultoHombro">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/TrapecioConMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">TRAPECIO CON MAQUINA</div>
                </div>

                <!-- EJERCICIOS DE PECTORAL -->
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/pectorales/AperturaEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">APERTURA EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/pectorales/FlexionesPectoral.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">FLEXIONES DE PECHO</div>
                </div>
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/pectorales/Pectoral.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">PRESS DE BANCA</div>
                </div>
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/pectorales/PectoralSuperior.jpeg" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">PECTORAL SUPERIOR</div>
                </div>
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/hombro/HombroTraseroEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">PECTORAL CENTRAL</div>
                </div>
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/pectorales/PectoralConDisco.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">PECTORAL CON DISCO</div>
                </div>
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/pectorales/PectoralInferiorEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">PECTORAL INFERIOR EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoPecho">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/pectorales/Pullover.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">PULLOVER</div>
                </div>

                <!-- EJERCICIOS DE PIERNA -->
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/AductorSinMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ADUCTOR</div>
                </div>
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/GemeloEnMaquina.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">GEMELO EN MAQUINA</div>
                </div>
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/GemelosConMancuernasEnStep.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">GEMELO CON MANCUERNAS</div>
                </div>
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/GluteoExtensionTrasera.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">GLUTEO EXTENSION TRASERA</div>
                </div>
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/Isquios.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">ISQUIOS</div>
                </div>
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/PesoMuertoRomano.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">PESO MUERTO ROMANO</div>
                </div>
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/SentadillaConBarra.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">SENTADILLA CON BARRA</div>
                </div>
                <div class="ejercicio ocultoPiernas">
                    <div class="contenedorGifEjercicio"><img src="./img/gifEjercicios/piernas/TijerasConMancuernas.gif" alt="" class="gifEjercicio"></div>
                    <div class="nombreEjercicio">TIJERA CON MANCUERNAS</div>
                </div>


            </div><!-- CONTENEDOR DE EJERCICIOS -->

        </div><!-- CONTENIDO DE LA PAGINA -->
<?php
    include "./templates/plantillaPiePagina.inc.php";
?>