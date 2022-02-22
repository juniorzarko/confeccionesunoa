class Manejomodulos{ // clase que maneja las opciones de ingreso del operador

    DOMprincipal;

    cargarDOM() {

        let DOMprincipal = window.document.ready
        return;
    }
    /* Alexis esto no se debe actualizar jjj*/

    registrarOperario(){

        let datos={
            nombre:$("#nombreOperario").val(),
            apellido:$("#apellidOperario").val(),
            direccion:$("#direccionOperario").val(),
            telefono:$("#telefonOperario").val(),
            cargo:$("#cargOperario").val(),
            email:$("#emailOperario").val()
        }
        
       $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
      
            url: "http://localhost/confeccionesunoa/principal.php/Operario/registrar",
           
            data : datos,
            type: 'POST',
            dataType: 'json',
            success: function (respuesta) {
                //escribe en la consola del desarrollador para efectos de depuración
              //  console.log(respuesta);
                console.log("Llego la respuesta por success");
                alert("Usuario ha sido creado");

            },
            error: function (xhr, status) {
                $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
                //$("#mensajes").hide(1000);
                
                console.log("entro por error registrar");
                console.log(xhr);
            },
    
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                $("#mensajes").html("Obteniendo lista...");
                $("#mensajes").hide(500);
                console.log("entro por complete registrar");
                listarRespuesta();
                //return respuesta;
            }
        });
      
    }

    listarOperario(){
console.log('entro a listar operario')
    $.ajax({
        // la URL para la petición (url: "url al recurso o endpoint")
       // url: "http://localhost:8080/api/Cabin/all",
        url: "http://localhost/confeccionesunoa/principal.php/Operario/listar",
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        //si el metodo del servicio recibe datos, es necesario definir el parametro adicional
       // data : datos,

        // especifica el tipo de petición http: POST, GET, PUT, DELETE
        type: 'GET',

        // el tipo de información que se espera de respuesta
        dataType: 'json',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (respuesta) {
            //escribe en la consola del desarrollador para efectos de depuración
            console.log("entro por success listar");
            //console.log(respuesta);
            $("#mensajes").html("llego respuesta");
            $("#mensajes").hide(1000);
           
            //recibe el arreglo 'items' de la respuesta a la petición
           mostrarinformacion(respuesta);
        },

        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error: function (xhr, status) {
            $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
            //$("#mensajes").hide(1000);
            console.log("entro por error listar");
            console.log(status);
        },

        // código a ejecutar sin importar si la petición falló o no
        complete: function (xhr, status) {
            $("#mensajes").html("Usuario no existe");
            //$("#mensajes").hide(1000);
            console.log("entro por complete listar");
            console.log(status);
        }
    });

    }

    consultarOperarioxId(id){

        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/principal.php/Operario/buscarxid/"+id,
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            //si el metodo del servicio recibe datos, es necesario definir el parametro adicional
           // data : datos,
    
            // especifica el tipo de petición http: POST, GET, PUT, DELETE
            type: 'GET',
    
            // el tipo de información que se espera de respuesta
            dataType: 'json',
    
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (respuesta) {
                //escribe en la consola del desarrollador para efectos de depuración
                console.log("entro por success listar de actualizar");
                //console.log(respuesta);
                $("#mensaje").html("llego respuesta");
                $("#mensaje").hide(1000);
               
                //recibe el arreglo 'items' de la respuesta a la petición
               llenarcampos(respuesta);
               console.log(respuesta);
            },
    
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
                //$("#mensajes").hide(1000);
                console.log("entro por error listar");
                console.log(status);
            },
    
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                $("#mensajes").html("Usuario no existe");
                //$("#mensajes").hide(1000);
                console.log("entro por complete listar");
                console.log(status);
            }
        });
    }

    actualizarOperario(id){   // este es editar
        console.log(id)
        let datos={
            nombre:$("#nombreOperario").val(),
            apellido:$("#apellidOperario").val(),
            direccion:$("#direccionOperario").val(),
            telefono:$("#telefonOperario").val(),
            cargo:$("#cargOperario").val(),
            email:$("#emailOperario").val()
      
    
        }

    //    let datos = JSON.stringify(datos_vect);
        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/principal.php/Operario/actualizar/"+id,
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            //si el metodo del servicio recibe datos, es necesario definir el parametro adicional

            data : datos,
    
            // especifica el tipo de petición http: POST, GET, PUT, DELETE
            type: 'PUT',
    
            // el tipo de información que se espera de respuesta
            contentType: "application/JSON",
    
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (respuesta) {
                //escribe en la consola del desarrollador para efectos de depuración
                console.log("entro por success listar de actualizar con valores nuevos");
                //console.log(respuesta);
                $("#mensaje").html("llego respuesta actualizar con valores nuevos");
                $("#mensaje").hide(1000);
                console.log(respuesta)//vacioo
               
                //recibe el arreglo 'items' de la respuesta a la petición
                
              
            },
    
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
                //$("#mensajes").hide(1000);
                console.log("entro por error listar");
                console.log(status);
                
            },
    
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                $("#mensajes").html("Usuario no existe");
                //$("#mensajes").hide(1000);
                console.log("entro por complete listar");
                console.log(status);
                listarRespuesta();//renderiza la tabla
            }
        });

    }

    eliminar(id){

        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/principal.php/Operario/eliminar/"+id,
       
    
            // especifica el tipo de petición http: POST, GET, PUT, DELETE
            type: 'DELETE',
    
            // el tipo de información que se espera de respuesta
            dataType: 'json',
    
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (respuesta) {
                //escribe en la consola del desarrollador para efectos de depuración
                console.log("entro por success de eliminar");
                //console.log(respuesta);
                $("#mensaje").html("llego respuesta");
                $("#mensaje").hide(1000);
                alert("Usuario eliminado");
                //recibe el arreglo 'items' de la respuesta a la petición
                listarRespuesta();
            },

            error: function (xhr, status) {
                $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
                //$("#mensajes").hide(1000);
                console.log("entro por error eliminar");
                console.log(status);
            },
    
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                $("#mensajes").html("Usuario no existe");
                //$("#mensajes").hide(1000);
                console.log("entro por complete eliminar");
                console.log(status);
                listarRespuesta();
            }
        });
    }

}



