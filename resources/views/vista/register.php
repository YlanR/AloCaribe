<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../css/index.css">
   <link rel="stylesheet" href="../../css/register.css">
   <link rel="stylesheet" href="../fonts/style.css">
    <title>Registro</title>
</head>
<body>
     <!---->
     <header>
         <!---->
    <nav class="navbar">
         <!---->
        <div id="navbar-logo">
            <a href="home.php">
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
                        <button class="left-boton" target="_blank">iniciar</button>
                    </a>
                    <a href="./register.php">
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
                    <div class="login-contents content-right">
                        <div class="login-content">
                            <input type="text" placeholder=" Director academia" name="director" id="director" class="login-director"> 
                        </div>

                        <div class="login-content"> 
                            <input type="text" placeholder="Nombre de la academia" id="academy" name="academy" class="login-academy">
                        </div>
                    </div>  
                    <div class="login-contents content-left">
                        <div class="login-content"> 
                            <input type="tel" placeholder="número de teléfono" id="number" name="number" class="login-number">
                        </div>  

                        <div class="login-content"> 
                            <input type="email" placeholder=" Email" id="email" name="email" class="login-email">
                        </div> 
                        
                    </div>
                    <div class="login-contents content-left">
                        <div class="login-content">
                            <!--aqui va un select-->
                            <input type="select" placeholder="seleccionar estado" name="estado" id="estado" class="login-estado"> 
                        </div>

                        <div class="login-content"> 
                            <input type="url" placeholder=" instagram de la academia" id="social-red" name="social-red" class="login-social-red">
                        </div>  
                    </div>
                    <div class="login-contents content-left">
                        <div class="login-content"> 
                            <input type="password" placeholder=" Contraseña" id="password" name="password" class="login-password">
                        </div>
                    
                        <div class="login-content"> 
                            <input type="password" placeholder="Confirmar Contraseña" id="password-conf" name="password-conf" class="login-password-conf">
                        </div>
                    </div>
                    <!--subir logo -->
                    <label for="subir">subir logo de la academia </label>
                    <button class="login-subir">subir</button>
                    <!--boton-->
                    <button class="login-boton" type="submit">registrarse </button>
                    <a href="">¿Olvido su contraseña?</a>
                </form>
            </div>
        </section>
        <section></section>

    </main>

    <footer>
        <section  id="footer-main" class="footer-main">
            <div class="footer-logo">
                <a href="home.php">
                <img src="../../img/logo.png" alt="Logo simple de Rizo`s & Rey" id="footer-logo" class="footer-logo-logo">
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