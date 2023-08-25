<!DOCTYPE html>
<html lang="es">
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
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../css/menu.css">
    
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

                <!-- @if(Auth::user())
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
                @endif -->

                @if(Auth::user())
                <li class="navbar-link">
                    <a href="{{url('academia/')}}/{{Auth::user()->id}}">
                        Academia
                    </a>
                </li>
                @endif

                <!-- <li class="navbar-link"> 
                        @if(Auth::user()) 
                        <p class="nombre">   </p>
                        @endif

                </li> -->
            </ul>
            @if(Auth::user()) 
            <button id="menu"> 
                    <span class="icon-previous2"></span>
                </button>
                @endif

            

            
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
    @if(Auth::user()) 
        <ul class="menu-vertical" id="menuVertical">
            <li>
                <li>
                    <div class="menu-vertical-superior">
                        <!--en este lado tienen que ser llamado los datos del usuario asi como su roll-->
                        <div class="menu-vertical-text">
                            <h5>@role('Operador')
                                Operador
                                @endrole
                                @role('Director')
                                Director
                                @endrole</h5>
                            <h4>{{ Auth::user()->name }} {{ Auth::user()->apellido }}</h4>
                            <h6>{{ Auth::user()->cedula }}</h6>
                        </div>
                        <div class="menu-vertical-foto"><img src="../../public/img/logo.png" alt=""></div>
                    </div>
                </li>
                <li><a href="{{url('perfil/')}}/{{Auth::user()->id}}" >Perfil</a></li>
                <li><a href="#">Validación de Ticket</a></li>
                <li><a href="#">Tickets Validados</a></li>
                <li><a href="{{ url('/listaCompetidores') }}">Lista de Competidores</a></li>
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesion') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form></li>
                
            </li>
        </ul>
    @endif
    </header>
    
    <script>
    let menu=document.getElementById("menu");
    let menuVertical=document.getElementById("menuVertical");

    menu.addEventListener("click",desplegar);

    function desplegar(){
        menuVertical.classList.toggle("show");
        menu.classList.toggle("rotar");
    }
</script>