function listarRespuesta(){

    var objMOdulos = new Manejomodulos();

    let datos =objMOdulos.listarOperario();
   // console.log(datos);
    //objMOdulos.mostrarinformacion(datos);

}

function mostrarinformacion(vecitems){
            $("#listar_contenidos").html("");
            $("#listar_contenidos").show(500);
            
            var tabla = `
            <div class="table-responsive">
             <table class="table table-striped table-sm">
          
                    <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">telefono</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Email</th>
                            </tr>
                          </thead>`;
        
            //recorre el arreglo de 'items' y construye dinamicamente la fila de datos de la tabla for (var i = 0; i < items2.length; i++)
             
            vecitems.forEach((items)=>{
               // console.log(items);
                tabla += `<tr>
                <th scope="row">${items[0]}</th>
                          <td>${items['nombre']}</td>
                          <td>${items['apellido']}</td>
                          <td>${items['direccion']}</td>
                          <td>${items['telefono']}</td>
                          <td>${items['cargo']}</td>
                          <td>${items['email']}</td>
                          <td id="id-boton"><button id="boton-primary" class="btn btn-primary btn-sm" onclick="enviaridoperario(${items.id});">Editar</td>
                          <td id="id-boton"><button type="button" class="btn btn-dark btn-sm" onclick="eliminaroperario(${items.id});">Borrar</button></td>                
                           </tr>`;
            
                           
            //cierra tabla agregando el tag adecuado
            
        
            //accede al elemento con id 'listado' y adiciona la tabla de datos a su html
           
             });
             tabla += `</table></div>`;
             $("#listar_contenidos").html(tabla);
}

function enviaridoperario(id) //,nombre,apellido,direccion,telefono,cargo,email)
{
   
    $("#codigoId").val(id);
   // $("#apellidOperario").val(id);

    //recorre el arreglo de 'items' y construye dinamicamente la fila de datos de la tabla for (var i = 0; i < items2.length; i++)
     
    items.forEach((items)=>{
       // console.log(items);
        tabla += `<tr>
        <th scope="row">${items[0]}</th>
                  <td>${items['fecha']}</td>
                  <td>${items['descripcion']}</td>
                  <td>${items['costoxprenda']}</td>
             
                  <td id="id-boton"><button id="boton-primary" class="btn btn-primary btn-sm" onclick="enviaridoperaciones(${items.id});">Editar</td>
                  <td id="id-boton"><button type="button" class="btn btn-dark btn-sm" onclick="eliminaroperaciones(${items.id});">Borrar</button></td>                
                   </tr>`;
    
                   
    //cierra tabla agregando el tag adecuado
    

    //accede al elemento con id 'listado' y adiciona la tabla de datos a su html
   
     });
     tabla += `</table></div>`;
     $("#listar_contenidos").html(tabla);
    }



function llenarcampos(datos){

    $("#nombreOperario").val(datos.nombre);
    $("#apellidOperario").val(datos.apellido);
    $("#direccionOperario").val(datos.direccion);
    $("#telefonOperario").val(datos.telefono);
    $("#cargOperario").val(datos.cargo);
    $("#emailOperario").val(datos.email);
    
    }

    function actualizaOperario(){

        var objMOdulos = new Manejomodulos();
        
        var id=$("#codigoId").val();
        objMOdulos.actualizarOperario(id);
        
    
    }
    function guardarOperador(){
        var objMOdulos = new Manejomodulos();
        let validar=validarOperario();
        // console.log(validar);
        if (validar){
             respuesta=objMOdulos.registrarOperario();
        }
}

function eliminaroperario(id){

    var objMOdulos = new Manejomodulos();
    
        objMOdulos.eliminar(id);

}
function enviaridoperario(id) //,nombre,apellido,direccion,telefono,cargo,email)
{  
    $("#codigoId").val(id);
    var objModulos = new Manejomodulos();
    objModulos.consultarOperarioxId(id);
}
