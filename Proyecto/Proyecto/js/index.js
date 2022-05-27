//FUNCIONES DE DESPLAZAMIENTO PARA LOS BOTONES DE LA BARRA DE NAVEGACION
function meVoyARegistrar(){
    window.location = "./registro.php";
}
function volverIndex(){
    window.location = "./index.php";
}
function meVoyAInicio(){
    window.location = "./paginaInicio.php";
}
function meVoyAlCuerpoHumano(){
    window.location = "./paginaCuerpoHumano.php";
}
function meVoyATablas(){
    window.location = "./paginaTablas.php";
}
function meVoyAHerramientas(){
    window.location = "./paginaHerramientas.php";
}
function meVoyAPerfil(){
    window.location = "./paginaPerfil.php";
}

//EXPRESION REGULAR DE LA PAGINA DE INICIO(LOGIN)
function expReg(){
    //RECOGEMOS EL VALOR DEL CAMPO DE USUARIO
    var usuario = document.getElementById("usuario").value;
    //RECOGEMOS EL VALOR DEL CAMPO DE CONTRASEÑA
    var contra = document.getElementById("contra").value;


    let expresionRegularUsuario = /^[\w]{3,}$/ //El nombre del usuario, se compone caracteres alfanumericos con un minimo de 3 caraxteres.
    let expresionRegularContra = /^(?=.{0,}[0-9]).{0,}(?=.{0,}[A-Z]).{0,}(?=.{0,}[a-z]).{0,}(?=.{0,}[!?=/&%$#@.]).{0,}$/ //1 mayuscula inicial, minimo 5 letras mas, minimo un numero y opcional caracteres raros al final.


    if(expresionRegularUsuario.test(usuario) && expresionRegularContra.test(contra)){
            window.location = "./paginaInicio.php";
    }else if(expresionRegularUsuario.test(usuario)==false && expresionRegularContra.test(contra)==false){
        alert("USUARIO Y CONTRASEÑA INCORRECTOS");

    }else if(expresionRegularUsuario.test(usuario)==false){
        alert("La usuario no sigue el patron indicado.");

    }else if(expresionRegularContra.test(contra)==false){
        alert("La contraseña no sigue el patron indicado.");

    }
}

//-------------------------------------- CRONOMETRO ---------------------------------

//VARIABLES
let tiempoRef = Date.now()
let cronometrar=false
let acumulado = 0

//FUNCIONES PARA LOS BOTONES DEL CRONOMETRO
function iniciar(){
    cronometrar=true;
}
function pausar(){
    cronometrar=false;
}
function reiniciar(){
    acumulado=0;
}

//FUNCIONAMIENTO
setInterval(() => {
    let tiempo = document.getElementById("tiempo")
    if(cronometrar){
        acumulado += Date.now() - tiempoRef
    }
    tiempoRef = Date.now()
    tiempo.innerHTML = formatearMS(acumulado)
}, 1000/60);

function formatearMS(tiempo_ms){
    let MS = tiempo_ms % 1000
    let St = Math.floor(((tiempo_ms - MS)/1000))
    let S = St%60
    let M = Math.floor((St / 60) % 60)
    let H = Math.floor((St / 60 / 60))

    Number.prototype.ceros = function(n){
        return (this+"").padStart(n, 0)
    }
    return H.ceros(2)+":"+M.ceros(2)+":"+S.ceros(2)+"."+MS.ceros(3)
}

//FUNCIONAMIENTO EN AJAX PARA EL CONVERSOR DE UNIDADES

function Calcular(){
    //valor recogido
    kg = $('#kilosalibras').val();
    lb = $('#valor1KGenLibras').val();

    $.ajax({
        url: './ajax.php',
        type: 'post',
        data: {valor1:kg, valor2:lb},
        success: function(respuesta){
            $('#resultadoLB').html(respuesta);
        }
    })
}

function CalcularKG(){
    //valor recogido
    lb = $('#librasakilos').val();
    kg = $('#valor1LBenKilos').val();

    $.ajax({
        url: './ajax2.php',
        type: 'post',
        data: {valor1:lb, valor2:kg},
        success: function(respuesta2){
            $('#resultadoKG').html(respuesta2);
        }
    })
}



//------------------------------------ FUNCIONES DEL CUERPO HUMANO ------------------------------
function mostrar(){

    $(document).ready(function(){
        $('.cuerpoBrazo').on('click',function(){
            $('.ocultoBrazo').toggle();
        });
    });
    $(document).ready(function(){
        $('.cuerpoHombro').on('click',function(){
            $('.ocultoHombro').toggle();
        });
    });
    $(document).ready(function(){
        $('.cuerpoPectoral').on('click',function(){
            $('.ocultoPecho').toggle();
        });
    });
    $(document).ready(function(){
        $('.cuerpoEspalda').on('click',function(){
            $('.ocultoEspalda').toggle();
        });
    });
    $(document).ready(function(){
        $('.cuerpoAbs').on('click',function(){
            $('.ocultoAbs').toggle();
        });
    });
    $(document).ready(function(){
        $('.cuerpoPierna').on('click',function(){
            $('.ocultoPiernas').toggle();
        });
    });

}

/*----------- FUNCIONES APARTADO DE TABLAS ----------------------*/

function abrirVentana(){
    document.getElementById("contenedorFlotante").style.display="block";
}

function cerrarVentana(){
    document.getElementById("contenedorFlotante").style.display="none";
}
