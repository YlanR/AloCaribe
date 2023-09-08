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


const namePago = document.querySelector('#nombreTitular');
const telefonoImput = document.querySelector('#numeroTitular');
const referenciaImput = document.querySelector('#referenciaPago');
const ModalidadImput = document.querySelector('#movilModalidad').value;

const cedulaPagoImput = document.querySelector('#referenciaPagoE');
const nombrePagoImput = document.querySelector('#nombreTitularE');
const telefonoPagoImput = document.querySelector('#numeroTitularE');
const ModalidadPagoImput = document.querySelector('#efectivoModalidad').value;




class Competidores{
    constructor(){
        this.competidores = []; 
        this.total = [];
        this.totalPagar = Number(this.competidores)
    }

    agregarCompetidor(competidor){

        const competidorExistenteIndex = this.competidores.some(comp => comp.cedula === competidor.cedula);
        console.log(competidorExistenteIndex);

        if(competidorExistenteIndex){

            const competidores = this.competidores.map( comp => {
                let max = 0;

                if( comp.cedula === competidor.cedula){
                    if(comp.contador >= max){
                        comp.contador++;
                        console.log(comp.contador);

                        max = comp.contador; 

                    return comp;
                    }
                } else{
                    return comp;
                }
            });

            this.competidores = [...competidores, competidor];


            return console.log(this.competidores);



        }else{
            this.competidores = [...this.competidores, competidor];
            // this.total += this.calcularPrecio(this.competidores.contador);
            
            // console.log(this.total);
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
            case 6:
              precio = 40;
              break;
            case 7:
              precio = 45;
              break;
            case 8:
              precio = 50;
              break;
            case 9:
              precio = 55;
              break;
            case 10:
              precio = 60;
              break;
            default:
              precio = 0;
          }

              total += precio;

              console.log(total + ' probandooo');
              return total; 
        
    }
    
    crearPrecio(precio){

        const competidorExistenteIndex = this.total.some(comp => comp.cedula === precio.cedula);
        console.log(competidorExistenteIndex)

        if(competidorExistenteIndex){
            let nuevoarray = this.total.map( competidor => competidor.cedula === precio.cedula ? precio : competidor);
            this.total = nuevoarray;
            console.log(this.total)
            return;
        }else{
            this.total = [...this.total, precio];
            console.log(this.total)
            return;
        }
        // this.total = this.total.map( competidor => competidor.cedula === precio.cedula ? precio : competidor);
        // this.total = [...this.total, precio];

    }

