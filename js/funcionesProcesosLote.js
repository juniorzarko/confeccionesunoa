
class ProcesoLotes{

    registrarProceso(){
        let datos={
            fecha_mvto:$("#fechaOperaciones").val(),
            id_operaciones:$("#operacion-general").val(),
          //  codigoOperador:$("#operadorSelect").value,
            unidad_hora:0, 
            unidadTotalDia:$("#cantidad").val(),
            salarioDia:0,
            total:0,
            observaciones:$("#observaciones").val(),
            id_lote:6,
            id_operario:$("#operadorSelect").val(),
        }

       $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
      
            url: "http://localhost/confeccionesunoa/principal.php/modulo/asignar",
           
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
               // listarmodoperaciones();
            }
        });
      

    }

    
    //inicio
    
    listarproceso(){
        $.ajax({
            url: "http://localhost/confeccionesunoa/principal.php/operaciones/listar",
            type: 'GET',
            dataType: 'json',
            success: function (respuesta) {
                console.log("entro por success listar");
                $("#mensajes").html("llego respuesta");
                $("#mensajes").hide(1000);
               console.log(respuesta)
               //Llenar el select de procesos con las operaciones
               let select = document.getElementById('selectorProceso');
               selectorproceso(respuesta, select);
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
            url: "http://localhost/confeccionesunoa/principal.php/modulo/listar",
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
                mostrarinformacionModulos(respuesta);
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

    listarOperario(){
         $.ajax({
            url: "http://localhost/confeccionesunoa/principal.php/Operario/listar",
            type: 'GET',
            dataType: 'json',
            success: function (respuesta) {
                console.log("entro por success listar");
                $("#mensajes").html("llego respuesta");
                $("#mensajes").hide(1000);
               listarOperarios(respuesta);
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
        });
    }

    //lista las operaciones generales: ejemplo (presentacion, ensamble, delanteros) en un select en la
    //interfaz mod_procesos_lote
    listaritem(){
        $.ajax({
            url: "http://localhost/confeccionesunoa/principal.php/lote/listar",
            type: 'GET',
            dataType: 'json',
            success: function (respuesta) {
                console.log("entro por success listar");
                $("#mensajes").html("llego respuesta");
                $("#mensajes").hide(1000);
               console.log(respuesta)
               //Llenar el select de procesos con las operaciones
               let select = document.getElementById('operacion-general');
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

    //Insertar los procesos en el select de la interfaz procesos de lote
    listarProcesos(){
        $.ajax({
           url: "http://localhost/confeccionesunoa/principal.php/operacion/listar",
           type: 'GET',
           dataType: 'json',
           success: function (respuesta) {
               console.log("entro por success listar");
               $("#mensajes").html("llego respuesta");
               $("#mensajes").hide(1000);
              listarProcesosMod(respuesta);
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
       });
   }



}
//ingresa valores a el select de operaciones //tabla procesos lotes
function listarProcesosMod(respuesta){
    
    let listaOperacion = []
    let idOPeracion = [];
    let operacionSelect = document.getElementById('selectOperacion-mod');
  //  console.log(operacionSelect)
   // console.log("Se ejecuto la funcion listar Operaraciones ...")
    for (item of respuesta){
        listaOperacion.push(item[2])
        idOPeracion.push(item.id)

   //     console.log(listaOperaciones)
    }
    
    for (value in listaOperacion){
        var option = document.createElement("option");
        option.text = listaOperacion[value];
        option.value = idOPeracion[value];

        operacionSelect.add(option)
    }
}


   function procesosLotes1(){
    $("#idPrincipal").show(500);
    $("#idPrincipal").load("front/mod_procesos_lote.php");
    console.log("Se ejecuto procesos lotes")
    var objManejoProcesLotes = new ProcesoLotes;
    objManejoProcesLotes.listarOperario();
    objManejoProcesLotes.listarProcesos();
    objManejoProcesLotes.listaritem();
    objManejoProcesLotes.listarproceso();
    
           
} 


function asignaroperacion(){
    var objManejoProcesLotes = new ProcesoLotes;
    objManejoProcesLotes.registrarProceso();
}

function listarasignaciones(){

    var objManejoProcesLotes = new ProcesoLotes;
    objManejoProcesLotes.listarModulo();

}

//RESPUESTA LISTAR MODULOS

function mostrarinformacionModulos(datos){

    let tablaModulos = document.getElementById('tabladatos');
    console.log(tablaModulos);

}
