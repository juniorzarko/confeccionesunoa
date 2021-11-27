class Manejomodulos{

    DOMprincipal;

    cargarDOM() {

        let DOMprincipal = window.document.ready
        return;
    }

   

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

    actualizarOperario(id){

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
               
                //recibe el arreglo 'items' de la respuesta a la petición
               llenarcampos(respuesta);
              
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
          
            },

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

}

class Manejolotes{

    registrarlote(){
        let datos={
            codigoLote:$("#codigoLote").val(),
            nombre:$("#nombre_lote").val(),
            cantidad:$("#cantidad").val(),
            fechaCreacion:$("#fecha").val(),
          // password:$("#password").val()
    
        }
        
       $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
      
            url: "http://localhost/confeccionesunoa/principal.php/lote/registrar",
           
            data : datos,
            type: 'POST',
            dataType: 'json',
            success: function (respuesta) {
                //escribe en la consola del desarrollador para efectos de depuración
                console.log(respuesta);
                console.log("Llego la respuesta por success");
                alert("Usuario ha sido creado");
                //rec   ibe el arreglo 'items' de la respuesta a la petición
               // listarRespuesta(respuesta);
            },
            error: function (xhr, status) {
                $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
                //$("#mensajes").hide(1000);
                
                console.log("entro por error");
                console.log(xhr);
            },
    
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                $("#mensajes").html("Obteniendo lista...");
                $("#mensajes").hide(500);
                console.log("entro por complete");
            }
        });
      

    }

    listarlote(){

        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/principal.php/lote/listar",
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
               mostrarinformacionlote(respuesta);
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
        consultarlotexId(id){

            $.ajax({
                // la URL para la petición (url: "url al recurso o endpoint")
               // url: "http://localhost:8080/api/Cabin/all",
                url: "http://localhost/confeccionesunoa/principal.php/lote/buscarxid/"+id,
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
                   llenarcamposlote(respuesta);
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
    
        actualizarlotexid(id){
    
            let datos={
                codigoLote:$("#codigoLote").val(),
                nombre:$("#nombre_lote").val(),
                cantidad:$("#cantidad").val(),
                fechaCreacion:$("#fecha").val()    
            }
    
        //    let datos = JSON.stringify(datos_vect);
            $.ajax({
               
                url: "http://localhost/confeccionesunoa/principal.php/lote/actualizar/"+id,
          
    
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
                   
                    //recibe el arreglo 'items' de la respuesta a la petición
                  // mostrarinformacionlote();
                  
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
    
        eliminarlote(id){
    
            $.ajax({
                // la URL para la petición (url: "url al recurso o endpoint")
               // url: "http://localhost:8080/api/Cabin/all",
                url: "http://localhost/confeccionesunoa/principal.php/lote/eliminar/"+id,
           
        
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
              
                },
    
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




}

/**METODO PARA CARGAR TODOS LOS IDS cuando se inicia el documento */
$(document).ready(function () {
    //configura el aspecto inicial de la pagina
    $("#mensaje").html("principal.php");

});


function inicializarmod(){

    $("#idPrincipal").hide();
    $("#listar_contenidos").html("");
    $("#listar_contenidos").hide(500);
  

}

function desplegarusuarios1(){
    $("#idPrincipal").show(500);

   $("#idPrincipal").load("front/mod_usuarios.php");
  
    }

function desplegarusuarios2(){
        $("#idPrincipal").show(500);
        $("#idPrincipal").load("front/mod_operador.php");
        
         }
     

function desplegarlote1(){
    $("#idPrincipal").show(500);
   
    $("#idPrincipal").load("front/mod_alote.php");
    
}
function desplegarlote2(){
    $("#idPrincipal").show(500);
    $("#idPrincipal").load("front/mod_alote.php");
}


function desplegaroperaciones1(){
   
     $("#idPrincipal").load("front/mod_operaciones.php");
            
    }
    function desplegaroperaciones2(){
        $("#idPrincipal").show(500);
        $("#idPrincipal").load("front/mod_operaciones.php");
               
       }
       
    function procesosLotes1(){
        $("#idPrincipal").show(500);
        $("#idPrincipal").load("front/mod_procesos_lote.php");
               
       } 

function guardarOperador(){
        var objMOdulos = new Manejomodulos();

        respuesta=objMOdulos.registrarOperario();
  
}

function listarRespuesta(){

    var objMOdulos = new Manejomodulos();

    let datos =objMOdulos.listarOperario();
   // console.log(datos);
    //objMOdulos.mostrarinformacion(datos);

}

function listarRespuestalote(){

    var objMOdulos = new Manejomodulos();

    let datos =objMOdulos.listarlote();
   // console.log(datos);
    //objMOdulos.mostrarinformacion(datos);

}
    
function desplegaroperacion1(){
   
        $("#idPrincipal").load("front/mod_operacion.php");
               
       }
function desplegaroperacion2(){
           $("#idPrincipal").show(500);
           $("#idPrincipal").load("front/mod_operacion.php");
                  
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
function mostrarinformacionlote(vecitems){
                $("#listar_contenidos").html("");
                $("#listar_contenidos").show(500);
                
                var tabla = `
                <div class="table-responsive">
                 <table class="table table-striped table-sm">
              
                        <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Codigo Lote</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Fecha Creación</th>
                               </tr>
                              </thead>`;
            
                //recorre el arreglo de 'items' y construye dinamicamente la fila de datos de la tabla for (var i = 0; i < items2.length; i++)
                 
                vecitems.forEach((items)=>{
                   // console.log(items);
                    tabla += `<tr>
                    <th scope="row">${items[0]}</th>
                              <td>${items['codigoLote']}</td>
                              <td>${items['nombre']}</td>
                              <td>${items['cantidad']}</td>
                              <td>${items['fechaCreacion']}</td>
                              <td id="id-boton"><button id="boton-primary" class="btn btn-primary btn-sm" onclick="enviaridlote(${items.id});">Editar</td>
                              <td id="id-boton"><button type="button" class="btn btn-dark btn-sm" onclick="eliminarlote(${items.id});">Borrar</button></td>                
                               </tr>`;
                
                               
                //cierra tabla agregando el tag adecuado
                
            
                //accede al elemento con id 'listado' y adiciona la tabla de datos a su html
               
                 });
                 tabla += `</table></div>`;
                 $("#listar_contenidos").html(tabla);
                }

/** ACCIONES DE BOTONES DE MANEJO FORMULAROS **/

    
function mostrarinformacionlote(vecitems){
                $("#listar_contenidos").html("");
                $("#listar_contenidos").show(500);
                
                var tabla = `
                <div class="table-responsive">
                 <table class="table table-striped table-sm">
              
                        <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Codigo Lote</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Fecha Creacion</th>
                           
                                </tr>
                              </thead>`;
            
                //recorre el arreglo de 'items' y construye dinamicamente la fila de datos de la tabla for (var i = 0; i < items2.length; i++)
                 
                vecitems.forEach((items)=>{
                   // console.log(items);
                    tabla += `<tr>
                    <th scope="row">${items['id']}</th>
                              <td>${items['codigoLote']}</td>
                              <td>${items['nombre']}</td>
                              <td>${items['cantidad']}</td>
                              <td>${items['fechaCreacion']}</td>
                             
                              <td id="id-boton"><button id="boton-primary" class="btn btn-primary btn-sm" onclick="listarlotexid(${items.id});">Editar</td>
                              <td id="id-boton"><button type="button" class="btn btn-dark btn-sm" onclick="eliminarlotexid(${items.id});">Borrar</button></td>                
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

    var objModulos = new Manejomodulos();
    

    objModulos.consultarOperarioxId(id);


}

//$("#consolaphp").html();
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

function eliminaroperario(id){

    var objMOdulos = new Manejomodulos();
    
        objMOdulos.eliminar(id);

}

function registrarlote(){

    let objLote = new Manejolotes();
    objLote.registrarlote();
}


function listarlotes(){

    let objLote = new Manejolotes();
    objLote.listarlote();
    
}

function listarlotexid(id){
   
   
    $("#idlote").val(id);
    // $("#apellidOperario").val(id);
 
     var objlote = new Manejolotes();
     objlote.consultarlotexId(id);
      

}

function llenarcamposlote(datos){
    $("#codigoLote").val(datos.codigoLote);
    $("#nombre_lote").val(datos.nombre);
    $("#cantidad").val(datos.cantidad);
    $("#fecha").val(datos.fechaCreacion);
}

function eliminarlotexid(id){
    var objlote = new Manejolotes();
      objlote.eliminarlote(id);
      


}

function actualizarlote(){
    var objlote = new Manejolotes();
    //objlote.consultarlotexId(id);
    let id=$("#idlote").val();
    console.log(id);
    objlote.actualizarlotexid(id);

}
