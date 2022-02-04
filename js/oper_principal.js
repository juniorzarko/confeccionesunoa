/* Brayan actualizar */
class Manejomodulos{ // clase que maneja las opciones de ingreso del operador

    DOMprincipal;

    cargarDOM() {

        let DOMprincipal = window.document.ready
        return;
    }
    /* Alexis actualizar */

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

    actualizarOperario(id){   // este es editar

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

//procesos
class ManejOperaciones{

    registrarModulo(){
        let datos={
            fecha:$("#fechaOperaciones").val(),
            descripcion:$("#nombreOperaciones").val(),
            costoxprenda:$("#costoxprenda").val(),
              
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

//interfaz operaciones generales
class ManejOperacion{
    registrarOperacion(){
        let datos={
            fecha:$("#fechaOperacion").val(),
            nombre:$("#nombreOperacion").val(),
       
    
        }
        
       $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
      
            url: "http://localhost/confeccionesunoa/principal.php/operacion/registrar",
           
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


    listaritem(){


        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/principal.php/operacion/listar",
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
               mostrarinformacionoperacion(respuesta);
               console.log(respuesta)
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

  //ingresa valores a el select de operaciones 
  function listarProcesosMod(respuesta){
    
    let listaOperaciones = []
    let operacionSelect = document.getElementById('selectOperacion-mod');
    console.log(operacionSelect)
    console.log("Se ejecuto la funcion listar Operaraciones ...")
    for (item of respuesta){
        listaOperaciones.push(item[2])
        console.log(listaOperaciones)
    }
    
    for (value in listaOperaciones){
        var option = document.createElement("option");
        option.text = listaOperaciones[value];
        operacionSelect.add(option)
    }
}
class ProcesoLotes{

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
            url: "http://localhost/confeccionesunoa/principal.php/operacion/listar",
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
           url: "http://localhost/confeccionesunoa/principal.php/operaciones/listar",
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
   }}

  

/**METODO PARA CARGAR TODOS LOS IDS cuando se inicia el documento */

$(document).ready(function () {
    //configura el aspecto inicial de la pagina
    $("#mensaje").html("principal.php");

});

// *****Enlaes de paginas Principal *******
function inicioGeneral(){
    window.location.replace("http://localhost/confeccionesunoa/principal.php");
    
}

function ir_a_pagnomina(){
    window.location.replace("http://localhost/confeccionesunoa/principal-nom.php");
    
}
function ir_a_pageinventarios(){
    window.location.replace("http://localhost/confeccionesunoa/principal-inv.php");
        
}
function ir_a_pagefacturacion() {
    window.location.replace("http://localhost/confeccionesunoa/principal-fac.php");

}
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
       // inicializar_form();

        
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
        console.log("Operaciones 2 se ejecuto")
        var objManejOperaciones = new ManejOperaciones;
        objManejOperaciones.listaritem();
               
}    
function procesosLotes1(){
        $("#idPrincipal").show(500);
        $("#idPrincipal").load("front/mod_procesos_lote.php");
        console.log("Se ejecuto procesos lotes")
        var objManejoProcesLotes = new ProcesoLotes;
        objManejoProcesLotes.listarOperario();
        objManejoProcesLotes.listarProcesos();
        objManejoProcesLotes.listaritem();
        
               
} 
function guardarOperador(){
        var objMOdulos = new Manejomodulos();
        let validar=validarOperario();
        // console.log(validar);
        if (validar){
             respuesta=objMOdulos.registrarOperario();
        }
}
// *****Enlaes de paginas Principal-nom *******
// *****Enlaes de paginas Principal-inv *******
// *****Enlaes de paginas Principal-fac *******


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

    
function mostrarinformacionoperacion(items){
                $("#listar_contenidos").html("");
                $("#listar_contenidos").show(500);
                
                var tabla = `
                <div class="table-responsive">
                 <table class="table table-striped table-sm">
              
                        <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Nombre</th>
                                                          
                                </tr>
                              </thead>`;
            
                //recorre el arreglo de 'items' y construye dinamicamente la fila de datos de la tabla for (var i = 0; i < items2.length; i++)
                 
                items.forEach((items)=>{
                   // console.log(items);
                    tabla += `<tr>
                    <th scope="row">${items['id']}</th>
                              <td>${items['fecha']}</td>
                              <td>${items['nombre']}</td>
                            
                             
                              <td id="id-boton"><button id="boton-primary" class="btn btn-primary btn-sm" onclick="listarlotexid(${items.id});">Editar</td>
                              <td id="id-boton"><button type="button" class="btn btn-dark btn-sm" onclick="eliminarlotexid(${items.id});">Borrar</button></td>                
                               </tr>`;
                
                               
                //cierra tabla agregando el tag adecuado
                
            
                //accede al elemento con id 'listado' y adiciona la tabla de datos a su html
               
                 });
                 tabla += `</table></div>`;
                 $("#listar_contenidos").html(tabla);
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



function enviaridoperario(id) //,nombre,apellido,direccion,telefono,cargo,email)
{  
    $("#codigoId").val(id);
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
   
    objlote.actualizarlotexid(id);
}

/**INICIO DE FUNCIONES DE LA TABLA OPERACION */
function listarOperaciones (respuesta, select){
    let listaOperaciones = []
    /* let operacionesSelect = document.getElementById('operacionesSelect'); */
    console.log(select)
    console.log("Se ejecuto la funcion listar Operaciones...")
    for (item of respuesta){
        listaOperaciones.push(item[2])
        console.log(listaOperaciones)
    }
    
    for (value in listaOperaciones){
        var option = document.createElement("option");
        option.text = listaOperaciones[value];
        select.add(option)
    }

}

function guardarOperacion(){
    let objOperacion = new ManejOperacion();
     objOperacion.registrarOperacion();


}

// LLama funcion listar Operador

function listarOperacion() {

    let objOperacion = new ManejOperacion();
    objOperacion.listaritem();  
    
}


/***SE CREAN LOS MODULOS PARA OPERACIONES */
function guardarmodoperaciones(){

    let objoperaciones = new ManejOperaciones();
    objoperaciones.registrarModulo();


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

                 



	// numeros: /^\d{10}$/, // Solo 10 numeros.
	// usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	
	// password: /^.{4,12}$/, // 4 a 12 digitos.
	
	

// const campos = {
// 	nombre: false,
// 	apellido:false,
// 	direccion:false,
// 	telefono:false,
// 	cargo:false,
// 	email:false
// }

function validarOperario () {
	let nombreOperario, apellidOperario, direccionOperario, telefonOperario, cargOperario, emailOperario, codigoId, expresion;
    let valido=true;
	nombreOperario = document.getElementById("nombreOperario").value;
	apellidOperario = document.getElementById("apellidOperario").value;
	direccionOperario = document.getElementById("direccionOperario").value;
	telefonOperario = document.getElementById("telefonOperario").value;
	cargOperario = document.getElementById("cargOperario").value;
	emailOperario = document.getElementById("emailOperario").value;
	codigoId = document.getElementById("codigoId").value;
    nombresyapellidos = /^[a-zA-ZÀ-ÿ\s]{1,40}$/; // Letras y espacios, pueden llevar acentos.
    correo= /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/

	
    if(nombreOperario === "" || apellidOperario === "" || direccionOperario === "" || telefonOperario === "" || cargOperario === "" || emailOperario === "") {
		alert ("Todos los campos son Obligatorios");
        valido=false;
        return valido;
	}
    else if (nombreOperario.length>50) {
        alert("El Nombre del Operario es muy largo");
        valido=false;
        return valido;
    }
    else if (!nombresyapellidos.test(nombreOperario)){
        alert("El Nombre del Operario no es valido");
        valido=false;
        return valido;
    }
    else if (apellidOperario.length>100) {
        alert("El Apellido es muy largo");
        valido=false;
        return valido;
    }

    else if (!nombresyapellidos.test(apellidOperario)) {
        alert("El Apellido del Operario no es valido");
        valido=false;
        return valido;
    }
    else if (direccionOperario.length>500) {
        alert("La direccion es muy largo");
        valido=false;
        return valido;
    }
    else if (telefonOperario.length>15) {
        alert("Numero teléfonico muy largo");
        valido=false;
        return valido;
    }
    else if (isNaN(telefonOperario)) {
        alert("Solo Números");
        valido=false;
        return valido;
    }
    else if (cargOperario.length>100) {
        alert("El Nombre del Cargo es muy largo");
        valido=false;
        return valido;
    }
    else if (!nombresyapellidos.test(cargOperario)) {
        alert("Nombre del cargo tiene cracteres Incorrectos");
        valido=false;
        return valido;
    }
    else if (emailOperario.length>50) {
        alert("El Correo electronico es muy largo");
        valido=false;
        return valido;
    }
    else if (!correo.test(emailOperario)) {
        alert("Correo Electronico no valido");
        valido=false;
        return valido;
    }

    else {
        return valido;
    }

    
}