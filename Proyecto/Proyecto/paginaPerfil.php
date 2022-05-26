<?php
    include "./templates/plantillaCabecera.inc.php";
    include "./templates/plantillaNav.inc.php";
?>

        <!-- CONTENIDO DE LA PAGINA -->
        <div class="contenedorContenido perfilContenido">
            <div class="apartadoPagina">
                PERFIL
            </div>

            <div class="contenedorPerfil">

                <?php 
                    require_once("./leerImagenBBDD.php");
                ?>

                <img src="/ProyectoFinalCurso/Proyecto/imagenesSubidas/<?php echo $ruta_img; ?>" alt="imagen" class="imagenPerfil">

                <div class="contenedorDatosPerfil">

                    <div class="contenedorPerfilNombre">
                        <p class="datosPerfilTitular">USUARIO</p>
                        <p class="datosPerfil"><?php echo $_SESSION['usuarioRegistrado'] ?></p>
                    </div>  
                      
                    <?php 
                        require_once("./consultaPerfil.php");
                    ?>
                </div>

            </div>

            <a href="./cerrarSesion.php"><div id="botonCierreSesion">CERRAR SESIÓN</div></a>

        </div>

<?php
    include "./templates/plantillaPiePagina.inc.php";
?>