    precioTotal(){
        const total = this.total.reduce((total, precio) => total + precio.precio, 0);
        // this.total.totalP += total; 
        // this.competidores = total;
        console.log(total);
        this.competidores.precio = total;
        return total;
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

    imprimirAlertaPago(mensaje, tipo){
        const divMensajePago = document.createElement('div');
        divMensajePago.classList.add('alerta')

        if(tipo === 'error'){
            divMensajePago.classList.add('AlertError');
        } else{
            divMensajePago.classList.add('AlertSucces');
        }

        divMensajePago.textContent = mensaje;

        // formulario.insertBefore(divMensajePago, document.querySelector('#info-error'));
        document.querySelector('#info-error').appendChild(divMensajePago);
        setTimeout( () => {
            divMensajePago.remove();
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
            btnEliminar.innerHTML = '<i class="fa-solid fa-trash-can"></i>';

            btnEliminar.onclick = () => eliminarCompetidor(id);

            const btnEditar = document.createElement('button');
            btnEditar.innerHTML = '<i class="fa-solid fa-layer-plus"></i>Agregar otra Categoria';

            btnEditar.onclick = () => editarCompetidor(competidor);


            divCompetidor.appendChild(divNombre);
            divCompetidor.appendChild(divCedula);
            divCompetidor.appendChild(btnEditar);
            divCompetidor.appendChild(btnEliminar);


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
            if(referenciaImput.value){

            if(namePago.value === '' || telefonoImput.value === '' || referenciaImput.value === '' || referenciaImput.length > 5){
                // console.log('Todos los campos son obligatorios');
                ui.imprimirAlertaPago('Todos los campos son obligatorios', 'error');
                return;
            }

            if(referenciaImput.value.length > 5){
                ui.imprimirAlertaPago('Deben ser los ultimos 5 digitos de la referencia bancaria', 'error');
                return;
            }

        
            // nombreImputPago.addEventListener('input', datosUsuario);
            // telefonoImput.addEventListener('input', datosUsuario);
            // referenciaImput.addEventListener('input', datosUsuario);

            // console.log(admCompetidores.competidores);
          

        if(admCompetidores){

            
            // if (e.target == formulario) {
            
            let datos = admCompetidores.competidores
        console.log(datos);
            
            var datosName = datos.map(objeto => objeto.name),
            datosApellido = datos.map(objeto => objeto.apellido),
            datosCedula = datos.map(objeto => objeto.cedula),
            datosEdad = datos.map(objeto => objeto.edad),
            datosInsta = datos.map(objeto => objeto.instagram),
            datosCate1 = datos.map(objeto => objeto.categoria1),
            datosCate2 = datos.map(objeto => objeto.categoria2),
            datosCate3 = datos.map(objeto => objeto.categoria3),
            ticket_ID = datos.map(objeto => objeto.ticket_id),
            datosNombreTitular = namePago.value,
            datosNumeroTitular = telefonoImput.value,
            datosModalidad = datos.map(objeto => objeto.modalidad),
            datosReferencia = referenciaImput.value
            precio = datos.precio;


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
                    ticket_id: ticket_ID[index],
                    nombreTitular: datosNombreTitular,
                    numeroTitular: datosNumeroTitular,
                    modalidad: datosModalidad[index],
                    referenciaPago: datosReferencia,
                    precio: precio
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

            Swal.fire(
                'Ticket registrado!',
                'Debe esperar a que el ticket sea validado.',
                'success'
                )  
                // setTimeout( () => {
                //     window.location.href = 'http://127.0.0.1:8000/misTickets';
                // }, 3000);
                })

            })  

            reiniciarOBjeto();
            UserObj.ticket_id = generarID();
            admCompetidores.borrarTodo();
            ui.imprimirCompetidores(admCompetidores);
            console.log(admCompetidores);
        } else{
            ui.imprimirAlerta('No haz ingresado competidores', 'error');
        }
    } else{
        e.preventDefault();

        if(nombrePagoImput.value === '' || cedulaPagoImput.value === '' || telefonoPagoImput.value === ''){
                // console.log('Todos los campos son obligatorios');
                ui.imprimirAlertaPago('Todos los campos son obligatorios', 'error');
                return;
            }

            if(cedulaPagoImput.length < 7){
                ui.imprimirAlertaPago('Error en la cedula.', 'error');
                return;
            }

        if(admCompetidores){

            
            // if (e.target == formulario) {

            let datos = admCompetidores.competidores
        console.log(datos);
            
            var datosName = datos.map(objeto => objeto.name),
            datosApellido = datos.map(objeto => objeto.apellido),
            datosCedula = datos.map(objeto => objeto.cedula),
            datosEdad = datos.map(objeto => objeto.edad),
            datosInsta = datos.map(objeto => objeto.instagram),
            datosCate1 = datos.map(objeto => objeto.categoria1),
            datosCate2 = datos.map(objeto => objeto.categoria2),
            datosCate3 = datos.map(objeto => objeto.categoria3),
            ticket_ID = datos.map(objeto => objeto.ticket_id),
            datosNombreTitular = nombrePagoImput.value,
            datosNumeroTitular = telefonoPagoImput.value,
            datosModalidad = datos.map(objeto => objeto.modalidad),
            datosCedulaPago = cedulaPagoImput.value
            precio = datos.precio;
            console.log(precio);


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
                    ticket_id: ticket_ID[index],
                    nombreTitular: datosNombreTitular,
                    numeroTitular: datosNumeroTitular,
                    modalidad: ModalidadPagoImput,
                    referenciaCedulaPago: datosCedulaPago,
                    precio: precio
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

            Swal.fire(
                'Ticket registrado!',
                'Debe esperar a que el ticket sea validado.',
                'success'
                )  
                // setTimeout( () => {
                //     window.location.href = 'http://127.0.0.1:8000/misTickets';
                // }, 3000);
                })

            })  

            reiniciarOBjeto();
            UserObj.ticket_id = generarID();
            admCompetidores.borrarTodo();
            ui.imprimirCompetidores(admCompetidores);
            console.log(admCompetidores);
        } else{
            ui.imprimirAlerta('No haz ingresado competidores', 'error');
        }
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
    precio: '',
    referenciaPago: '',
    nombreTitular: '',
    numeroTitular: '',
    ticket_id: ticket,
    academy_id: idAca,
    director_id: idUser,
    modalidad: ModalidadImput,
}

