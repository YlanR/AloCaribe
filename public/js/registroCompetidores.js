const idAca = document.querySelector('#idAcademy').value;
const idUser = document.querySelector('#idUser').value;
const nombreImput = document.querySelector('#name');
const apellidoImput = document.querySelector('#apellido');
const cedulaInput = document.querySelector('#cedula ');
const edadImput = document.querySelector('#edad');
const instagramImput = document.querySelector('#instagram');
const Categoria2 = document.querySelector('#Options2');
const Categoria1 = document.querySelector('#optiones');
const Categoria33 = document.querySelector('#categoria3');
// const nombreImput = document.querySelector('#nombreC');
let editando;

const formulario = document.querySelector('#formularioregistro');
const btnFormulario = document.querySelector('#bottomLista');

const contenedorCompetidores = document.querySelector('#competidoresLista');
const contenedorTotal = document.querySelector('#total');



class Competidores{
    constructor(){
        this.competidores = []; 
        this.total = [];
    }

    agregarCompetidor(competidor){

        const competidorExistenteIndex = this.competidores.some(comp => comp.cedula === competidor.cedula);
        console.log(competidorExistenteIndex);
        
        if(competidorExistenteIndex){
            const competidores = this.competidores.map( comp => {
                if( comp.cedula === competidor.cedula){
                    comp.contador++;

                    return comp;
                } else{
                    return comp;
                }
            });
            this.competidores = [...competidores, competidor];
            return console.log(this.competidores);
        }else{
            

            this.competidores = [...this.competidores, competidor];

            return console.log(this.competidores);
        }
        // console.log(competidorExistenteIndex);

    }

    calcularPrecio(contadores){
        let precio = 0;
        let total = 0;

        // const competidorExistente = this.competidores.map(comp => comp.cedula === competidores.cedula);
 
        switch (contadores) {
            case 1:
              precio = 25;
              break;
            case 2:
              precio = 25;
              break;
            case 3:
              precio = 30;
              break;
            case 4:
              precio = 30;
              break;
            case 5:
              precio = 35;
              break;
            case 5:
              precio = 40;
              break;
            default:
              precio = 0;
          }

              total += precio;
        
              console.log(total + ' probandooo');
              return total; 
        
    }
    
    crearPrecio(precio){
        this.total = [...this.total, precio];
        return;
    }

    eliminarCompetidor(id){
        this.competidores = this.competidores.filter(competidor => competidor.id !== id);
    }

    borrarTodo(){
        this.competidores = [];
    }

    editarCompetidor(competidorActualizado){
        this.competidores = this.competidores.map( competidor => competidor.id === competidorActualizado.id ? competidorActualizado : competidor);
    }

}

class UI{

    imprimirAlerta(mensaje, tipo){
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('alerta')

        if(tipo === 'error'){
            divMensaje.classList.add('AlertError');
        } else{
            divMensaje.classList.add('AlertSucces');
        }

        divMensaje.textContent = mensaje;

        formulario.insertBefore(divMensaje, document.querySelector('#form-inputs'));
        
        setTimeout( () => {
            divMensaje.remove();
        }, 5000);
    }

    imprimirCompetidores({competidores}){
        this.limpiarHTML();
    
        competidores.forEach(competidor => {
            const {name, apellido, cedula, id} = competidor;
            
            const divCompetidor = document.createElement('tr');
            divCompetidor.dataset.id = id;

            const divNombre = document.createElement('th');
            divNombre.textContent = name+' '+apellido;

            const divCedula = document.createElement('th');
            divCedula.textContent = 'V-'+cedula;

            const btnEliminar = document.createElement('button');
            btnEliminar.innerHTML = 'Eliminar';

            btnEliminar.onclick = () => eliminarCompetidor(id);

            const btnEditar = document.createElement('button');
            btnEditar.innerHTML = 'Editar';

            btnEditar.onclick = () => editarCompetidor(competidor);


            divCompetidor.appendChild(divNombre);
            divCompetidor.appendChild(divCedula);
            divCompetidor.appendChild(btnEliminar);
            divCompetidor.appendChild(btnEditar);


            contenedorCompetidores.appendChild(divCompetidor);
        })
    

    }

