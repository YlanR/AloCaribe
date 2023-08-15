<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./fonts/style.css">
    <link rel="stylesheet" href="./css/plantillas/6.css">
    <link rel="stylesheet" href="./css/plantillas/5.css">
    <link rel="stylesheet" href="./css/plantillas/4.css">
    <link rel="stylesheet" href="./css/plantillas/3.css">
    <link rel="stylesheet" href="./css/plantillas/2.css">
    <link rel="stylesheet" href="./css/plantillas/1.css">
    <title>{{ $modo }}</title>
</head>
<body>
     <!---->
    <header>
         <!---->
    <nav class="navbar">
         <!---->
        <div id="navbar-logo">
            <a href="{{ url('/') }}">
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

                @if(Auth::user())
                <li class="navbar-link">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                </li>
                @endif

                @if(Auth::user())
                <li class="navbar-link">
                    <a href="{{url('academia/')}}/{{Auth::user()->id}}">
                        Academia
                    </a>
                </li>
                @endif


                <li class="navbar-link"> 
                        @if(Auth::user()) 
                        <p class="nombre"> {{ Auth::user()->name }} {{ Auth::user()->apellido }} </p>
                        @endif

                </li>
            </ul>
         <!---->
        @if(!Auth::user())
            <div id="navbar-botones" >
            <!--emoji que manda al inicio de sesión -->
                <a href="{{ url('/login') }}">
                <span class="icon-user" style="color:white;"></span>
                </a>
            </div>
        @else
          
            <li class="navbar-link foto_header-cuadro"> 
                        <a class="" href="#"> <img  class="foto_header" src="{{ asset('storage/').'/'. Auth::user()->foto }}" alt=""></a>
            </li>
        @endif    
        </div>
    </nav>
    </header>
