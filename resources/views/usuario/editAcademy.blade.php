@include('templates.header',  ['modo' => 'Alo Caribe'])
    <link rel="stylesheet" href="../../css/perfildirector.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/editar.css">
<main>

   
    <body>
        <section class="main">
            <div class="main-content">
                <div class="perfil">
                    <div class="perfil-superior">
                        <div class="perfil-superior-foto"> 
                             <!--esta sección es dnd se llama los datos registrados para la foto-->
                             @if($academy->foto_academy)
                             <img  class="foto_perfil" src="{{ asset('storage/').'/'. $academy->foto_academy }}" alt=""></div>
                             @else
                             <img  class="foto_perfil" src="../img/academia.png" alt=""></div>
                            @endif
                        <div class="prefil-superior-texto"> 
                             <!--esta sección es dnd se llama los datos registrados-->
                            <h1>{{ $academy->name_academy }}</h1>
                            <h4>@ {{ $instagram->name}}</h4>
                            <hr style="    margin: 0 0 20px 0;">
                        </div>
                    </div>

                    <div class="perfil-contenido">
                        <div class="perfil-contenido-textos">
                            <div class="perfil-contenido-texto">
                                <h5>Nombre Academia:</h5>
                                <h5>Director:</h5>
                                <h5>Telefono:</h5>
                            </div>
                    <form method="POST" action="{{ url('/actualizarAcademy/'.$usuar->id) }}" enctype="multipart/form-data" class="main-content-right login">
                    @csrf
                            <div class="perfil-contenido-relleno">
                                <!--esta sección es dnd se llama los datos registrados para el usuario-->
                                <input type="text" placeholder=" Nombre" name="name_academy" id="director" class="login-director" value="{{ $academy->name_academy }}"> 
                                <input type="text" placeholder="Apellido" id="apellido" name="director" class="login-academy" disabled value="{{ $usuar->name }} {{ $usuar->apellido }}">
                                <input type="num" placeholder="Cedula" id="number" name="telefono_academy" class="login-number" value="{{ $academy->telefono_academy }}">

                            </div>
                        </div>
                        <div class="perfil-contenido-textos">
                            <div class="perfil-contenido-texto">
                                <h5>Instagram:</h5>
                                <h5>Estado:</h5>
                            </div>
                            <div class="perfil-contenido-relleno">
                                 <!--esta sección es dnd se llama los datos registrados para la academia-->
                                 <input type="text" placeholder=" instagram" id="social-red" name="instagram_id" class="login-social-red" value="{{ $instagram->name }}" style=" margin: 10px 0;">
                                 <select name="estado" id="Estados" value="" class="Estados">
                                    <option value="" disabled>Selecciona Estado</option>
                                    <option selected value="{{ $academy->estado }}">{{ $academy->estado }}</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Anzoategui">Anzoátegui</option>
                                    <option value="Apure">Apure</option>
                                    <option value="Aragua">Aragua</option>
                                    <option value="Barinas">Barinas</option>
                                    <option value="Bolivar">Bolívar</option>
                                    <option value="Carabobo">Carabobo</option>
                                    <option value="Cojedes">Cojedes</option>
                                    <option value="Delta Amacuro">Delta Amacuro</option>
                                    <option value="Distrito Capital">Distrito Capital</option>
                                    <option value="Falcon">Falcón</option>
                                    <option value="Guarico">Guárico</option>
                                    <option value="La Guaira">La Guaira</option>
                                    <option value="Lara">Lara</option>
                                    <option value="Merida">Mérida</option>
                                    <option value="Miranda">Miranda</option>
                                    <option value="Monagas">Monagas</option>
                                    <option value="Nueva Esparta">Nueva Esparta</option>
                                    <option value="Portuguesa">Portuguesa</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Tachira">Táchira</option>
                                    <option value="Trujillo">Trujillo</option>
                                    <option value="Yaracuy">Yaracuy</option>
                                    <option value="Zulia">Zulia</option>
                                </select>
                                
                            </div> 
                        </div>

                        
                        <div class="perfil-boton"> 
                        <button type="submit">Guardar cambios</button>
                        <div class="atrasBoton">
                            <a href="{{ url('/perfilAcademia/'.Auth::user()->id)}}">Volver</a>
                        </div>
                        </div>
                    </form>

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
@section('scripts')
    @if( session('registrarAca') == 'ok')
        <script>
            Swal.fire({
                position: 'center-center',
                icon: 'success',
                title: 'Academia registrada con Exito!',
                showConfirmButton: false,
                timer: 1500
                })
        </script>
    @endif
@endsection

@include('templates.footer')
