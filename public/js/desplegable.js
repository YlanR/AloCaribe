//el llamado al contenedor del despliegue
//const despliegues= document.querySelectorAll('.contenidos .contenedor-contenido');
// activar eñ evento marcado en eel css
//despliegues.forEach((contenido) => {
   // contenido.addEventListener('click', (e)=> {
    //    e.currentTarget.classList.toggle('activa');
        //nombrando el contenido del despliegue
     //   const content = contenido.querySelector('.despliegue');
      //  const alturaRealDespliegue= content.scrollHeight;
//condicional para mostrar el contenido (dar click al boton para que muestre todo )
      //  if(content.style.maxHeight){
      //      content.style.maxHeight= alturaRealDespliegue + 'px';
      //  }
       // else{
      //      content.style.maxHeight=null;
      //  }

 //   });

//})
let plantControl=document.getElementById("plantControl");
let plantCont=document.getElementById("plantCont");

plantControl.addEventListener("click",ver);
function ver() {
    plantCont.classList.toggle("ver");
    plantControl.classList.toggle("giro");
}