/*
habilitar los campos de un input  
*/


/*
let Efectiv = document.getElementById("Efectivo");
let pagoMovi = document.getElementById("pagoMovil1");
let pay = document.getElementsByClassName("pagoM");
let buy = document.getElementsByClassName("Efect");

Efectiv.addEventListener("click",activar);
function activar( ){
    Efect.classList.toggle("habilitar");
    pagoM.classList.toggle("deshabilitar");
}

pagoMovi.addEventListener("click",desactivar);

function desactivar(){
    Efect.classList.toggle("deshabilitar");
    pagoM.classList.toggle("habilitar");
}*/
let Efectiv = document.getElementById("Efectivo");
let pagoMovi = document.getElementById("pagoMovil1");

Efectiv.addEventListener("click",activar);
function activar( ){
    document.getElementById("nombreTitularE").disabled=false;
    document.getElementById("referenciaPagoE").disabled = false;
    document.getElementById("numeroTitularE").disabled = false;
    document.getElementById("nombreTitular").disabled=true;
    document.getElementById("numeroTitular").disabled = true;
    document.getElementById("referenciaPago").disabled = true;

}
pagoMovi.addEventListener("click",cambio);
function cambio( ){
    document.getElementById("nombreTitularE").disabled=true;
    document.getElementById("referenciaPagoE").disabled = true;
    document.getElementById("numeroTitularE").disabled = true;
    document.getElementById("nombreTitular").disabled=false;
    document.getElementById("numeroTitular").disabled = false;
    document.getElementById("referenciaPago").disabled = false;

}