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
            <a href="">
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
                    <a href="{{ url('/login') }}">
                        <button class="left-boton" target="_blank">iniciar</button>
                    </a>
                    <a href="{{ url('/register') }}">
                        <button  class="left-boton">registrarse</button>
                    </a>
                </div>
                </div>
                <!--botones de referencia-->
            
                <!--contenido derecho-->
                <form method="POST" action="{{ route('register') }}" class="main-content-right login">
                @csrf

                    <div class="login-logo">
                        <img src="../../img/logo.png" alt="logo de la pag" class="login-logo-logo">
                    </div>
                    <div class="login-contents content-right">
                        <div class="login-content">
                            <input type="text" placeholder=" Director academia" name="name" id="director" class="login-director"> 

                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="login-content"> 
                            <input type="text" placeholder="Apellido" id="Apellido" name="academy" class="login-academy">
                            @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>  
                    <div class="login-contents content-left">
                        <div class="login-content"> 
                            <input type="num" placeholder="Cedula" id="number" name="cedula" class="login-number">

                            @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>  

                        <div class="login-content"> 
                            <input type="email" placeholder=" Email" id="email" name="email" class="login-email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> 
                        
                    </div>
                    <div class="login-contents content-left">
                        <div class="login-content">
                            <!--aqui va un select-->
                            <input type="num" placeholder="Edad" name="edad" id="estado" class="login-estado"> 

                            @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="login-content"> 
                            <input type="url" placeholder=" instagram de la academia" id="social-red" name="id_instagram" class="login-social-red" value="0">
                        </div>  
                    </div>
                    <div class="login-contents content-left">
                        <div class="login-content"> 
                            <input type="password" placeholder=" Contraseña" id="password" name="password" class="login-password">
                        </div>
                    
                        <div class="login-content"> 
                            <input type="password" placeholder="Confirmar Contraseña" id="password-conf" name="password-conf" class="login-password-conf">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <!--subir logo -->
                    <label for="subir">Subir foto de perfil</label>
                    <button class="subir-foto-perfil">subir</button>
                    <!--boton-->
                    <button class="login-boton" type="submit">registrarse </button>
                    <a href="">¿Olvido su contraseña?</a>
                </form>
            </div>
        </section>
        <section></section>

    </main>

    @include('templates.footer')
