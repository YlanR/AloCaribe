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
            <a href="{{ url('/') }}">
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
                        <button class="left-boton iniciar">iniciar</button>
                    </a>
                    <a href="{{ url('/register') }}">
                        <button  class="left-boton registrar">registrarse</button>
                    </a>
                </div>
                </div>
                <!--botones de referencia-->
            
                <!--contenido derecho-->
                <form method="POST" action="{{ route('login') }}" class="main-content-right login">
                @csrf
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    <div class="login-logo">
                        <img src="../../img/logo.png" alt="logo de la pag" class="login-logo-logo">
                    </div>
                    <div class="login-content">
                        <input type="email" placeholder="Email" name="email" id="email" class="login-email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="login-icon"> 
                            <span class="icon-user" style="color:#B0B0B0;"></span>
                        </div>
                    </div>

                    <div class="login-content"> 
                        <input type="password" placeholder="Contraseña" id="password" name="password" class="login-password" required autocomplete="current-password">
                        <div class="login-icon">
                            <span class="icon-lock" style="color:#B0B0B0;"></span>
                        </div>
                    </div>
                    <button class="login-boton" type="submit">Iniciar</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </form>
            </div>
        </section>
        <section></section>
       
    </main>

    @include('templates.footer')
