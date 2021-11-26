class Manejomodulos{

    DOMprincipal;

    cargarDOM() {

        let DOMprincipal = window.document.ready
        return;
    }

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
      
            url: "http://localhost/confeccionesunoa/principal.php/lote/ingresar",
           
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
                console.log(respuesta);
                console.log("Llego la respuesta por success");
                alert("Usuario ha sido creado");

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

    listarOperario(){

    $.ajax({
        // la URL para la petición (url: "url al recurso o endpoint")
       // url: "http://localhost:8080/api/Cabin/all",
        url: "http://localhost/confeccionesunoa/index.php/Operario/listar",
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        //si el metodo del servicio recibe datos, es necesario definir el parametro adicional
        data : datos,

        // especifica el tipo de petición http: POST, GET, PUT, DELETE
        type: 'GET',

        // el tipo de información que se espera de respuesta
        dataType: 'json',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (respuesta) {
            //escribe en la consola del desarrollador para efectos de depuración
            console.log("entro por success");
            console.log(respuesta);
            $("#mensajes").html("llego respuesta");
            $("#mensajes").hide(1000);
           
            //recibe el arreglo 'items' de la respuesta a la petición
           // listarRespuesta(respuesta);
        },

        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error: function (xhr, status) {
            $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
            //$("#mensajes").hide(1000);
            console.log("entro por error ingresar");
            console.log(status);
        },

        // código a ejecutar sin importar si la petición falló o no
        complete: function (xhr, status) {
            $("#mensajes").html("Usuario no existe");
            //$("#mensajes").hide(1000);
            console.log("entro por complete ingresar");
            console.log(status);
        }
    });


    }




}

function inicializarmod(){

    $("#idPrincipal").hide();
  

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

        objMOdulos.registrarOperario();


}

function listarRespuesta(respuesta){

    

}
    
       function desplegaroperacion1(){
   
        $("#idPrincipal").load("front/mod_operacion.php");
               
       }
       function desplegaroperacion2(){
           $("#idPrincipal").show(500);
           $("#idPrincipal").load("front/mod_operacion.php");
                  
          }


gsap 