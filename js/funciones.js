/* Funcionalidades */
$(document).ready(function () {
    //configura el aspecto inicial de la pagina
    iniciarmodulos();
});


function iniciarmodulos(){
    
    $("#logueo").show(500);
    $("#registro").hide();
    

}

function iniciarsesion(){
   

    let datos={
        usuario:$("#log_usuario").val(),
        password:$("#log_password").val()

    }

    $.ajax({
        // la URL para la petición (url: "url al recurso o endpoint")
       // url: "http://localhost:8080/api/Cabin/all",
        url: "http://localhost/confeccionesunoa/index.php/user/ingresar",
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
            window.location.replace("http://localhost/confeccionesunoa/principal.php");
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
  


function registrarusuario(){
    

        let datos={
            nombre:$("#reg_usuario").val(),
            usuario:$("#reg_usuario").val(),
            clave:$("#clave").val(),
            email:$("#email").val(),
            estado: "Activo",//$("#estado").val();
           // password:$("#password").val()
    
        }
        
       //console.log(datos);

        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/index.php/user/registrar",
            // la información a enviar
            // (también es posible utilizar una cadena de datos)
            //si el metodo del servicio recibe datos, es necesario definir el parametro adicional
            data : datos,
    
            // especifica el tipo de petición http: POST, GET, PUT, DELETE
            type: 'POST',
    
            // el tipo de información que se espera de respuesta
            dataType: 'json',
            
            // código a ejecutar si la petición es satisfactoria;
            // la respuesta es pasada como argumento a la función
            success: function (respuesta) {
                //escribe en la consola del desarrollador para efectos de depuración
                console.log(respuesta);
                console.log("Llego la respuesta por success");
                alert("Usuario ha sido creado");
                //rec   ibe el arreglo 'items' de la respuesta a la petición
               // listarRespuesta(respuesta);
            },
    
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
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

function registrar(){
    $("#logueo").hide();
    $("#registro").show();


}