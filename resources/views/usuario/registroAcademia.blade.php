<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="../../css/registroAca.css">
=======
    <link rel="stylesheet" href="../../css/registroAcademia.css">
    <!-- <link rel="stylesheet" href="../../css/registerAcademia.css">-->
>>>>>>> 11294b4ec0e53cedb24c17ab16e17dcec780ea23
    <link rel="stylesheet" href="../fonts/style.css">
    <title>Registro</title>
</head>
<body>
    <header></header>

    <main>
        <section class="main">
            <div class="main-content">  
                <div class="main-content-contenido">
                    <form action="{{ route('academia.store') }}" enctype="multipart/form-data" class="contenido-form" method="POST">
                        @csrf
                        <div class="form-logo">
                            <img src="../../img/logo.png" alt=" logo " class="/* `form-logo-logo` is
                            the class name
                            assigned to the
                            `<img>` element that
                            displays the logo of
                            the academia. */
                            form-logo-logo">
                            <label for="">Registro de academía</label>
                        </div>
                        <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
                        <div class="form-contents">
                            <div class="form-content">
                                <input type="text" placeholder="nombre de la academia" id="nombreAcademia" name="name_academy" class="nombreAcademia">
                            </div>
                            <div class="form-content">
                                <input type="tel" placeholder="Número de celular" id="telefono" name="telefono" class="telefono">
                            </div>
                        </div>
                        <div class="form-contents">
                            <div class="form-content">
                                <select name="estado" id="Estados" class="Estados">
                                    <option selected disabled>Selecciona Estado</option>
                                    <option value="amazonas">Amazonas</option>
                                    <option value="anzoategui">Anzoátegui</option>
                                    <option value="apure">Apure</option>
                                    <option value="aragua">Aragua</option>
                                    <option value="barinas">Barinas</option>
                                    <option value="bolivar">Bolívar</option>
                                    <option value="carabobo">Carabobo</option>
                                    <option value="cojedes">Cojedes</option>
                                    <option value="delta-amacuro">Delta Amacuro</option>
                                    <option value="distrito-capital">Distrito Capital</option>
                                    <option value="falcon">Falcón</option>
                                    <option value="guarico">Guárico</option>
                                    <option value="la-guaira">La Guaira</option>
                                    <option value="lara">Lara</option>
                                    <option value="merida">Mérida</option>
                                    <option value="miranda">Miranda</option>
                                    <option value="monagas">Monagas</option>
                                    <option value="nueva-esparta">Nueva Esparta</option>
                                    <option value="portuguesa">Portuguesa</option>
                                    <option value="sucre">Sucre</option>
                                    <option value="tachira">Táchira</option>
                                    <option value="trujillo">Trujillo</option>
                                    <option value="yaracuy">Yaracuy</option>
                                    <option value="zulia">Zulia</option>
                                </select>
                            </div>
                            <div class="form-content">
                                <input type="text" placeholder="instagram de la academia" id="instagramAcademia" name="instagram" class="instagramAcademia">
                            </div>
                        </div>
                        <label for="" id="form-label">logo de la academia </label>
                        <input type="file" name="foto_academy" id="">
                        <button class="form-boton" type="submit">Listo</button>
                    </form>
                </div>
            
        </div>
        
        </section>
    </main>

    <footer></footer>
</body>