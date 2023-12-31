@include('templates.header',  ['modo' => 'Alo Caribe'])

<link rel="stylesheet" href="../../css/listaCompe.css">
<link rel="stylesheet" href="../../css/index.css">

        <section class="main">
            <div class="main-content">
                <div class="main-content-contenido">
                    <h2>Lista de competidores </h2>
                    <form action="{{ url('buscar') }}" method="POST">
                    @csrf

                        <div class="main-content-contenido-lista lista-competidores">

                            <div class="lista-competidores-genero lista ">
                                <label for="">Género</label>
                                <select name="categoria1">
                                    <option selected disabled>Select</option>
                                    <option value="1">Salsa Casino</option>
                                    <option value="2">Bachata</option>
                                </select>
                            </div>
                            <div class="lista-competidores-categoria1 lista ">
                                <label for="">Categoria</label>
                                <select name="categoria2">
                                    <option selected disabled>Select</option>
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
                            <div class="lista-competidores-categoria2 lista">
                                <label for="">Categoria</label>
                                <select name="categoria3">
                                    <option selected disabled>Select</option>
                                    <option value="1">Begginer</option>
                                    <option value="2">Nuevo Talento</option>
                                    <option value="3">Novel</option>
                                    <option value="4">Libre</option>
                                    <option value="5">Abierta</option>
                                </select>
                            </div>

                            <button type="submit" class="search"> 
                                <span class="icon-search" style="color:#531A87; font-size: 20px;"></span>
                            </button>
                        </div>
                    </form>
                @if($categoria1)
                    <div class="tituloCategorias">
                        <h2>Categoria: {{ $categoria3->name_cate3 }} / {{ $categoria2->name_cate2}} / {{ $categoria1->name_cate1}}</h2>
                    </div>
                @endif
                    <div class=" lista-seleccionada">
                        <table class="lista-seleccionada-tabla">
                        <thead class="lista-cabecera">
                                <tr>
                                    <th>ID</td>
                                    <th>Academia</td>
                                    <th>Nombre</td>
                                    <th>Apellido</td>
                                    <th>Cédula</td>
                                    <th>Logo</td>
                                </tr>
                            </thead>
        <!--llemar las celdas desde la dba :3 -->
                            <tbody class="lista-cuerpo">

                            @foreach ($competidores as $competidor => $valore)
                                  
                                <tr>
                                    <td>{{ $competidor+1 }}</td>
                                    <td><a href="{{ url('perfilAcademia/'.$valore->id) }}"> {{ $valore->name_academy }} </a></td>
                                    <td>{{ $valore->name }}</td>
                                    <td>{{ $valore->apellido }}</td>
                                    <td>{{ $valore->cedula }}</td>
                                    @if($valore->foto_academy) 
                                    <td><img  class="foto_header" src="{{ asset('storage/').'/'.  $valore->foto_academy }}" alt=""></td>
                                    @else
                                    <td><img  class="foto_header" src="../img/academia.png" alt=""></td>
                                    @endif
                                    
                                </tr>

                                @endforeach

                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </section>

<script src="../../js/listadoCompe.js"></script>
@include('templates.footer')
