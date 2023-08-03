<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.main-content{
    margin-top:20px;
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-gap: 10px;
grid-auto-rows: minmax(100px, auto);
justify-content:space-between;
}
.left {
    grid-column: 1;
    grid-row: 1;
    background: blue;
    margin: 0 0 0 10px;
}
.right {
    grid-column: 2 ;
    grid-row: 1;
    background:red;
    margin: 0 15px 0 135px;
    height: 85vh;
    width: auto;

}




.ficha-contenido{    

    width: 100%;
    height: 31rem;
}

.ficha-contenido-encapsulado{

    background-size: cover;
    background-color: white;
}
.ficha-contenido-encapsulado-centro{
    position:absolute;
    width: 55%;
    height: 100%;
    border: 2px solid ;

 
    text-align: center;
    justify-content: center;
    background-color: #b0b0b010;
    border-radius: 0 3rem 3rem 3rem;
    box-shadow: 0rem 3rem 1rem #b0b0b040;

    backdrop-filter: blur(0.4rem);
}

    </style>
</head>
<body>
    <main>
        <!--sección principal-->
    <section class="main">
        <!--contenido principal sepadado en 2 columnas-->
        <div class="main-content">
            <!--contenido de la columna izquierda /la ficha y el pago -->
            <div class="main-content-izquierda left">
                <div class="main-content-izquierda-ficha ficha">
                    <div class="ficha-logo">
                        <img src="" alt="">
                    </div>
                    <div class="ficha-contenido">
                        <div class="ficha-contenido-encapsulado">
                            <div class="ficha-contenido-encapsulado-centro">
                                <h3></h3>
                                <!--formulario donde se registran los datos-->
                                <form action="" id="" class="" method="POST">
                                    <div>
                                        <div><input type="text" placeholder=""></div>
                                        <div><input type="text" placeholder=""></div>
                                        <div><input type="text" placeholder=""></div>
                                        <div><input type="text" placeholder=""></div>
                                    </div>
                                    <div>
                                        <div> 
                                            <select name="" id=""></select>
                                        </div>
                                        <div> 
                                            <select name="" id=""></select>
                                        </div>
                                        <div> <input type="checkbox"></div>
                                        <div> <input type="checkbox"></div>
                                        <div> <input type="checkbox"></div>
                                        <div> <input type="checkbox"></div>
                                    </div>
                                    <div></div>
                                    <div></div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="main-content-izquierda-pago"></div>
            </div>
            <!---->
            <div class="main-content-derecha right">
                <div></div>
            </div>
        </div>
    </section>
</main>
</body>
</html>