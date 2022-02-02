//preventDefault();
// const campos = {
// 	nombre: false,
// 	apellido:false,
// 	direccion:false,
// 	telefono:false,
// 	cargo:false,
// 	email:false
// }
// function inicializar_form(){



// 	});

// const validarFormulario = (e) => {

// 	 switch (e.target.name) {

// 		case "nombre":
// 				validarCampo(expresiones.nombre, e.target, 'nombre');
// 		break;
// 		case "apellido":
// 			validarCampo(expresiones.nombre, e.target, 'apellido');
// 		break;
// 		case "direccion":
// 			validarCampo(expresiones.nombre, e.target, 'direccion');
// 		break;

// 		case "telefono":
// 			validarCampo(expresiones.numeros, e.target, 'telefono');
// 		break;
// 		case "cargo":
// 			validarCampo(expresiones.nombre, e.target, 'cargo');
// 		break;
// 		case "email":
// 			validarCampo(expresiones.correo, e.target, 'email');
// 		break;

// 	}
// }
// const validarCampo = (expresion, input, campo) => {
// 	if(expresion.test(input.value)){
// 		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
// 		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
// 		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
// 		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
// 		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
// 		campos[campo] = true;
// 	} else {
// 		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
// 		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
// 		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
// 		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
// 		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
// 		campos[campo] = false;
// 	}
// }
// $("#formulario").addEventListener=('keyboardEvent', (e)  => {

// console.log(e);
// 	e.preventDefault();

// 	if(campos.usuario && campos.nombre  && campos.radicacion  ){
// 		formulario.reset();

// 		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
// 		setTimeout(() => {
// 			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
// 		}, 5000);

// 		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
// 			icono.classList.remove('formulario__grupo-correcto');
// 		});
// 	} else {
// 	//	document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
// 	}
// });


 

 