    imprimirTotal(total){

        contenedorTotal.textContent = total;

    }

    limpiarHTML(){
        while(contenedorCompetidores.firstChild){
            contenedorCompetidores.removeChild(contenedorCompetidores.firstChild);
        }
    }

}

const ui = new UI();
const admCompetidores = new Competidores();

eventListener();
function eventListener(){
    nombreImput.addEventListener('input', datosUsuario);
    apellidoImput.addEventListener('input', datosUsuario);
    cedulaInput.addEventListener('input', datosUsuario);
    edadImput.addEventListener('input', datosUsuario);
    instagramImput.addEventListener('input', datosUsuario);
    Categoria33.addEventListener('change', datosUsuario);
    Categoria1.addEventListener('change', datosUsuario);
    Categoria2.addEventListener('change', datosUsuario);
    btnFormulario.addEventListener('click', nuevoCompetidor);

}

let ticket = generarID();
Enviar();
function Enviar(){
    formulario.addEventListener('submit', async (e) =>{
        e.preventDefault();

    if(admCompetidores){

        // if (e.target == formulario) {

        let datos = admCompetidores.competidores
    // console.log(datos);
        
        var datosName = datos.map(objeto => objeto.name),
        datosApellido = datos.map(objeto => objeto.apellido),
        datosCedula = datos.map(objeto => objeto.cedula),
        datosEdad = datos.map(objeto => objeto.edad),
        datosInsta = datos.map(objeto => objeto.instagram),
        datosCate1 = datos.map(objeto => objeto.categoria1),
        datosCate2 = datos.map(objeto => objeto.categoria2),
        datosCate3 = datos.map(objeto => objeto.categoria3),
        ticket_ID = datos.map(objeto => objeto.ticket_id);


        let datosAca = parseInt(idAca);
        let datosUser = parseInt(idUser);


        let datosEnviar = datos.map((objeto, index) => {
            return {
                academy_id: datosAca,
                director_id: datosUser,
                name: datosName[index],
                apellido: datosApellido[index],
                cedula: datosCedula[index],
                edad: datosEdad[index],
                instagram: datosInsta[index],
                categoria1: datosCate1[index],
                categoria2: datosCate2[index],
                categoria3: datosCate3[index],
                ticket_id: ticket_ID[index]
            };
        });
    console.log(JSON.stringify(datosEnviar));
    ui.imprimirAlerta('Registrados con exito');

    
        datosEnviar.forEach(function(objeto) {
            
            let option = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8',
                    Accept: 'application/json;charset=utf-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Agrega el token de Laravel para protección CSRF
                },
                body: JSON.stringify(objeto)
            }
            
            fetch('/recibirdatos', option)
            .then(response => response.json())
            .then(data => {
            console.log(data); // Handlea la respuesta del servidor
            })

        })  

        // .catch(error => console.log('Error: ',error));
        // (datos => datos.json())
        // .then(datosformulario => {
        //     console.log(datosformulario);
        // })


        reiniciarOBjeto();
        UserObj.ticket_id = generarID();
        admCompetidores.borrarTodo();
        ui.imprimirCompetidores(admCompetidores);
        console.log(admCompetidores);
    } else{
        ui.imprimirAlerta('No haz ingresado competidores', 'error');
    }
    });
}

const UserObj = {
    academy_id: idAca,
    director_id: idUser,
    name: '',
    apellido: '',
    cedula: '',
    edad: '',
    instagram: '',
    categoria1: '',
    categoria2: '',
    categoria3: '',
    contador: 1,
    precio: 25,
    ticket_id: ticket
}

const TotalObj = {
    cedulas: '',
    precio: 0
}


function datosUsuario(e){

    UserObj[e.target.name] = e.target.value;
    // console.log(UserObj);
}

function generarID(){
let idRandom = Math.random().toString(30).substring(2).toUpperCase();
return idRandom;
}

