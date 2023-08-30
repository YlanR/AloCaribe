@include('templates.header',  ['modo' => 'Alo Caribe'])

    <main>
    <link rel="stylesheet" href="../../public/fonts/style.css">
    <link rel="stylesheet" href="../../css/contacto.css">

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

    @include('templates.footer')


