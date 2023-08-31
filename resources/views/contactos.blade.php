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
                            <iframe class="contact__iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1960.8552531817334!2d-66.93147361278534!3d10.601792060567368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5d0a3de7e3d5%3A0xf55324fc3200f970!2sSal%C3%B3n%20de%20eventos%20VIP%20la%20guaira!5e0!3m2!1ses-419!2sve!4v1693427266940!5m2!1ses-419!2sve"></iframe>
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


