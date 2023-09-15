@include('templates.header',  ['modo' => 'Alo Caribe'])
    <link rel="stylesheet" href="../../css/validacionTicket.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../fonts/style.css">
<main>
    
        <section class="main">
            <div class="main-content">
                <div class="main-content-contenido">
                    <h3>Mis Tickets</h3>

                    @foreach ($tickets as $ticket => $valore)

                    <div class="main-content-contenido-central central">
                        <div class="central-contenido">   
                            <div class="central-contenido-superior" style="margin: 7px 45px;">
                                <div class="central-contenido-superior-izq" id="Flecha">
                                    <button id="flecha">
                                        <span class="icon-play3" style="color:#531A87;"></span>
                                    </button>
                                </div>
                                @if($valore->foto_academy)
                                <div class="central-contenido-superior-izq" id="imagenAcademia"><img  class="foto_header" src="{{ asset('storage/').'/'. $valore->foto_academy }}" alt=""></div>
                                @else
                                <div class="central-contenido-superior-izq" id="imagenAcademia"><img  class="foto_header" src="../img/academia.png" alt=""></div>
                                @endif
                                <div class="central-contenido-superior-izq" id="nombreAcademia">{{ $valore->name_academy }}</div>
                                <div class="central-contenido-superior-izq" id="precioTicket">{{ $valore->total }}$</div>

                            </div>
                                <div class="central-contenido-superior">
                                </div>
                                @if($valore->resultado == 't')
                                <div class="central-contenido-superior-derecha" style="margin: 25px 45px;">
                                    <p>{{ $valore->ticket }}</p>
                                </div>

                                @if($valore->modalidad == 'efectivo')
                                <div class="central-contenido-superior-derecha" style="margin: 25px 45px;" >
                                    <p>Pagar en taquilla</p>
                                </div>
                                @endif


                                <div class="central-contenido-superior-derecha"><a href="{{ url('ticket/'.$valore->idp)}}" target="_blank">Imprimir Ticket</a>
                                </div>
                                @else
                                <div class="central-contenido-superior-derecha" style="margin: 25px 45px;">
                                    <a href="">
                                        <span class="icon-clock2"></span>
                                    </a>
                                </div>
                                @endif
                            </div> 
                            
                        <!--   <div class="central-contenido-logo">
                                <img src="../../img/logo.png" alt="logo en el fondo jejeje ">
                            </div>

                            <hr>
                        -->
                               
                        <div class="central-contenido central-contenido2" id="tabla">
                        <table class="lista-seleccionada-tabla">
                            <thead class="lista-cabecera">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Cedula</th>
                                        <th>Edad</th>
                                        <th>Instagram</th>
                                        <th>Categoria</th>
                                    </tr>
                            </thead>

                          <tbody class="lista-cuerpo">
                      @foreach ($competidores as $competidor => $valoress)
                        @if($valore->idt == $valoress->ticket_id)
                                <tr>
                                    <td>{{ $valoress->name }}</td>
                                    <td>{{ $valoress->apellido }}</td>
                                    <td>{{ $valoress->cedula }}</td>
                                    <td>{{ $valoress->edad }}</td>
                                    <td>{{ $valoress->instagram }}</td>
                                    <td>{{ $valoress->name_cate1 }}/{{ $valoress->name_cate2 }}/{{ $valoress->name_cate3 }}</td>

                                </tr>
                        @endif

                      @endforeach
                          </tbody>
                          </table>
                        </div>
                    </div>

                    @endforeach
                        </div>
                 
                <!--
                <div class="main-content-contenido-inferior inferior">
                    <div class="inferior-contenido">
                            <div class="inferior-contenido-izq" id="Flecha">
                                <span class="icon-play3" style="color:#531A87;"></span>
                            </div>
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
                -->
            </div>
        </section>

    </main>
    <script src="../../js/tickets.js"></script>
    @section('scripts')
        @if( session('competidores') == 'ok')
            <script>
                Swal.fire(
                    'Ticket registrado!',
                    'Debe esperar a que el ticket sea validado.',
                    'success'
                    )            
            </script>
        @endif
    @endsection
    @include('templates.footer')
