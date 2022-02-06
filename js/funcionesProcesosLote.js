//ingresa valores a el select de operaciones //tabla procesos lotes
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
   function procesosLotes1(){
    $("#idPrincipal").show(500);
    $("#idPrincipal").load("front/mod_procesos_lote.php");
    console.log("Se ejecuto procesos lotes")
    var objManejoProcesLotes = new ProcesoLotes;
    objManejoProcesLotes.listarOperario();
    objManejoProcesLotes.listarProcesos();
    objManejoProcesLotes.listaritem();
    
           
} 
