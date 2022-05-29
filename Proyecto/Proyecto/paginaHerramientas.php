<?php
    include "./templates/plantillaCabecera.inc.php";
    include "./templates/plantillaNav.inc.php";
?>

        <!-- AQUI VA EL CONTENIDO DE LA PAGINA -->
        <div class="contenedorContenido">
            <div class="apartadoPagina">HERRAMIENTAS</div>

            <div class="marco">
                CRONOMETRO
                <div class="tiempo" id="tiempo">00:00:00.000</div>
                <div class="botones">
                    <div class="btn" onclick="iniciar()"><i class="fa-solid fa-play"></i></div>
                    <div class="btn" onclick="pausar()"><i class="fa-solid fa-pause"></i></div>
                    <div class="btn" onclick="reiniciar()"><i class="fa-solid fa-rotate-right"></i></div>
                </div>
            </div>

            <div class="contenedorConversorUnidades">

                    <h4 class="titulilloConversor">TRASPASO DE KILOGRAMOS A LIBRAS</h4>
                    <div class="cajaKilosALibras cajonConversion">
                        <input type="number" name="kilosalibras" id="kilosalibras" placeholder="INTRODUCE KILOGRAMOS" class="unidadesIntro"><br>

                        <input type="hidden" value="2.20462" id="valor1KGenLibras">

                        <input type="button" value="CALCULAR" onclick="Calcular()" id="botonCalcular" class="botonCalculoAJAX"><br>
                        <div id="resultadoLB">0</div>
                    </div>

                    <br><br>

                    <h4 class="titulilloConversor">TRASPASO DE LIBRAS A KILOGRAMOS</h4>
                    <div class="cajaLibrasAKilos cajonConversion">

                        <input type="number" name="librasakilos" id="librasakilos" placeholder="INTRODUCE LIBRAS" class="unidadesIntro"><br>

                        <input type="hidden" value="2.20462" id="valor1LBenKilos">

                        <input type="button" value="CALCULAR" onclick="CalcularKG()" id="botonCalcularKG" class="botonCalculoAJAX"><br>
                        <div id="resultadoKG">0</div>
                    </div>

            </div>

            <div class="contenedorIBM">
                <form onsubmit="return false" class="formularioIBM">
                    <h4 id="tituloIBM">Indice de Masa Corporal</h4>
                    <p>Peso:</p>
                    <input type="text" name="pesoIBM" id="pesoIBM" pattern="[0-9]{1,3}(\,[0-9]{1,2})?" placeholder="PESO EN KILOGRAMOS">
                    <p>Altura:</p>
                    <input type="text" name="alturaIBM" id="alturaIBM" pattern="[0-9]{1,3}(\,[0-9]{1,2})?" placeholder="ALTURA EN METROS">
                    <input type="submit" value="Enviar" name="enviarIBM" class="botonCalculoAJAX" onclick="CalcularIBM()">
                </form>
                <div id="resultadoIBM">0</div>
            </div>

        </div>

<?php
    include "./templates/plantillaPiePagina.inc.php";
?>