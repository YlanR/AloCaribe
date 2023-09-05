let seleccionador = document.getElementById('seleccionador')
let seleccionadores1 = document.getElementById('seleccionadores1') 
let seleccionadores2 = document.getElementById('seleccionadores2') 
let seleccionadores3 = document.getElementById('seleccionadores3')  
let seleccionador1 = document.getElementById('seleccionador1')
let seleccionador2 = document.getElementById('seleccionador2')
//otros botones
let boton= document.getElementById("form-input")
let boton1= document.getElementById("form-input1")
let boton2= document.getElementById("form-input2")
//altura del seleccionador
let cambioAltura = document.getElementById('cambioAltura')
//margen del pago 
let moverMargen =document.getElementById('moverMargen')
//anuncio el evento 
        seleccionador.addEventListener('click',categoriaExtra);
        //para seleccionador 1
        seleccionador1.addEventListener('click',categoriaExtra1);
        //para seleccionador 2
        seleccionador2.addEventListener('click',categoriaExtra2);

function categoriaExtra(){
        seleccionadores1.classList.toggle('show');
        boton.classList.toggle('seleccionadores');
        cambioAltura.classList.toggle('altura1');
}
function categoriaExtra1(){
        seleccionadores2.classList.toggle('show');
        boton1.classList.toggle('seleccionadores');
        cambioAltura.classList.toggle('altura2');
        moverMargen.classList.toggle('mover1');
}
function categoriaExtra2(){
        seleccionadores3.classList.toggle('show');
        boton2.classList.toggle('seleccionadores');
        cambioAltura.classList.toggle('altura3');
        moverMargen.classList.toggle('mover2');
}

// ocultar y mostrar pago movil y efectivo 
let electronicCash= document.getElementById("electronicCash");
let cash= document.getElementById("cash");
let Efectivo= document.getElementById("Efectivo");
let pagoMovil= document.getElementById("pagoMovil");

let comprarAceptado =document.getElementById("botonTabla");
comprarAceptado.addEventListener("click",desplegar);
function desplegar(){
        electronicCash.classList.toggle("aparecer");
}


Efectivo.addEventListener("click",mostrar);
function mostrar (){
        cash.classList.toggle("aparecer");
        electronicCash.classList.toggle("desaparecer2");

}
let Efectivo1= document.getElementById("Efectivo1");
let pagoMovil1= document.getElementById("pagoMovil1");

pagoMovil1.addEventListener("click",cambio);
function cambio() {

        cash.classList.toggle("desaparecer1");
        electronicCash.classList.toggle("aparecer1");
}