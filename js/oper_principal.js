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


}

function inicializarmod(){

    $("#idPrincipal").hide();
    $(".data-bs-toggle").val("true");

}

function desplegarusuarios1(){
    $("#idPrincipal").show(500);

   $("#idPrincipal").load("front/mod_usuarios.php");
  
    }
    function desplegarusuarios2(){
    
        $("#usuarios").load("front/mod_operador.php");
        
         }
     

function desplegarlote1(){
    $("#idPrincipal").show(500);
   
    $("#idPrincipal").load("front/mod_alote.php");
    
}
function desplegarlote2(){
   
    $("#lotes").load("front/mod_alote.php");
}


function desplegaroperaciones1(){
    $("#idPrincipal").show(500);
     $("#idPrincipal").load("front/mod_operaciones.php");
            
    }
    function desplegaroperaciones2(){
    
        $("#operaciones").load("front/mod_operaciones.php");
               
       }
    

//var controlweb = new Manejomodulos(); 

//$("#visualizar_form").load("front/mod_alote.php");
