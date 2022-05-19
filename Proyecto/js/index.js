//FUNCIONES DE DESPLAZAMIENTO PARA LOS BOTONES DE LA BARRA DE NAVEGACION
function meVoyARegistrar(){
    window.location = "./registro.html";
}
function volverIndex(){
    window.location = "./index.html";
}
function meVoyAInicio(){
    window.location = "./paginaInicio.html";
}
function meVoyAlCuerpoHumano(){
    window.location = "./paginaCuerpoHumano.html";
}
function meVoyATablas(){
    window.location = "./paginaTablas.html";
}
function meVoyAHerramientas(){
    window.location = "./paginaHerramientas.html";
}
function meVoyAPerfil(){
    window.location = "./paginaPerfil.html";
}

//EXPRESION REGULAR DE LA PAGINA DE INICIO(LOGIN)
function expReg(){
    //RECOGEMOS EL VALOR DEL CAMPO DE USUARIO
    var usuario = document.getElementById("usuario").value;
    //RECOGEMOS EL VALOR DEL CAMPO DE CONTRASEÑA
    var contra = document.getElementById("contra").value;


    let expresionRegularUsuario = /^([A-Z][a-zA-Z]{5,}|[A-Z][a-zA-Z]{5,}[0-9]{1,})$/ //1 mayuscula inicial, seguido de 5 letras, y puede seguirle un numero o mas.
    let expresionRegularContra = /^[A-Z][a-zA-Z]{5,}[0-9]{1,}.{0,}$/ //1 mayuscula inicial, minimo 5 letras mas, minimo un numero y opcional caracteres raros al final.


    if(expresionRegularUsuario.test(usuario) && expresionRegularContra.test(contra)){
            window.location = "./paginaInicio.html";
    }else if(expresionRegularUsuario.test(usuario)==false && expresionRegularContra.test(contra)==false){
        alert("USUARIO Y CONTRASEÑA INCORRECTOS");

    }else if(expresionRegularUsuario.test(usuario)==false){
        alert("La usuario no sigue el patron indicado.");

    }else if(expresionRegularContra.test(contra)==false){
        alert("La contraseña no sigue el patron indicado.");

    }
}


// CRONOMETRO ---------------------------------

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