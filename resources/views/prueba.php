<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.main-content{
    margin-top:20px;
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-gap: 10px;
grid-auto-rows: minmax(100px, auto);
justify-content:space-between;
}
.left {
    grid-column: 1;
    grid-row: 1;
    background: blue;
    margin: 0 0 0 10px;
}
.right {
    grid-column: 2 ;
    grid-row: 1;
    background:red;
    margin: 0 15px 0 135px;
    height: 85vh;
    width: auto;

}

.ficha-contenido{    

    width: 100%;
    height: 31rem;
}

.ficha-contenido-encapsulado{

    background-size: cover;
    background-color: white;
}
.ficha-contenido-encapsulado-centro{
    position:absolute;
    width: 55%;
    height: 100%;
    border: 2px solid ;

 
    text-align: center;
    justify-content: center;
    background-color: #b0b0b010;
    border-radius: 0 3rem 3rem 3rem;
    box-shadow: 0rem 3rem 1rem #b0b0b040;

    backdrop-filter: blur(0.4rem);
}
.form{
    position: absolute;
}
.form-inputs{
    display: flex;
    margin:20px;
}
.form-input{    
    position: relative;
    margin-bottom: 1rem;
    width: 100%;
    margin-top: -1rem;}
.form-input input{
    border: none;
    border-bottom: 2px solid blueviolet;
    padding: 9px 2px;
    margin: 2rem 0rem 2rem 0.4rem;
    text-align: center;
    background:transparent;
    width:80%;
}
.form-select{
    margin:0px 10px;
}
.form-select select{
    border-radius: 40px;
    width: 100%;
    position: relative;
    padding: 8px 16px 8px 37px;
    font: 400 15px Arial;
    /* -webkit-appearance: none; */
    /* appearance: none; */
    background: #f37188;
    border: none;
    color: white;
}
.form-chack label{
    font-size:12px;
}
.form-input input{
    border: none;
    border-bottom: 2px solid blueviolet;
    padding: 9px 2px;
    margin: 2rem 0rem 2rem 0.4rem;
    text-align: center;
    background:transparent;
    width:80%;
}
.form-input .otracate{
    display: flex;
    width: 40%;
    margin-top: 3rem;
}
.form-botones{
    display: grid;
    grid-template-columns: max-content;
    justify-content: flex-end;
    text-align: center;
    align-items: center;
    margin: 25px;
}
.form-botones label{
    margin-bottom: 10px;
    color: gray;
    font-size: 18px;
}
.form-botones .form-botones-subir{
    margin-bottom: 40px;
    padding: 1px;
    background: #f37188;
    border: none;
    color: 
    white;
}
.form-botones .form-botones-enviar{
    padding: 8px;
    border: none;
    border-radius: 24px;
    background: #f37188;
    color: white;
    box-shadow: 0px 3px 8px -1px black;
}
    </style>
</head>
<body>
    <main>
        <!--sección principal-->
    <section class="main">
        <!--contenido principal sepadado en 2 columnas-->
        <div class="main-content">
            <!--contenido de la columna izquierda /la ficha y el pago -->
            <div class="main-content-izquierda left">
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

                <div class="main-content-izquierda-pago pago"></div>
            </div>
            <!---->
            <div class="main-content-derecha right">
                <div></div>
            </div>
        </div>
    </section>
</main>
</body>
</html>