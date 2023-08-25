<!--no se dnd pondrás este code pero cuidado dnd lo pongas pq de ser dnd hay otro nav tendrás que ponerle a este una clase y ponerle los estilos que tiene este nav en esa clase para que no afecte a otrs-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../fonts/style.css">
    <style>
      
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