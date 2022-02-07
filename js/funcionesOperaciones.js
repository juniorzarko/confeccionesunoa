//procesos
class ManejOperaciones{

    registrarModulo(){
        let datos={
            fecha:$("#fechaOperaciones").val(),
            descripcion:$("#nombreOperaciones").val(),
            costoxprenda:$("#costoxprenda").val(),
            idOperacion:$("#operacionesSelect").val() 
        }

       $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
      
            url: "http://localhost/confeccionesunoa/principal.php/operaciones/registrar",
           
            data : datos,
            type: 'POST',
            dataType: 'json',
            success: function (respuesta) {
                //escribe en la consola del desarrollador para efectos de depuración
                console.log(respuesta);
                console.log("Llego la respuesta por success");
                alert("Operacion guardada");
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
                listarmodoperaciones();
            }
        });
      

    }

    
    //inicio
    listaritem(){
        $.ajax({
            url: "http://localhost/confeccionesunoa/principal.php/operacion/listar",
            type: 'GET',
            dataType: 'json',
            success: function (respuesta) {
                console.log("entro por success listar");
                $("#mensajes").html("llego respuesta");
                $("#mensajes").hide(1000);
               console.log(respuesta)
               //Llenar el select de procesos con las operaciones
               let select = document.getElementById('operacionesSelect');
               listarOperaciones(respuesta, select);
            },
            error: function (xhr, status) {
                $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
                console.log("entro por error listar");
                console.log(status);
            },
            complete: function (xhr, status) {
                $("#mensajes").html("Usuario no existe");
                console.log("entro por complete listar");
                console.log(status);
            }
        });}
    //fin


    listarModulo(){

        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/principal.php/operaciones/listar",
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
                mostrarinformacionoperaciones(respuesta);
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
        consultaroperacionesxId(id){

            $.ajax({
                // la URL para la petición (url: "url al recurso o endpoint")
               // url: "http://localhost:8080/api/Cabin/all",
                url: "http://localhost/confeccionesunoa/principal.php/operaciones/buscarxid/"+id,
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
                   llenarcamposoperaciones(respuesta);
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
    
        actualizaroperacionesxid(id){
    
            let datos={
                fecha:$("#fechaOperaciones").val(),
                descripcion:$("#nombreOperaciones").val(),
                costoxprenda:$("#costoxprenda").val(),    
            }
    
        //    let datos = JSON.stringify(datos_vect);
            $.ajax({
               
                url: "http://localhost/confeccionesunoa/principal.php/operaciones/actualizar/"+id,
          
    
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
    
        eliminaroperaciones(id){
    
            $.ajax({
                // la URL para la petición (url: "url al recurso o endpoint")
               // url: "http://localhost:8080/api/Cabin/all",
                url: "http://localhost/confeccionesunoa/principal.php/operaciones/eliminar/"+id,
           
        
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
/***SE CREAN LOS MODULOS PARA OPERACIONES */
function guardarmodoperaciones(){

    let objoperaciones = new ManejOperaciones();
    objoperaciones.registrarModulo();


}


 
//Me ingresa valores en el select de operador
function listarOperarios(respuesta){
    
    let listaOperaciones = []
    let operadorSelect = document.getElementById('operadorSelect');
    console.log(respuesta)
    console.log("Se ejecuto la funcion listar Operarios...")
    for (item of respuesta){
        listaOperaciones.push(primeraLetraMayuscula(item[1]) +" "+ primeraLetraMayuscula(item[2]) )
        console.log(listaOperaciones)
    }
    
    for (value in listaOperaciones){
        var option = document.createElement("option");
        option.text = listaOperaciones[value];
        operadorSelect.add(option)
    }
}
const primeraLetraMayuscula = (cadena) => {
    const primerCaracter = cadena.charAt(0).toUpperCase();
    const restoDeLaCadena = cadena.substring(1, cadena.length);
    return primerCaracter.concat(restoDeLaCadena);
  }

  function  mostrarinformacionoperaciones(items){
    $("#listar_contenidos").html("");
    $("#listar_contenidos").show(500);
    
    var tabla = `
    <div class="table-responsive">
     <table class="table table-striped table-sm">
  
            <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">costoxprenda</th>
                  
                   </tr>
         
         
                   </thead>`;

                       //recorre el arreglo de 'items' y construye dinamicamente la fila de datos de la tabla for (var i = 0; i < items2.length; i++)
                 
                items.forEach((items)=>{
                    // console.log(items);
                     tabla += `<tr>
                     <th scope="row">${items['id']}</th>
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

/**INICIO DE FUNCIONES DE LA TABLA OPERACION */
function listarOperaciones (respuesta, select){
    console.log("Se ejecuto listar Operaciones")
    let listaOperaciones = []
    let idOPeraciones = []
    
    console.log(select)
    console.log("Se ejecuto la funcion listar Operaciones...")
    for (item of respuesta){
        listaOperaciones.push(item[2])
        console.log(listaOperaciones)
        idOPeraciones.push(item.id)
    }
    
    for (value in listaOperaciones){
        var option = document.createElement("option");
        option.text = listaOperaciones[value];
        option.value = idOPeraciones[value];
        console.log(idOPeraciones[value]);
        select.add(option)
    }

}
function listarmodoperaciones(){
    let objoperaciones = new ManejOperaciones();
    objoperaciones.listarModulo();


}


function enviaridoperaciones(id){
    //$("#codigoId").val(id);
    let objoperaciones = new ManejOperaciones();
    objoperaciones.consultaroperacionesxId(id);

}

function llenarcamposoperaciones(datos){
    $("#idoperaciones").val(datos.id);
    $("#fechaOperaciones").val(datos.fecha);
    $("#nombreOperaciones").val(datos.descripcion);
    $("#costoxprenda").val(datos.costoxprenda);

}
function actualizarmodoperaciones(){
    let id=$("#idoperaciones").val();
    let objoperaciones = new ManejOperaciones();
    objoperaciones.actualizaroperacionesxid(id);


}

function eliminaroperaciones(id){

    let objoperaciones = new ManejOperaciones();
    objoperaciones.eliminaroperaciones(id);
}
