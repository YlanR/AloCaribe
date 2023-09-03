@include('templates.header',  ['modo' => 'Alo Caribe'])
    <link rel="stylesheet" href="../../css/validacionTicket.css">
    <link rel="stylesheet" href="../../css/index.css">
<main>
    
        <section class="main">
            <div class="main-content">
                <div class="main-content-contenido">
                    <h3>Validadición de ticket</h3>
                    <div class="main-content-contenido-superior superior">
                        <div class="superior-contenido">
                            <!--la flacha la pongo yo el logo nombre y precio tienen que ser llamado de la base de datos dejare un name y un id ralacionado ya que es igual en los 3 bloque para facilitar el llamado -->
                            <div class="superior-contenido-izq" id="Flecha">flecha</div>
                            <div class="superior-contenido-izq" id="imagenAcademia">logo</div>
                            <div class="superior-contenido-izq" id="nombreAcademia">nombre</div>
                            <div class="superior-contenido-izq" id="precioTicket">precio</div>
                        </div>
                        <div class="superior-contenido">
                            <div class="superior-contenido-derecha">
                                <a href="">
                                    <span class="icon-credit-card"></span>
                                </a>
                            </div>
                            <div class="superior-contenido-derecha">
                                <a href="">
                                    <span class="icon-checkbox-checked" style="color:#06C63B;"></span>
                                </a>
                            </div>
                            <div class="superior-contenido-derecha">
                                <a href="">
                                    <span class="icon-clock2" style="color:#F6CF02;"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    @foreach ($tickets as $ticket => $valore)

                    <div class="main-content-contenido-central central">
                        <div class="central-contenido">   
                            <div class="central-contenido-superior">
                                <div class="central-contenido-superior-izq" id="Flecha"><span class="icon-play3" style="color:#531A87;"></span></div>
                                @if($valore->foto_academy)
                                <div class="central-contenido-superior-izq" id="imagenAcademia"><img  class="foto_header" src="{{ asset('storage/').'/'. $valore->foto_academy }}" alt=""></div>
                                @else
                                <div class="central-contenido-superior-izq" id="imagenAcademia"><img  class="foto_header" src="../img/academia.png" alt=""></div>
                                @endif
                                <div class="central-contenido-superior-izq" id="nombreAcademia"> <a href="{{ url('perfilAcademia/'.$valore->id) }}"> {{ $valore->name_academy }} </a></div>
                                <div class="central-contenido-superior-izq" id="precioTicket">{{ $valore->total }}$</div>
                            </div>
                            <div class="central-contenido-superior">
                                <div class="central-contenido-superior-derecha"><a href=""><span class="icon-credit-card"></span></a>
                                </div>
                                <div class="central-contenido-superior-derecha">
                                        <form id="check{{ $ticket+1 }}" class="check" action="{{ url('validar/'.$valore->idt) }}" method="post" >
                                            @csrf
                                            <button type="submit" class="icon-checkbox-checked" style="color:#06C63B;">
                                            

                                            </button>
                                        </form>
                                </div>
                                <div class="central-contenido-superior-derecha"><a href=""><span class="icon-clock2" style="color:#F6CF02;"></span></a>
                                </div>
                            </div> 
                            <div class="central-contenido-logo">
                                <img src="../../img/logo.png" alt="logo en el fondo jejeje ">
                            </div>
                            
                        </div>
                        <hr>
                        <div class="central-contenido central-contenido2">
                            <div class="central-contenido-inferior">
                                <label for="">Nombre del titular del pago</label>
                                <p>{{ $valore->nombrePago }}</p>
                            </div>
                            <div class="central-contenido-inferior">
                                <label for="">Teléfono del Titular</label>
                                <p>{{ $valore->telefono }}</p>

                            </div>
                            <div class="central-contenido-inferior">
                                <label for="">Referencia del pago móvil</label>
                                <p>{{ $valore->referencia }}</p>

                            </div>
                      
                        </div>
                    </div>

                    @endforeach

                    <div class="main-content-contenido-inferior inferior">
                    <div class="inferior-contenido">
                            <div class="inferior-contenido-izq" id="Flecha">flecha</div>
                            <div class="inferior-contenido-izq" id="imagenAcademia">logo</div>
                            <div class="inferior-contenido-izq" id="nombreAcademia">nombre</div>
                            <div class="inferior-contenido-izq" id="precioTicket">precio</div>
                        </div>
                        <div class="inferior-contenido">
                            <div class="inferior-contenido-derecha">
                                <a href="">
                                    <span class="icon-database"></span>
                                </a>
                            </div>
                            
                            <div class="inferior-contenido-derecha">
                                <a href="">
                                    <span class="icon-clock2" style="color:#F6CF02;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('scripts')

        @if( session('validar') == 'ok')
        <script>
            Swal.fire(
                'Validado!',
                'El ticket a sido validado con Exito.',
                'success'
                )            
        </script>
        @endif

        <script>
            <?php foreach($tickets as $ticket => $valore){ ?>
            $('#check'+<?= $ticket+1 ?>).submit(function(e){
                e.preventDefault();
                
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podras revertir tu decisión!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, validamoslo!',
                    cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            
                            this.submit()
                        }else{

                        }
                    })
            });
            <?php }?>
        </script>
    @endsection
    </main>
    @include('templates.footer')
