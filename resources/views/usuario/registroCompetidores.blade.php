<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de los competidores</title>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/registroCompe.css">
    <link rel="stylesheet" href="../fonts/style.css">
</head>
<body>
<main>
        <!--sección principal-->
    <section class="main">
        <!--contenido principal sepadado en 2 columnas-->
        <div class="main-content">
            <!--contenido de la columna izquierda /la ficha y el pago -->
            <div class="main-content-izquierda left">
                <h2></h2>
                <div class="main-content-izquierda-ficha ficha">
                    <div class="ficha-logo">
                        <img src="" alt="">
                    </div>
                    <div class="ficha-contenido">
                        <div class="ficha-contenido-encapsulado">
                            <div class="ficha-contenido-encapsulado-centro">
                                <h3> Ficha de competidor</h3>
                                <!--formulario donde se registran los datos-->
                                <form action="" id="" class="ficha-form form" method="POST">
                                    <div class="form-inputs">
                                        <div class="form-input">
                                            <input type="text" placeholder="nombre completo" id="nombreC" name="nombreC" class="">
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
                                    <div class="form-inputs">
                                        <div class="form-select"> 
                                            <select name="" id="">
                                                <option selected disabled>Categoría</option>
                                                <option value="">Salsa casino</option>
                                                <option value="">Bachata</option>
                                            </select>
                                        </div>
                                        <div class="form-select"> 
                                            <select name="" id="">
                                                <option selected disabled>Categoría</option>
                                                <option value="Salsa">Solista femenido</option>
                                                <option value="Salsa">Solista masculino</option>
                                                <option value="Salsa">Parejas</option>
                                                <option value="Salsa">Grupos</option>
                                                <option value="Salsa">Duo masculino</option>
                                                <option value="Salsa">Duo femenido</option>
                                                <option value="Salsa">Rueda</option>
                                                <option value="Salsa">Coreográfico</option>

                                                <option value="Bachata">Parejas</option>
                                                <option value="Bachata">Lady style</option>
                                                <option value="Bachata">Men style</option>
                                            </select>
                                        </div>
                                        <hr class="form-linea--vertical">
                                        <div class="form-chack">
                                            <label for="">Begginer</label>
                                            <input type="checkbox">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">NT</label> 
                                            <input type="checkbox">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">Novel</label> 
                                            <input type="checkbox">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">Libre</label> 
                                            <input type="checkbox">
                                        </div>
                                        <div class="form-chack">
                                            <label for="">Abierta</label>
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <hr class="linea-horizontal">
                                    <div class="form-input">
                                        <input type="text" placeholder="Agregar otra categoria " id="otraCate" name="otracate" class="otracate">
                                    </div>
                                    <div class="form-botones">
                                        <label for="">foto del competidor</label>
                                        <button class="form-botones-subir">subir</button>
                                        <button class="form-botones-enviar" type="submit">hecho</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
<!--formulario para el pago movil -->
                <div class="main-content-izquierda-pago pago">
                    <div class="pago-logo">
                        <img src="../../img/logo.png" alt="">
                    </div>
                    <div class="pago-contenido">
                        <div class="pago-contenido-encapsulado">
                            <div class="pago-contenido-encapsulado-centro">
                                <div class="pago-tipo">
                                    <button id="pago-movil">Pago móvil</button>
                                    <button id="Efectivo">Efectivo</button>
                                </div>
                                
                                <h3 style="margin: 0 0 1em 0;"> Pago movil </h3>
                                <div class="pago-contenido-datos" >
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
                                <form action="" id="" class="pago-form form" method="POST">
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
                                        <label for="">Comprobante del pago </label>
                                        <button class="form-botones-subir">subir</button>
                                        <button class="form-botones-enviar" type="submit">hecho</button>
                                    </div>
                                </form>
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
                    
                    <div class="tabla-logo">
                        <img src="../../img/logo.png" alt="">
                    </div>
                    <div class="tabla-contenido">
                        <div class="tabla-contenido-encapsulado">
                            <div class="tabla-contenido-encapsulado-centro">
                                <div class="tabla-competidores">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Competidores</th>
                                                <th>Pago C/U</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <th>20$</th>
                                                <th><a href="">check</a>
                                                    <a href="">elim</a>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>