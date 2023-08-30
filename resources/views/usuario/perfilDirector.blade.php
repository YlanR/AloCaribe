    @include('templates.header',  ['modo' => 'Alo Caribe'])
    <link rel="stylesheet" href="../../css/perfildirector.css">
    <link rel="stylesheet" href="../../css/index.css">

<main>

   
    <body>
        <section class="main">
            <div class="main-content">
                <div class="perfil">
                    <div class="perfil-superior">
                        <div class="perfil-superior-foto"> 
                             <!--esta sección es dnd se llama los datos registrados para la foto-->
                             @if(Auth::user()->foto)
                             <img  class="foto_perfil" src="{{ asset('storage/').'/'. Auth::user()->foto }}" alt=""></div>
                             @else
                             <img  class="foto_perfil" src="../img/user.jpg" alt=""></div>
                            @endif
                        <div class="prefil-superior-texto"> 
                             <!--esta sección es dnd se llama los datos registrados-->
                            <h1>{{ $usuar->name }} {{ $usuar->apellido }}</h1>
                            <h4>C.I. {{ $usuar->cedula }}</h4>
                            <hr style="    margin: 0 0 20px 0;">
                        </div>
                    </div>
                    <div class="perfil-contenido">
                        <div class="perfil-contenido-textos">
                            <div class="perfil-contenido-texto">
                                <h5>Nombre:</h5>
                                <h5>Apellido:</h5>
                                <h5>Edad:</h5>
                                <h5>Cédula:</h5>
                            </div>
                            <div class="perfil-contenido-relleno">
                                <!--esta sección es dnd se llama los datos registrados para el usuario-->
                                <h5>{{ $usuar->name }}</h5>
                                <h5>{{ $usuar->apellido }}</h5>
                                <h5>{{ $usuar->edad }}</h5>
                                <h5>{{ $usuar->cedula }}</h5>
                            </div>
                        </div>
                        <div class="perfil-contenido-textos">
                            <div class="perfil-contenido-texto">
                                <h5>Instagram:</h5>
                                <h5>Email:</h5>
                                <h5>Academia:</h5>
                            </div>
                            <div class="perfil-contenido-relleno">
                                 <!--esta sección es dnd se llama los datos registrados para la academia-->
                                <h5>{{ $usuar->instagram }}</h5>
                                <h5>{{ $usuar->email }}</h5>

                                @if($academy == null)
                                @else
                                <h5>{{ $academy->name_academy }}</h5>
                                @endif
                            </div> 
                        </div>
                        <div class="perfil-boton"> 
                            <a href="{{ url('/perfilEdit/'.$usuar->id) }}" style="position: absolute;text-decoration: none;color: aliceblue;">Editar Usuario</a>
                        </div>
                    </div>
                    <div class="perfil-fondo">
                        <img src="../../img/3/Polygon.png" alt="" class="p00">
                        <img src="../../img/3/Polygon.png" alt="" class="p0">
                        <img src="../../img/3/Polygon.png" alt="" class="p01">
                        <img src="../../img/3/Polygon.png" alt="" class="p02">
                        <img src="../../img/3/Polygon.png" alt="" class="p03">
                        <img src="../../img/3/Polygon.png" alt="" class="p04">
                        <img src="../../img/3/Polygon.png" alt="" class="p05">
                        <img src="../../img/3/Polygon.png" alt="" class="p06">
                        <img src="../../img/3/Polygon.png" alt="" class="p07">
                        <img src="../../img/3/Polygon.png" alt="" class="p08">
                        <img src="../../img/3/Polygon.png" alt="" class="p09">
                        <img src="../../img/3/Polygon.png" alt="" class="p10">
                        <img src="../../img/3/Polygon.png" alt="" class="p11">
                        <img src="../../img/3/Polygon.png" alt="" class="p12">
                        <img src="../../img/3/Polygon.png" alt="" class="p13">
                    </div>
                    <img src="../../img/3/bachata1.png" alt=" imagen bailarines" class="perfil-fondo0">
                    <img src="../../img/logo.png" alt="logo" class="perfil-fondo1">
                    
                </div>
            </div>
        </section>
</main>

   
</body>
@include('templates.footer')