const TotalObj = {
    cedulas: '',
    precio: 0
}



function datosUsuario(e){

    UserObj[e.target.name] = e.target.value;
}

// function datosPago(e){

//     PagoObj[e.target.name] = e.target.value;
//     // console.log(UserObj);
// }

function generarID(){
let idRandom = Math.random().toString(30).substring(2).toUpperCase();
return idRandom;
}

// valida y agrega un nuevo competidor
function nuevoCompetidor(e){
    e.preventDefault();

    const {academy_id, name, apellido, cedula, edad, instagram, categoria1, categoria2, categoria3, contador, ticket_id, totalPagar} = UserObj;

    
    
    if(academy_id === null || name === '' || apellido === '' || cedula === '' || edad === '' || instagram === '' || categoria1 === '' || categoria2 === '' || categoria3 === ''){
        // console.log('Todos los campos son obligatorios');
        ui.imprimirAlerta('Todos los campos son obligatorios', 'error');
        return;
    }
   
    // const existe = admCompetidores.competidores.some(comp => comp.cedula === UserObj.cedula);
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
        let precio = 0;
        let total = 0;
        // console.log(total + ' PRECIOTOTALprincipio');

        let datos = datoss.filter(obje => obje.cedula === UserObj.cedula);
        

        datoss.forEach( (key, i) => {    
        if(datoss.includes(key)){
            let contarcedula = datos.length;
            TotalObj.precio =  admCompetidores.calcularPrecio(contarcedula);
            TotalObj.cedulas = key;
            // admCompetidores.total(precio);
            precio = TotalObj.precio;
        }

        // const cedulaprecio = UserObj.cedula;
        // const arrayprecio = {cedulaprecio, precio};
        // let prueba = admCompetidores.crearPrecio(arrayprecio);
        // // total += precio;
        // console.log(arrayprecio)


        // console.log(total + ' Totaliti');

        // else{
        //     let contarcedula = datos.length;
        //  // console.log(contarcedula + ' cedulacontada');
        //     TotalObj.precio =  admCompetidores.calcularPrecio(contarcedula);
        //     TotalObj.cedulas = key;
        //     let precio =  admCompetidores.calcularPrecio(contarcedula);
        //     // admCompetidores.total(precio);
        //     console.log(precio + 'precio');

            
        // }
        
        })
        
        let totalP = 0;
        var arrayprecio = {cedula, precio, totalP};
        let prueba = admCompetidores.crearPrecio(arrayprecio);
        
        // total += precio;
        console.log(arrayprecio)
        console.log(prueba)


    

        // UserObj.precio =  admCompetidores.competidores.calcularPrecio(UserObj.contador);


        ui.imprimirAlerta('Se agrego correctamente');
    }


    var probando =  admCompetidores.precioTotal();
   
    ui.imprimirTotal(probando);


    reiniciarOBjeto({...UserObj});

    formulario.reset();
    ui.imprimirCompetidores(admCompetidores);

}

// function nuevoPago(e){
//     e.preventDefault();


// }

function reiniciarOBjeto(){
    UserObj.name= '';
    UserObj.apellido= '';
    UserObj.cedula= '';
    UserObj.edad= '';
    UserObj.instagram= '';
    UserObj.categoria1= '';
    UserObj.categoria2= '';
    UserObj.categoria3= '';
    UserObj.nombreTitular = '';
    UserObj.numeroTitular = '';
    UserObj.referenciaPago = '';
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
    

    UserObj.name = name;
    UserObj.apellido = apellido;
    UserObj.cedula = cedula;
    UserObj.edad = edad;
    UserObj.instagram = instagram;
    UserObj.categoria1 = '';
    UserObj.categoria2 = '';
    UserObj.categoria3 = '';
    UserObj.academy_id = academy_id;
    
    formulario.querySelector('button[type="submit"]').textContent = 'Guardar Cambios';

    editando = true;

}