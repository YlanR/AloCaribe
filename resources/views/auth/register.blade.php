@include('templates.header',  ['modo' => 'Alo Caribe'])

<link rel="stylesheet" href="../../css/index.css">
   <link rel="stylesheet" href="../../css/register.css">
   <link rel="stylesheet" href="../fonts/style.css">
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
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="main-content-right login">
                @csrf

                    <div class="login-logo">
                        <img src="../../img/logo.png" alt="logo de la pag" class="login-logo-logo">
                    </div>
                    <div class="login-contents content-right">
                        <div class="login-content">
                            <input type="text" placeholder=" Nombre" name="name" id="director" value="{{ old('name') }}" class="login-director"> 

                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="login-content"> 
                            <input type="text" placeholder="Apellido" id="apellido" name="apellido" value="{{ old('apellido') }}" class="login-academy">
                            @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>  
                    <div class="login-contents content-left">
                        <div class="login-content"> 
                            <input type="num" placeholder="Cedula" id="number" name="cedula" value="{{ old('cedula') }}" class="login-number">

                            @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>  

                        <div class="login-content"> 
                            <input type="email" placeholder=" Email" id="email" name="email" value="{{ old('email') }}" class="login-email">

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
                            <input type="num" placeholder="Edad" name="edad" id="estado" value="{{ old('edad') }}" class="login-estado"> 

                            @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="login-content"> 
                            <input type="text" placeholder=" instagram" id="social-red" name="id_instagram" value="{{ old('instagram') }}" class="login-social-red">
                        </div>  
                    </div>
                    
                    <div class="login-contents content-left">
                        <div class="login-content"> 
                                <input id="password" type="password" placeholder=" Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

                        <div class="login-content">
                          
                                <input id="password-confirm" type="password" placeholder=" Confirmar contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
                    <!--subir logo -->
                    <label for="subir">subir logo de la academia </label>
                    <input type="file" name="foto" id="">

                    <!--boton-->
                    <button class="login-boton" type="submit">registrarse </button>

                </form>
            </div>
        </section>
        <section></section>

    </main>
    
    <script>
        Swal.fire(
            '¡Atención!',
            'Solo se pueden registrar los directores de academias o bailadores independientes.',
            'warning'
            )      
    </script>

    @include('templates.footer')
