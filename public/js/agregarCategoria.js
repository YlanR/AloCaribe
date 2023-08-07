
function copiar(){
        var contenido= document.getElementById("seleccionadorCategorias").innerHTML;

        var temp=document.createElement("div");
        temp.innerHTML=contenido;
        document.body.appendChild(temp);
}