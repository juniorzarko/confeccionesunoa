//lotes
class Manejolotes{

    
    registrarlote(){
        let datos={
            codigoLote:$("#codigoLote").val(),
            nombre:$("#nombreLote").val(),
            cantidad:$("#cantidadLote").val(),
            fechaCreacion:$("#fechalote").val(),
          // password:$("#password").val()
    
        }
        
        
       $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint" mono )
      
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
                listarlotes();
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
                nombre:$("#nombreLote").val(),
                cantidad:$("#cantidadLote").val(),
                fechaCreacion:$("#fechalote").val()    
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
                    listarlotes();
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

function registrarlote(){
    console.log("Se ejecuto registrar lote")
    let objLote = new Manejolotes();
    objLote.registrarlote();
}
function listarlotes(){
    let objLote = new Manejolotes();
    objLote.listarlote(); 
}
function listarlotexid(id){
    $("#idlote").val(id);
    var objlote = new Manejolotes();
    objlote.consultarlotexId(id);
}
function llenarcamposlote(datos){
    $("#codigoLote").val(datos.codigoLote);
    $("#nombreLote").val(datos.nombre);
    $("#cantidadLote").val(datos.cantidad);
    $("#fechalote").val(datos.fechaCreacion);
}
function eliminarlotexid(id){
    var objlote = new Manejolotes();
      objlote.eliminarlote(id);
      
}
function actualizarlote(){
    var objlote = new Manejolotes();
    //objlote.consultarlotexId(id);
    let id=$("#idlote").val();
    objlote.actualizarlotexid(id);
}
/* function enviarIdLote(id){
    document.getElementById('idLote').value(id);
    var objlote = new Manejolotes();
    objlote.actualizarlotexid(id)

} */
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
                  <td id="id-boton"><button id="boton-primary" class="btn btn-primary btn-sm" onclick="listarlotexid(${items.id});">Editar</td>
                  <td id="id-boton"><button type="button" class="btn btn-dark btn-sm" onclick="eliminarlotexid(${items.id});">Borrar</button></td>                
                   </tr>`;
    
                   
    //cierra tabla agregando el tag adecuado
    

    //accede al elemento con id 'listado' y adiciona la tabla de datos a su html
   
     });
     tabla += `</table></div>`;
     $("#listar_contenidos").html(tabla);
}
