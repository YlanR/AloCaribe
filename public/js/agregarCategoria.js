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