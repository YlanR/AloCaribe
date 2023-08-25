<?php 
//llamado a la conexión con el controlador para recibir los datos 
   // include("mostrarprueba.php");
?>

<!--no se dnd pondrás este code pero cuidado dnd lo pongas pq de ser dnd hay otro nav tendrás que ponerle a este una clase y ponerle los estilos que tiene este nav en esa clase para que no afecte a otrs-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="../../public/fonts/style.css">
    <style>
      nav{
    display: flex;
    max-width: 100%;
    margin: auto;
    font-size: 20px;
    margin-top: 50px;
    background-color: white;
    justify-content: right;
    height: 100%;
    align-items: center;
}
.menu-vertical{
    list-style: none;
    display: none;
    justify-content: right;
    background: blueviolet;
    border-radius: 5% 0 0 5%;
    padding: 0;
    height: 100%;
    text-align: center;
    
}
.menu-vertical-superior{
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    border-bottom: 1px solid white;
    color: white;
}
.menu-vertical-text h4 ,.menu-vertical-text h6{
    margin: 0;
} 
.menu-vertical-text h5{
    margin: 10px 0 0 0;
}
.menu-vertical-foto{
    margin: 10px;
}
.menu-vertical-foto img{
    height: 5rem;
}
.menu-vertical > li{
    margin: 20px 0;
}
.menu-vertical > li >a{
    display: block;
    padding: 15px 20px;
    color: white;
    text-decoration: none;
}
.menu-vertical > li:hover{
    background-color: #530D9385;
}
nav button{
color: white;
background: blueviolet;
border: none;
border-radius: 50% 0 0 50%;
padding: 15px;
cursor: pointer;
transition: 3s;
}
nav button:hover{

background: #E91E63;
}
.show{
display: block;
}
.rotar{ 
rotate: 180deg;
border-radius: 0% 50% 50% 0%;
}
    </style>
</head>
<body>
    <main>
        <section class="main">
            <div class="main-content">
                <nav>
                <button id="menu"> 
                    <span class="icon-previous2"></span>
                </button>
                    <ul class="menu-vertical" id="menuVertical">
                        <li>
                            <li>
                                <div class="menu-vertical-superior">
                                    <!--en este lado tienen que ser llamado los datos del usuario asi como su roll-->
                                    <div class="menu-vertical-text">
                                        <h5>rol</h5>
                                        <h4>Nombre y Apellido</h4>
                                        <h6>cedula</h6>
                                    </div>
                                    <div class="menu-vertical-foto"><img src="../../public/img/logo.png" alt=""></div>
                                </div>
                            </li>
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Validación de Ticket</a></li>
                            <li><a href="#">Tickets Validados</a></li>
                            <li><a href="#">Lista de Competidores</a></li>
                            
                        </li>
                    </ul>
                    
                </nav>
            </div>
        </section>

    </main>


</body>
<script>
    let menu=document.getElementById("menu");
    let menuVertical=document.getElementById("menuVertical");

    menu.addEventListener("click",desplegar);

    function desplegar(){
        menuVertical.classList.toggle("show");
        menu.classList.toggle("rotar");
    }
</script>

</html>

