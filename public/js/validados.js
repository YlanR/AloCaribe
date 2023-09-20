let botonFlecha=document.getElementById("botonFlecha");
let tablaDatas =document.getElementById("tablaDatas");
let bord=document.getElementById("bord");

botonFlecha.addEventListener("click",most)

function most(){
    tablaDatas.classList.toggle("visual");
    botonFlecha.classList.toggle("grado");
    bord.classList.toggle("bordeob");
}