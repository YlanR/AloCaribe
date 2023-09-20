
//para los tickets a validar o validacion de tickets

let flechaBoton=document.getElementById("flechaBoton");
let datosTabla=document.getElementById("datosTabla");
let bordeo=document.getElementById("bordeo");

flechaBoton.addEventListener("click",see);
function see (){
    datosTabla.classList.toggle("visual");
    flechaBoton.classList.toggle("grado");
    bordeo.classList.toggle("bordeob");
}

let botonPM = document.getElementById("botonPM");
let pgMVL = document.getElementById("pgMVL");

botonPM.addEventListener("click",saw)
function saw(){
    botonPM.classList.toggle("grado");
    pgMVL.classList.toggle("visual");

}