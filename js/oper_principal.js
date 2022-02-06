/**METODO PARA CARGAR TODOS LOS IDS cuando se inicia el documento */

$(document).ready(function () {
  //configura el aspecto inicial de la pagina
  $("#mensaje").html("principal.php");
});

// *****Enlaes de paginas Principal *******
function inicioGeneral() {
  window.location.replace("http://localhost/confeccionesunoa/principal.php");
}

function ir_a_pagnomina() {
  window.location.replace(
    "http://localhost/confeccionesunoa/principal-nom.php"
  );
}
function ir_a_pageinventarios() {
  window.location.replace(
    "http://localhost/confeccionesunoa/principal-inv.php"
  );
}
function ir_a_pagefacturacion() {
  window.location.replace(
    "http://localhost/confeccionesunoa/principal-fac.php"
  );
}
function inicializarmod() {
  $("#idPrincipal").hide();
  $("#listar_contenidos").html("");
  $("#listar_contenidos").hide(500);
}
function desplegarusuarios1() {
  $("#idPrincipal").show(500);

  $("#idPrincipal").load("front/mod_usuarios.php");
}
function desplegarusuarios2() {
  $("#idPrincipal").show(500);
  $("#idPrincipal").load("front/mod_operador.php");
  // inicializar_form();
}
function desplegarlote1() {
  $("#idPrincipal").show(500);

  $("#idPrincipal").load("front/mod_alote.php");
}
function desplegarlote2() {
  $("#idPrincipal").show(500);
  $("#idPrincipal").load("front/mod_alote.php");
}
function desplegaroperaciones1() {
  $("#idPrincipal").load("front/mod_operaciones.php");
}
function desplegaroperaciones2() {
  $("#idPrincipal").show(500);
  $("#idPrincipal").load("front/mod_operaciones.php");
  console.log("Operaciones 2 se ejecuto");
  var objManejOperaciones = new ManejOperaciones();
  objManejOperaciones.listaritem();
}
/**INICIO DE FUNCIONES DE LA TABLA OPERACION */
/* function listarOperaciones (respuesta, select){
    let listaOperaciones = []
    let idOPeraciones = []
    let operacionesSelect = document.getElementById('operacionesSelect');
    console.log(operacionesSelect)
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
        operacionesSelect.add(option)
    }

}
 */

// *****Enlaes de paginas Principal-nom *******
// *****Enlaes de paginas Principal-inv *******
// *****Enlaes de paginas Principal-fac *******

function desplegaroperacion1() {
  $("#idPrincipal").load("front/mod_operacion.php");
}
function desplegaroperacion2() {
  $("#idPrincipal").show(500);
  $("#idPrincipal").load("front/mod_operacion.php");
}

/** ACCIONES DE BOTONES DE MANEJO FORMULAROS **/

//$("#consolaphp").html();

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

function validarOperario() {
  let nombreOperario,
    apellidOperario,
    direccionOperario,
    telefonOperario,
    cargOperario,
    emailOperario,
    codigoId,
    expresion;
  let valido = true;
  nombreOperario = document.getElementById("nombreOperario").value;
  apellidOperario = document.getElementById("apellidOperario").value;
  direccionOperario = document.getElementById("direccionOperario").value;
  telefonOperario = document.getElementById("telefonOperario").value;
  cargOperario = document.getElementById("cargOperario").value;
  emailOperario = document.getElementById("emailOperario").value;
  codigoId = document.getElementById("codigoId").value;
  nombresyapellidos = /^[a-zA-ZÀ-ÿ\s]{1,40}$/; // Letras y espacios, pueden llevar acentos.
  correo = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

  if (
    nombreOperario === "" ||
    apellidOperario === "" ||
    direccionOperario === "" ||
    telefonOperario === "" ||
    cargOperario === "" ||
    emailOperario === ""
  ) {
    alert("Todos los campos son Obligatorios");
    valido = false;
    return valido;
  } else if (nombreOperario.length > 50) {
    alert("El Nombre del Operario es muy largo");
    valido = false;
    return valido;
  } else if (!nombresyapellidos.test(nombreOperario)) {
    alert("El Nombre del Operario no es valido");
    valido = false;
    return valido;
  } else if (apellidOperario.length > 100) {
    alert("El Apellido es muy largo");
    valido = false;
    return valido;
  } else if (!nombresyapellidos.test(apellidOperario)) {
    alert("El Apellido del Operario no es valido");
    valido = false;
    return valido;
  } else if (direccionOperario.length > 500) {
    alert("La direccion es muy largo");
    valido = false;
    return valido;
  } else if (telefonOperario.length > 15) {
    alert("Numero teléfonico muy largo");
    valido = false;
    return valido;
  } else if (isNaN(telefonOperario)) {
    alert("Solo Números");
    valido = false;
    return valido;
  } else if (cargOperario.length > 100) {
    alert("El Nombre del Cargo es muy largo");
    valido = false;
    return valido;
  } else if (!nombresyapellidos.test(cargOperario)) {
    alert("Nombre del cargo tiene cracteres Incorrectos");
    valido = false;
    return valido;
  } else if (emailOperario.length > 50) {
    alert("El Correo electronico es muy largo");
    valido = false;
    return valido;
  } else if (!correo.test(emailOperario)) {
    alert("Correo Electronico no valido");
    valido = false;
    return valido;
  } else {
    return valido;
  }
}
