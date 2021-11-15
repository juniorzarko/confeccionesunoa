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
        usuario:$("#usuario").val(),
        password:$("#password").val()

    }

    $.ajax({
        // la URL para la petición (url: "url al recurso o endpoint")
       // url: "http://localhost:8080/api/Cabin/all",
        url: "localhost/principal.php",
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
            console.log(respuesta);

            //recibe el arreglo 'items' de la respuesta a la petición
            listarRespuesta(respuesta);
        },

        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error: function (xhr, status) {
            $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
            //$("#mensajes").hide(1000);
        },

        // código a ejecutar sin importar si la petición falló o no
        complete: function (xhr, status) {
            $("#mensajes").html("Obteniendo listado de Cabañas...");
            $("#mensajes").hide(1000);
        }
    });
}
  


function registrarusuario(){
    

        let datos={
            nombre:$("#usuario").val(),
            usuario:$("#usuario").val(),
            clave:$("#clave").val(),
            email:$("#email").val(),
            estado: "Activo",//$("#estado").val();
           // password:$("#password").val()
    
        }
        
       console.log(datos);

        $.ajax({
            // la URL para la petición (url: "url al recurso o endpoint")
           // url: "http://localhost:8080/api/Cabin/all",
            url: "http://localhost/confeccionesunoa/index.php",
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
                console.log("dio respuesta");
                //recibe el arreglo 'items' de la respuesta a la petición
               // listarRespuesta(respuesta);
            },
    
            // código a ejecutar si la petición falla;
            // son pasados como argumentos a la función
            // el objeto de la petición en crudo y código de estatus de la petición
            error: function (xhr, status) {
                $("#mensajes").html("Ocurrio un problema al ejecutar la petición..." + status);
                //$("#mensajes").hide(1000);
                console.log("problemas al conectar");
            },
    
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                $("#mensajes").html("Obteniendo lista...");
                $("#mensajes").hide(1000);
            }
        });
}

function registrar(){
    $("#logueo").hide();
    $("#registro").show();


}