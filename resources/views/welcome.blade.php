<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./fonts/style.css">
    <link rel="stylesheet" href="./css/plantillas/2.css">
    <title>HOME</title>
</head>
<body>
     <!---->
    <header>
         <!---->
    <nav class="navbar">
         <!---->
        <div id="navbar-logo">
            <a href="{ route('welcome') }">
                <img src="../img/logo-diminutivo.png" alt="logo de la empresa" class="navbar-logo-logo-diminutivo">
            </a>
        </div>
         <!---->
         <div class="navbar-content">
            <ul class="navbar-links">
                <li class="navbar-link"> 
                    <a href="#">COMPETICIÓN <span class="icon-play3" style="color: white ; "></span></a>
                </li>
                <li class="navbar-link"> 
                    <a href="#">REGLAS</a>
                </li>
                <li class="navbar-link"> 
                    <a href="#">CONTACTO</a>
                </li>
            </ul>
         <!---->
            <div id="navbar-botones" >
            <!--emoji que manda al inicio de sesión -->
                <a href="#">
                <span class="icon-user" style="color:white;"></span>
                </a>
            </div>
        </div>
    </nav>
    </header>

    <main>
        <section></section>
        <!--segunda plantilla -->
        <section class="plantilla2">
            <div class="plantilla2-content">
                <div class="plantilla2-content-pelotas">
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
                <div class="plantilla2-content-confeti"></div>
                <div class="plantilla2-content-nubes"></div>
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

    <footer>
        <section  id="footer-main" class="footer-main">
            <div class="footer-logo">
                <a href="{ {route('welcome') }}">
                <img src="../img/logo.png" alt="Logo simple de Rizo`s & Rey" id="footer-logo" class="footer-logo-logo">
                </a>
            </div>
            <div class="footer-texts">
                <div class="footer-social-media">
                    <p>SIGUENOS</p>
                    <div class="footer-social-media-content">
                            <a href="" class="footer-social-media-icon" target="_blank">
                                <span class="icon-envelop" style="color: white ;"></span>
                            </a>
                            <a href="" class="footer-social-media-icon" target="_blank">
                                <span class="icon-instagram" style="color: white ;"></span>
                            </a>
                    </div>
                </div>

                <ul class="footer-links">
                    <li class="footer-link"> 
                        <a href="#">REGLAMENTO</a>
                    </li>
                    <li class="footer-link"> 
                        <a href="#" style="margin:1rem;">CONTACTO</a>
                    </li>
                </ul>

            </div>

        </section>

        <section id="footer-copyright">
            <div class="footer-derechos-de-autor copyright">
                <p>
                    © 2023 Somos ALC Festival powered by Rizo’s & Rey / All rights reserved
                </p>
            </div>
        </section>
    </footer>
</body>
</html>