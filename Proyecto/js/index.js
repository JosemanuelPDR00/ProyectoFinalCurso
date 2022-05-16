function meVoyARegistrar(){
    window.location = "./registro.html";
}

function volverInicio(){
    window.location = "./index.html";
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
    }else{
        alert("ALGO ESTA FALLANDO");
    }
}