
        @include('templates.header',  ['modo' => 'Alo Caribe'])
        <link rel="stylesheet" href="../../css/registroAca.css">
        <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../fonts/style.css">


        <section class="main">
            <div class="main-content">  
                <div class="main-content-contenido">
                    <form action="{{ route('academia.store') }}" enctype="multipart/form-data" class="contenido-form" method="POST">
                        
                        @csrf
                        <div class="form-logo">
                            <img src="../../img/logo.png" alt=" logo " class="form-logo-logo">
                            <label for="">Registro de academía</label>
                        </div>
                        <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
                        <div class="form-contents">
                            <div class="form-content">
                                <input type="text" placeholder="nombre de la academia" id="nombreAcademia" name="name_academy" value="{{ old('name_academy') }}" class="nombreAcademia">
                            </div>
                            @error('name_academy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-content">
                                <input type="tel" placeholder="Número de celular" id="telefono" name="telefono" value="{{ old('telefono') }}" class="telefono">
                            </div>
                            @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-contents">
                            <div class="form-content">
                                <select name="estado" id="Estados" value="{{ old('estado') }}" class="Estados">
                                    <option selected disabled>Selecciona Estado</option>
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
                            @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-content">
                                <input type="text" placeholder="instagram de la academia" id="instagramAcademia" name="instagram" value="{{ old('instagram') }}" class="instagramAcademia">
                            </div>
                            @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <label for="" id="form-label">logo de la academia </label>
                        <input type="file" name="foto_academy" id="">
                        @error('foto_academy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <button class="form-boton" type="submit">Listo</button>
                    </form>
                </div>
            
        </div>
        
        </section>

        
    </main>

   
</body>

<script>
        Swal.fire(
            '¡Atención!',
            'Si eres bailador independiente, llena el formulario con tus datos personales.',
            'warning'
            )      
</script>

@include('templates.footer')
