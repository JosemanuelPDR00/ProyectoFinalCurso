<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITULO Y LOGO EN EL NAVEGADOR -->
    <title>FitPhysique</title>
    <link rel="icon" href="./img/logo.png">
    <!-- TIPOGRAFÍA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Exo&display=swap" rel="stylesheet">
    <!-- HOJA DE ESTILOS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ARCHIVO JAVASCRIPT -->
    <script src="./js/index.js"></script>
</head>
<body>
    <div class="contenedorGeneral">
        <div class="imagenRelleno imagenRellenoFormulario"></div>
        <div class="contenedorFormulario">
            <h1 class="titulo tituloRegistro">REGISTRO</h1>
            <div class="zonaFormulario zonaFormularioRegistro">
                <form action="../registroLogica.php" method="post" enctype="multipart/form-data" class="formulario">
                    <div class="contenedorAcogedor">
                        <div class="logoAcceso"></div>
                        <input type="text" name="nombre" id="nombre" placeholder="NOMBRE COMPLETO" class="input" pattern="[A-Z a-z]{2,30}" required maxlength="30"><!-- letras minusculas, mayusculas o espacio minimo 2 veces y maximo 30 -->
                        <input type="text" name="apellidos" id="apellidos" placeholder="APELLIDOS" class="input" pattern="[A-Z a-z]{2,30}" required maxlength="30">
                        <input type="text" name="peso" id="peso" placeholder="PESO EN KILOGRAMOS" class="input" pattern="(\d+(\.\d{1,2})?)" required maxlength="10">
                        <input type="text" name="altura" id="altura" placeholder="ALTURA EN METROS" class="input" pattern="(\d+(\.\d{1,2})?)" required maxlength="10">
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="input" required>
                        <input type="file" name="imagen" id="imagen" size="20" class="input" required>
                        <input type="email" name="correo" id="correo" class="input" placeholder="CORREO ELECTRONICO" pattern="[\w]{5,}@(gmail|hotmail).(com|es)" required maxlength="40"><!-- Caracteres alfanumericos y _ @ hotmail o gmail y dominio .es o .com -->
                        <input type="text" name="usuario" id="usuario" class="input" placeholder="USUARIO" pattern="[\w]{3,}" required maxlength="30"><!-- Nombre de usuario compuesto de caracteres alfanumericos con un minimo de 3 caracteres -->
                        <input type="password" name="contra" id="contra" class="input" placeholder="CONTRASEÑA" pattern="(?=.*[0-9]).*(?=.*[A-Z]).*(?=.*[a-z]).*(?=.*[!?=/&%$#@.]).*" required maxlength="40"> <!-- UNA MAYUSCULA, UNA MINUSCULA, UN NUMERO Y UN CARACTER ESPECIAL MINIMO PARA LA CONTRASEÑA -->
                        <div class="rowBotones">
                            <input type="button" value="VOLVER" class="botonVolver boton" onclick="volverIndex()"></input>
                            <input type="submit" value="REGISTRARME" class="botonRegistro boton"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>