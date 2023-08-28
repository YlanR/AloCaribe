<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="../../public/fonts/style.css">
    <style>
.main-content{
    display: flex;
    justify-content: center;
}
.content{
    display: flex;
    position: absolute;
    margin: 50px 25px;
    border: none;
    box-shadow: 10px 7px 35px 7px black;
    height: 84%;
    width: 84%;
    justify-content: space-between;
    align-items: center;
    border-radius: 69px;
}
    .content-contenido{
    display: grid;
}
.contenido-izquierdo{
    background-color: blue;
    opacity: 0.7;
    height: 100%;
    width: 28%;
    margin: 10px 40px 10px 90px;
    text-align: center;
}
.contenido-derecho{
    background-color: rebeccapurple;
    opacity: 0.8;
    height: 90%;
    width: 50%;
    margin: 20px 50px 15px 0px;
    border-radius: 55px;

}
.contactos{
    background-color: white;
    border: 2px solid blueviolet;
    margin: 20px;
    align-items: center;
    display: grid;
    justify-content: center;
}
.contactos span{
    font-size: 200%;
    color: violet;
}
.contenido-derecho h1{
    margin: 0;
}
.mapa{
    display: flex;
    justify-content: center;
}
.mapa img{
    width: 80%;
    height: 70%;
}
.mensajes{
    margin: 50px 25px;
    display: flex;
    justify-content: space-between;
}
.mensaje{
    display: flex;
    padding: 10px;
}
.mensaje-datos{
    display: grid;
    margin-right: 50px;
}
.mensaje-datos input{
    margin: 8px;
    border-radius:10px ;
    border: none;
}
.mensaje-datos button{
    margin: 12px 24px;
    border-radius: 10px;
    background-color: violet;
    color: white;
    border: none;
}
.mensaje-text{}

.mensaje-text textarea{
    border: none;
    border-radius: 7px;
}

@media (max-width:540.80px) {
    .content {
    display: flex;
    position: absolute;
    margin: 13px 25px;
    border: none;
    box-shadow: 0px 0px 38px -2px black;
    height: 84%;
    width: 84%;
    justify-content: space-between;
    align-items: center;
    border-radius: 40px;
    }

.contenido-derecho {
    background-color: rebeccapurple;
    opacity: 0.8;
    height: 90%;
    width: 46%;
    margin: 20px 24px 15px 0px;
    border-radius: 20px;
    position: relative;
    }
    .contenido-izquierdo h1{
        font-size: 10px;
    }
    .contactos{    background-color: white;
    border: 2px solid blueviolet;
    margin: 15px;
    align-items: center;
    display: grid;
    justify-content: center;}
    .contactos span{ font-size: 100%;}
    .contactos p{    font-size: 4px;}

    .mapa img{height: 3rem;}
    .contenido-derecho h1{font-size: 7px;
        margin: 4px; }

        .mensajes {
    margin: 5px 0px;
    display: flex;
    justify-content: space-between;
}
.mensaje {
    margin: 0;
    padding: 0;
}
.mensaje-datos{margin-right: 0px;}
.mensaje-text{
    width: 100%;
}
.mensaje-datos input {
    margin: 7px 3px;
    border-radius: 10px;
    border: none;
    padding: 0 1px;3
    height: 50%;
    width: 90%;
}
.mensaje-datos button {
    margin: 10px 14px 15px 14px;
    border-radius: 6px;
    background-color: violet;
    color: white;
    border: none;
}
.mensaje-text textarea {
    border: none;
    border-radius: 7px;
    margin: 0;
    position: absolute;
    width: 95px;
    height: 100px;
}
}

    </style>
</head>
<body>
    <main>
        <section class="main">
            <div class="main-content">
                <div class="content">
                    <div class="content-contenido contenido-izquierdo">
                        <h1>Contanto </h1>
                        <div class="contactos">
                            <span class="icon-mail"></span>
                            <p>alocaribedancefestival@gmail.com</p>
                        </div>
                        <div class="contactos">
                            <span class="icon-phone"></span>
                            <p>0424-1558755</p>
                        </div>
                        <div class="contactos">
                            <span class="icon-location2"></span>
                            <p>Terminal terrestre la guaira piso 1,
                                La Guaira 1161, La Guaira
                            </p>
                        </div>
                    </div>
                    <div class="content-contenido contenido-derecho">
                        <div class="mapa">
                            <img src="../../public/img/mapa.png" alt="">
                        </div>
                        <h1>¿Como podemos <strong style="color:violet;"> ayudarte?</strong></h1>
                        <div class="mensajes">
                            <form action="" class="mensaje">
                                <div class="mensaje-datos">
                                    <input type="text" placeholder="Nombre">
                                    <input type="text" placeholder="Email">
                                    <button>enviar</button>
                                </div>
                                <div class="mensaje-text">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


</body>
<script>

</script>

</html>