// valida y agrega un nuevo competidor
function nuevoCompetidor(e){
    e.preventDefault();

    const {academy_id, name, apellido, cedula, edad, instagram, categoria1, categoria2, categoria3, contador, ticket_id} = UserObj;
    const {cedulas, precio} = TotalObj;

    
    
    if(academy_id === null || name === '' || apellido === '' || cedula === '' || edad === '' || instagram === '' || categoria1 === '' || categoria2 === '' || categoria3 === ''){
        // console.log('Todos los campos son obligatorios');
        ui.imprimirAlerta('Todos los campos son obligatorios', 'error');
        return;
    }
   
    // const existe = admCompetidores.competidores.some(comp => comp.cedula === UserObj.cedula);
    // console.log(existe);
    if(editando){
        ui.imprimirAlerta('Editado correctamente');

        admCompetidores.editarCompetidor({...UserObj});

        formulario.querySelector('button[type="submit"]').textContent = 'Agregar lista';

        editando = false;
    } else{

        UserObj.id = Date.now();

        // const competidorExistenteIndex = admCompetidores.competidores.some(comp => comp.cedula === UserObj.cedula);
        // if(competidorExistenteIndex){
        //     UserObj.precio =  admCompetidores.calcularPrecio(UserObj.contador);
        // }

        //     console.log(UserObj.precio + ' PRECIOTOTAL');

        admCompetidores.agregarCompetidor({...UserObj});

        let datoss = admCompetidores.competidores;
        let total = 0;
        // console.log(total + ' PRECIOTOTALprincipio');

        let datos = datoss.filter(obje => obje.cedula === UserObj.cedula);
        

        console.log(datos + ' CEDULAINPUT');
        datoss.forEach( (key, i) => {    
        if(datoss.includes(key)){
            let contarcedula = datos.length;
            TotalObj.precio =  admCompetidores.calcularPrecio(contarcedula);
            TotalObj.cedulas = key;
            // admCompetidores.total(precio);
        console.log(admCompetidores.total + ' cedulacontada');
        
        }else{
            let contarcedula = datos.length;
         // console.log(contarcedula + ' cedulacontada');
            TotalObj.precio =  admCompetidores.calcularPrecio(contarcedula);
            TotalObj.cedulas = key;
            let precio =  admCompetidores.calcularPrecio(contarcedula);
            // admCompetidores.total(precio);

            
        }
        
        })

        // UserObj.precio =  admCompetidores.competidores.calcularPrecio(UserObj.contador);


        ui.imprimirAlerta('Se agrego correctamente');
    }
    ui.imprimirTotal();


    reiniciarOBjeto({...UserObj});

    formulario.reset();
    ui.imprimirCompetidores(admCompetidores);

}

function reiniciarOBjeto(){
    UserObj.name= '';
    UserObj.apellido= '';
    UserObj.cedula= '';
    UserObj.edad= '';
    UserObj.instagram= '';
    UserObj.categoria1= '';
    UserObj.categoria2= '';
    UserObj.categoria3= '';
}
 
function eliminarCompetidor(id){
    
    admCompetidores.eliminarCompetidor(id);

    ui.imprimirAlerta('El competidor se ha eliminado correctamente', 'success');

    ui.imprimirCompetidores(admCompetidores);

}

function editarCompetidor(competidor){
    const {academy_id ,name, apellido, cedula, edad, instagram, categoria1, categoria2, categoria3, } = competidor;

    nombreImput.value = name;
    apellidoImput.value = apellido; 
    cedulaInput.value = cedula;
    edadImput.value = edad;
    instagramImput.value =instagram; 
    Categoria1.value = categoria1;
    Categoria2.value = categoria2;
    Categoria33.value = categoria3;

    UserObj.name = name;
    UserObj.apellido = apellido;
    UserObj.cedula = cedula;
    UserObj.edad = edad;
    UserObj.instagram = instagram;
    UserObj.categoria1 = categoria1;
    UserObj.categoria2 = categoria2;
    UserObj.categoria3 = categoria3;
    UserObj.academy_id = academy_id;
    
    formulario.querySelector('button[type="submit"]').textContent = 'Guardar Cambios';

    editando = true;

}