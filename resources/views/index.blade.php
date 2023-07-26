    @include('templates.header',  ['modo' => 'Alo Caribe'])
    <main>
        <section>
            <div>
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </section>
        <!--segunda plantilla -->
        <section class="plantilla2">
            <div class="plantilla2-content">
                <div class="plantilla2-content-pelotas">
                <div class="plantilla2-content-nubes"></div>
                    <div class="pelotas-minusculas minuscula1"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-minusculas minuscula2"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-minusculas minuscula3"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-minusculas minuscula4"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-minusculas minuscula5"> 

                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-pequeñas pequeña1"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-pequeñas pequeña2"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-medianas mediana1"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-medianas mediana2"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-grandes grande1"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-grandes grande2"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-gigantes gigante1"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                    <div class="pelotas-gigantes gigante2"> 
                        <img src="../img/2/Ellipse12.png" alt="pelota morada">
                    </div>
                </div>
                <div class="plantilla2-content-confeti">
                    <div class="confeti-diseño confeti1">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti2">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti3">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti4">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti5">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti6">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti7">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti8">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                    <div class="confeti-diseño confeti9">
                        <img src="../img/2/sss.png" alt="confeti">
                    </div>
                </div>
                <div class ="plantilla2-content-logo">
                    <img src="../img/logo.png" alt="logo">
                </div>
                <div class="plantilla2-description">
                    <div class="plantilla2-encapsulado">
                        <div class="plantilla2-encapsulado-centrado cristal-content">
                            <div class="plantilla2-content-espacio"> </div>
                            <div class="plantilla2-content-top">
                                <h2>Competencia Nacional</h2>
                            </div>
                            <div class="plantilla2-content-mid">
                                <h1>Salsa Casino</h1>
                                <h1>BACHATA</h1>
                                @role('Operador')
                                <h1>Soy operador</h1>
                                @endrole
                                @role('Director')
                                <h1>Soy Director</h1>
                                @endrole
                            </div>
                            <div class="plantilla2-content-bot">
                                <p>14 de Octubre</p>
                                <p>2023</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section></section>
    </main>

    @include('templates.footer')
