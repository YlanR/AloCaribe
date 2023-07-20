<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../css/index.css">
   <link rel="stylesheet" href="../../css/login.css">
   <link rel="stylesheet" href="../fonts/style.css">
    <title>Inicio de sesión</title>
</head>
<body>
     <!---->
     <header>
         <!---->
    <nav class="navbar">
         <!---->
        <div id="navbar-logo">
            <a href="{{ route('welcome') }}">
                <img src="../../img/logo-diminutivo.png" alt="logo de la empresa" class="navbar-logo-logo-diminutivo">
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
            <!--emoji que manda al inicio de sesión-->
                <a href="./vista/login.php">
                <span class="icon-user" style="color:white;"></span>
                </a>
            </div>
        </div>
    </nav>
    </header>
<!--contenido para el login-->
    <main>
        <!--contenido-->
        <section class="main">
            <div class="main-content">
                <!--contenido izquierdo-->
                <div class="main-content-left left">
                    <!--<img src="../../img/fondo  3.png" alt="">   -->

                    <div class="left-botones">
                    <a href="./login.php">
                        <button class="left-boton">iniciar</button>
                    </a>
                    <a href="./register.php" target="_blank">
                        <button  class="left-boton">registrarse</button>
                    </a>
                </div>
                </div>
                <!--botones de referencia-->
            
                <!--contenido derecho-->
                <form action="" class="main-content-right login">
                    <div class="login-logo">
                        <img src="../../img/logo.png" alt="logo de la pag" class="login-logo-logo">
                    </div>
                    <div class="login-content">
                        <input type="email" placeholder="Email" name="email" id="email" class="login-email">
                        <div class="login-icon"> 
                            <span class="icon-user" style="color:#B0B0B0;"></span>
                        </div>
                    </div>
                    <div class="login-content"> 
                        <input type="password" placeholder="Contraseña" id="password" name="password" class="login-password">
                        <div class="login-icon">
                            <span class="icon-lock" style="color:#B0B0B0;"></span>
                        </div>
                    </div>
                    <button class="login-boton" type="submit">Iniciar</button>
                    <a href="#" target="_blank">¿Olvido su contraseña?</a>
                </form>
            </div>
        </section>
        <section></section>
       
    </main>

    <footer>
        <section  id="footer-main" class="footer-main">
            <div class="footer-logo">
                <a href="{{ route('welcome') }}">
                <img src="../../img/logo.png" alt="Logo simple de Rizo`s & Rey" id="footer-logo" class="footer-logo-logo">
                </a>
            </div>
            <div class="footer-texts">
                <div class="footer-social-media">
                    <p>SIGUENOS</p>
                    <div class="footer-social-media-content">
                            <a href="#" class="footer-social-media-icon" target="_blank">
                                <span class="icon-envelop" style="color: white ;"></span>
                            </a>
                            <a href="#" class="footer-social-media-icon" target="_blank">
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