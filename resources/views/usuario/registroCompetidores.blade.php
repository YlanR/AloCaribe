
@include('templates.header',  ['modo' => 'Alo Caribe'])
<link rel="stylesheet" href="../../css/registroCompe.css">
    <!--<script src="../../js/agregarCategoria.js"></script>-->
        <!--sección principal-->
    <section class="main">
        <!--contenido principal sepadado en 2 columnas-->
        <div class="main-content">
            <!--contenido de la columna izquierda /la ficha y el pago -->
            <div class="main-content-izquierda left">
                <h2></h2>
                <div class="main-content-izquierda-ficha ficha">
                    
                    <div class="ficha-contenido">
                    <div class="ficha-logo">
                        <img src="" alt="">
                    </div>
                        <div class="ficha-contenido-encapsulado">
                            <div class="ficha-contenido-encapsulado-centro" id ="cambioAltura">
                                <h3 id="tituloficha"> Ficha de competidor</h3>
                                
                                <!--formulario donde se registran los datos-->
                                <form action="" id="formularioregistro" class="ficha-form form" enctype="multipart/form-data" method="POST">
                                @csrf
                                    <div class="form-inputs" id="form-inputs">

                                        <input type="hidden" name="academy_id" id="idAcademy" value="{{ $academy->id }}">
                                        <input type="hidden" name="user_id" id="idUser" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        <div class="form-input">
                                            <input type="text" placeholder="nombre" id="name" name="name" class="">
                                        </div>
                                        <div class="form-input">
                                            <input type="text" placeholder="apellido" id="apellido" name="apellido" class="">
                                        </div>
                                        <div class="form-input">
                                            <input type="num" placeholder="cedula" id="cedula" name="cedula" class="">
                                        </div>
                                        <div class="form-input">
                                            <input type="num" placeholder="edad" id="edad" name="edad">
                                        </div>
                                        <div class="form-input">
                                            <input type="text" placeholder="instagram" id="instagram" name="instagram" class="" >
                                        </div>
                                    </div>
                                    <p>Selección de categorias</p>
                                    <hr class="form-linea-horizontal">
                                    <div class="form-inputs" id="seleccionadorCategorias">
                                        <div class="form-select"> 
                                            <select name="categoria1" id="optiones">
                                                <option selected disabled>Categoría</option>
                                                <option id="casino" value="1">Salsa Casino</option>
                                                <option id="bachata" value="2">Bachata</option>
                                            </select>
                                        </div>
                                        <div class="form-select"> 
                                            <select name="categoria2" id="Options2">
                                                <option selected disabled>Categoría</option>
                                                <option value="1">Solista Femenido</option>
                                                <option value="2">Solista Masculino</option>
                                                <option value="3">Parejas</option>
                                                <option value="4">Grupos</option>
                                                <option value="5">Duo Masculino</option>
                                                <option value="6">Duo Femenido</option>
                                                <option value="7">Rueda</option>
                                                <option value="8">Coreográfico</option>
                                                <option value="9">Parejas</option>
                                                <option value="10">Lady Style</option>
                                                <option value="11">Men Style</option>
                                            </select>

                                            <!-- <select name="categoria2" id="Options3">
                                                <option selected disabled>Categoría</option>
                                                
                                            </select> -->
                                        </div>
                                        <hr class="form-linea--vertical">

                                        <div class="form-select"> 
                                            <select name="categoria3" id="categoria3">
                                                <option selected disabled>Categoría</option>
                                                <option value="1">Begginer</option>
                                                <option value="2">Nuevo Talento</option>
                                                <option value="3">Novel</option>
                                                <option value="4">Libre</option>
                                                <option value="5">Abierta</option>
                                            </select>
                                        </div>

                                        <!-- <div class="form-chack">
                                            <label for="">Begginer</label>
                                            <input name="categoria3" class="Options3" type="radio" value="1">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">Nuevo Talento</label> 
                                            <input name="categoria3" class="Options3" type="radio" value="2">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">Novel</label> 
                                            <input name="categoria3" class="Options3" type="radio" value="3">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">Libre</label> 
                                            <input name="categoria3" class="Options3" type="radio" value="4">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">Abierta</label>
                                            <input name="categoria3" class="Options3" type="radio" value="5">
                                        </div>
                                        <input name="categoria3" class="Options3" type="radio" value="0" hidden checked> -->

                                    </div>
                                    <hr class="linea-horizontal">
                                    <div class="form-input" id="form-input">
                                        <button id="seleccionador">Agregar otra categoria </button> 
                                    </div>
                                    <!--segunda seleccion de agregar categorias -->
                                    <div class="seleccionadores" id="seleccionadores1">
                                        <p>Selección de categorias</p>
                                        <hr class="form-linea-horizontal">
                                        <div class="form-inputs" id="seleccionadorCategorias">
                                            <div class="form-select"> 
                                                <select name="categoria1" id="optiones">
                                                    <option selected disabled>Categoría</option>
                                                    <option id="casino" value="1">Salsa Casino</option>
                                                    <option id="bachata" value="2">Bachata</option>
                                                </select>
                                            </div>
                                            <div class="form-select"> 
                                                <select name="categoria2" id="Options2">
                                                    <option selected disabled>Categoría</option>
                                                    <option value="1">Solista Femenido</option>
                                                    <option value="2">Solista Masculino</option>
                                                    <option value="3">Parejas</option>
                                                    <option value="4">Grupos</option>
                                                    <option value="5">Duo Masculino</option>
                                                    <option value="6">Duo Femenido</option>
                                                    <option value="7">Rueda</option>
                                                    <option value="8">Coreográfico</option>
                                                    <option value="9">Parejas</option>
                                                    <option value="10">Lady Style</option>
                                                    <option value="11">Men Style</option>
                                                </select>

                                    
                                            </div>
                                            <hr class="form-linea--vertical">

                                            <div class="form-select"> 
                                                <select name="categoria3" id="categoria3">
                                                    <option selected disabled>Categoría</option>
                                                    <option value="1">Begginer</option>
                                                    <option value="2">Nuevo Talento</option>
                                                    <option value="3">Novel</option>
                                                    <option value="4">Libre</option>
                                                    <option value="5">Abierta</option>
                                                </select>
                                            </div>

                                        </div>
                                        <hr class="linea-horizontal">
                                        <div class="form-input" id="form-input1">
                                            <button id="seleccionador1" >Agregar otra categoria </button> 
                                        </div>
                                    </div>
                                     <!-- fin segunda seleccion de agregar categorias -->
                                     
                                     <!--inicio de la tercera selección-->
                                     <div class="seleccionadores" id="seleccionadores2">
                                        <p>Selección de categorias</p>
                                        <hr class="form-linea-horizontal">
                                        <div class="form-inputs" id="seleccionadorCategorias">
                                            <div class="form-select"> 
                                                <select name="categoria1" id="optiones">
                                                    <option selected disabled>Categoría</option>
                                                    <option id="casino" value="1">Salsa Casino</option>
                                                    <option id="bachata" value="2">Bachata</option>
                                                </select>
                                            </div>
                                            <div class="form-select"> 
                                                <select name="categoria2" id="Options2">
                                                    <option selected disabled>Categoría</option>
                                                    <option value="1">Solista Femenido</option>
                                                    <option value="2">Solista Masculino</option>
                                                    <option value="3">Parejas</option>
                                                    <option value="4">Grupos</option>
                                                    <option value="5">Duo Masculino</option>
                                                    <option value="6">Duo Femenido</option>
                                                    <option value="7">Rueda</option>
                                                    <option value="8">Coreográfico</option>
                                                    <option value="9">Parejas</option>
                                                    <option value="10">Lady Style</option>
                                                    <option value="11">Men Style</option>
                                                </select>

                                    
                                            </div>
                                            <hr class="form-linea--vertical">

                                            <div class="form-select"> 
                                                <select name="categoria3" id="categoria3">
                                                    <option selected disabled>Categoría</option>
                                                    <option value="1">Begginer</option>
                                                    <option value="2">Nuevo Talento</option>
                                                    <option value="3">Novel</option>
                                                    <option value="4">Libre</option>
                                                    <option value="5">Abierta</option>
                                                </select>
                                            </div>

                                        </div>
                                        <hr class="linea-horizontal">
                                        <div class="form-input" id="form-input2">
                                            <button id="seleccionador2"  >Agregar otra categoria </button> 
                                        </div>
                                    </div>
                                     <!--fin de la tercera selección -->
                                     <!--inico cuarta seleccion-->
                                     <div class="seleccionadores" id="seleccionadores3">
                                        <p>Selección de categorias</p>
                                        <hr class="form-linea-horizontal">
                                        <div class="form-inputs" id="seleccionadorCategorias">
                                            <div class="form-select"> 
                                                <select name="categoria1" id="optiones">
                                                    <option selected disabled>Categoría</option>
                                                    <option id="casino" value="1">Salsa Casino</option>
                                                    <option id="bachata" value="2">Bachata</option>
                                                </select>
                                            </div>
                                            <div class="form-select"> 
                                                <select name="categoria2" id="Options2">
                                                    <option selected disabled>Categoría</option>
                                                    <option value="1">Solista Femenido</option>
                                                    <option value="2">Solista Masculino</option>
                                                    <option value="3">Parejas</option>
                                                    <option value="4">Grupos</option>
                                                    <option value="5">Duo Masculino</option>
                                                    <option value="6">Duo Femenido</option>
                                                    <option value="7">Rueda</option>
                                                    <option value="8">Coreográfico</option>
                                                    <option value="9">Parejas</option>
                                                    <option value="10">Lady Style</option>
                                                    <option value="11">Men Style</option>
                                                </select>

                                    
                                            </div>
                                            <hr class="form-linea--vertical">

                                            <div class="form-select"> 
                                                <select name="categoria3" id="categoria3">
                                                    <option selected disabled>Categoría</option>
                                                    <option value="1">Begginer</option>
                                                    <option value="2">Nuevo Talento</option>
                                                    <option value="3">Novel</option>
                                                    <option value="4">Libre</option>
                                                    <option value="5">Abierta</option>
                                                </select>
                                            </div>

                                        </div>
                                        <hr class="linea-horizontal">
                                    </div>
                                    <!--fin cuarta seleccion-->
                                    <div class="form-botones">
                                        <label for="">foto del competidor</label>
                                        <!-- <input type="file" name="foto_competidor" id="foto_competidor"> -->
                                        <a class="form-botones-enviar" id="bottomLista" type="submit">hecho</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            <!--formulario para el pago movil -->
                <div class="main-content-izquierda-pago pago">
                  
                    <div class="pago-contenido" id="moverMargen">
                       
                        <div class="pago-contenido-encapsulado">
                            <div class="pago-contenido-encapsulado-centro">
                                <div class="pago-tipo">
                                    <button id="pago-movil">Pago móvil</button>
                                    <button id="Efectivo">Efectivo</button>
                                </div>
                                
                                <h3 style="margin: 0 0 1em 0;"> Pago movil </h3>
                                <div id="info-error"></div>
                                <div class="pago-contenido-datos"  >
                                    <div class="pago-contenido-dato">
                                        <label for="">Banplus</label>
                                        <label for="">(0175)</label>
                                    </div>
                                    <div class="pago-contenido-dato">
                                        <label for="">Teléfono</label>
                                        <label for="">0424-2394092</label>                                    
                                    </div>
                                    <div class="pago-contenido-dato">
                                        <label for="">Cédula</label>
                                        <label for="">27.343.276</label>
                                    </div>
                                </div>
                                <!--formulario donde se registran los datos-->
                                <!-- <form action="" id="" class="pago-form form" method="POST"> -->
                                    <input type="hidden" name="efectivo" id="efectivoModalidad" value="pagoMovil">
                                    <div class="form-inputs">
                                        <div class="form-input">
                                            <input type="text" placeholder="nombre del titular del pago" id="nombreTitular" name="nombreTitular" class="">
                                        </div>
                                        <div class="form-input">
                                            <input type="tel" placeholder="número del titular" id="numeroTitular" name="numeroTitular" class="">
                                        </div>
                                        <div class="form-input">
                                            <input type="num" placeholder="referencia del pago móvil" id="referenciaPago" name="referenciaPago">
                                        </div>
                                    </div>
                                    <div class="form-botones">
                                        <!-- <label for="">Comprobante del pago </label>
                                        <input type="file" name="foto_competidor" id=""> -->
                                        <button class="form-botones-enviar" id="EnviarForm" type="submit">hecho</button>
                                    </div>

                                <!-- </form> -->
                                <div class="pago-logo">
                                    <img src="../../img/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        <!--formulario para el efectivo-->

            <!--            <div class="main-content-izquierda-pago pago">
                <   div class="pago-logo">
                        <img src="../../img/logo.png" alt="">
                    </div>
                    <div class="pago-contenido">
                        <div class="pago-contenido-encapsulado">
                            <div class="pago-contenido-encapsulado-centro">
                                <div class="pago-tipo">
                                    <button id="pago-movil">Pago móvil</button>
                                    <button id="Efectivo">Efectivo</button>
                                </div>
                                
                                <h3 style="margin: 0 0 1em 0;"> Efectivo </h3>
                                <div class="pago-contenido-datos" >
                                    <div class="pago-contenido-dato">
                                        <label for="">"Información para pagar en efectivo"</label>
                                    </div>
                                </div>
                                <--formulario donde se registran los datos--
                                <form action="" id="" class="pago-form form" method="POST">
                                    <div class="form-inputs">
                                        <div class="form-input">
                                            <input type="text" placeholder="Responsable del pago" id="nombreTitular" name="nombreTitular" class="">
                                        </div>
                                        <div class="form-input">
                                            <input type="num" placeholder="Cédula del responsable" id="referenciaPago" name="referenciaPago">
                                        </div>
                                        <div class="form-input">
                                            <input type="tel" placeholder="número del responsable" id="numeroTitular" name="numeroTitular" class="">
                                        </div>

                                    </div>
                                    <div class="form-botones" style="display:flex;">
                                        <button class="form-botones-enviar" type="submit" style="width:20%;">hecho</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> -->

        <!--contenedor derecho -->
            <div class="main-content-derecha right">
                <h2></h2>
                <div class="main-content-derecha-tabla tabla">
                    
                   
                    <div class="tabla-contenido">
                   
                        <div class="tabla-contenido-encapsulado">
                            <div class="tabla-contenido-encapsulado-centro">
                                <div class="tabla-competidores">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Competidores</th>
                                                <th>Cedula</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="competidoresLista">
                                            <tr>
                                                <th>No tiene competidores registrados</th>
                                            
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total: <p id="total"></p> </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tabla-logo">
                            <img src="../../img/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('templates.footer')
    <script src="../../js/agregarCategoria.js"></script>
    <script src="../../js/registroCompetidores.js"></script>
    <script>
        const $categoria1 = document.querySelector('#Options2');
        const $categoria2 = document.querySelector('#Options3');
        const $categoria3 = document.querySelector('#categoria3');

        // const $option = document.querySelector('#Option');
        document.getElementById('Options2').style.display = "none";
        document.getElementById('categoria3').style.display = "none";


        var select = document.getElementById('optiones');
            select.addEventListener('change', function(){
                var selectedOption = this.options[select.selectedIndex];


            if (selectedOption != null){

                document.getElementById('Options2').style.display = "block";
                document.getElementById('categoria3').style.display = "block";


                if(selectedOption.value === "1"){
                        ocultarOpcionesBachata();   
                    } else if(selectedOption.value === "2") {
                        ocultarOpcionesSalsa();
                    } 

            } 
                // console.log(selectedOption.value + ': ' + selectedOption.text);
            });

        
        

        function ocultarOpcionesBachata() {
            var select = document.getElementById("Options2"); // Obtener el select por su ID
            var opciones = select.options; // Obtener todas las opciones del select
            
            for (var i = 0; i < opciones.length; i++) {
                var opcion = opciones[i];
                
                // Utilizar una condición para ocultar las opciones que no te interesan
                if (opcion.value === "8" || opcion.value === "9" || opcion.value === "10" || opcion.value === "11") {
                opcion.style.display = "none"; // Ocultar la opción
                } else{
                    opcion.style.display = "block";
                }
            }
        }

        function ocultarOpcionesSalsa() {
            let select = document.getElementById("Options2"); // Obtener el select por su ID
            let opciones = select.options; // Obtener todas las opciones del select
            
            for (let i = 0; i < opciones.length; i++) {
                let opcion = opciones[i];
                
                // Utilizar una condición para ocultar las opciones que no te interesan
                if (opcion.value === "1" || opcion.value === "2" || opcion.value === "3" || opcion.value === "4" || opcion.value === "5" || opcion.value === "6" || opcion.value === "7") {
                opcion.style.display = "none"; // Ocultar la opción
                } else{
                    opcion.style.display = "block";
                }
            }
        }

        
        // let seleccion = document.getElementById("Option");

        // seleccion.addEventListener('change', function(){
        //     let opciones =seleccion.options;
            
        //     for (let i = 0; i < opciones.length; i++) {
        //     let select = opciones[i];

        //     if(select.value === "1"){
        //         ocultarOpcionesBachata();   
        //     }else{
        //         ocultarOpcionesSalsa();
        //     }
        // }
        // })
         
        // console.log(seleccion)
   
        // if(){
        // } else{
        // }

    
        // if(seleccionado == "1"){
        //     $categoria1.style.display = 'block';
        //     $categoria2.style.display = 'none';
        // }else{
        //     $categoria1.style.display = 'none';
        //     $categoria2.style.display = 'block';
        // }
        // Recorre todas las opciones del select
            // Array.from(this.options).forEach(function(option) {
            //     if (option.value === seleccionado) {
            //     option.style.display = 'block'; // Muestra las opciones seleccionadas
            //     } else {
            //     option.style.display = 'none'; // Oculta las opciones no seleccionadas
            //     }
            // });
        
    </script>
