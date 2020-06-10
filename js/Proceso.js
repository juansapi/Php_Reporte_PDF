$( document ).ready(function(){
 
    //valida el boton para generar las acciones del evento
	$("#btnCalcular").click(function(){
	
	   
		 cedula= getCedula();
		 nombre= getNombre();
		apellido= getApellido();
		dirrecion= getDirrecion();
	  telefono= getTelefono();
	  celular= getCelular();
	  email= getEmail();
	  edad= getEdad();
	  sexo= getSexo();
	  partido= getPartido();
	  postulacion= getPostulacion();
	  tarjeton= getTarjeton();
	  lema= getLema();
		
		
		
		//proceso para enviar datos a php por medio de ajax
		//las variables son capturadas con JSON (  key:value)
        //donde key es la variable definida y debe ser igual a la que reciba el servidor php y value es la variable local)  
		
		$.ajax({
			//construye la ruta donde se encuentra el archivo php
			url: "src/Guardar.php",
			//define las variables
			data: {
					cedula: cedula,
					nombre: nombre,
					apellido: apellido,
					dirrecion: dirrecion,
					telefono: telefono,
					celular: celular,
					email: email,
					edad: edad,
					sexo: sexo,
					partido: partido,
					postulacion: postulacion,
					tarjeton: tarjeton,
					lema: lema
			},
			type: "POST",
			context: document.body
		}).done(function( data ) {		
			//llamado a metodo que obtiene datos
			obtenerDatos();
		});

	});

});

//funcion para obtener los datos y mostrarlos en el formulario
function obtenerDatos(){
	
		//Consulta de Datos por medio de Formato JSON
		$.getJSON( "src/Consultar.php", function( data ) {
		
		//indica el sitio donde se mostrara la ubicacion en el formulario html
		$("#BodyTable").html("");
		
		//define arreglo
		var items = [];
				
		//realiza ciclo para recorrer por (llave, valor) y mostrar los registros		
		$.each( data, function( key, val ) {
		
			//adiciona los elementos 
			$("#BodyTable").append("<tr>\
										<th>" + val.cedula + "</th>\
										<th>" + val.nombre + "</th>\
										<th>" + val.apellido + "</th>\
										<th>" + val.dirrecion + "</th>\
										<th>" + val.telefono + "</th>\
										<th>" + val.celular + "</th>\
										<th>" + val.email + "</th>\
										<th>" + val.edad + "</th>\
										<th>" + val.sexo + "</th>\
										<th>" + val.partido + "</th>\
										<th>" + val.postulacion + "</th>\
										<th>" + val.tarjeton + "</th>\
										<th>" + val.lema + "</th>\
									</tr>");
		});
	
	});

}



//obtiene la informacion de la caja de texto cedula
function getCedula(){

	cedula  = $("#txtCedula").val();
	return cedula;

}



//obtiene la informacion de la caja de texto nombre
function getNombre(){

	nombre  = $("#txtNombre").val();
	return nombre;

}



//obtiene la informacion de la caja de texto apellido
function getApellido(){

	apellido  = $("#txtApellido").val();
	return apellido;

}



//obtiene la informacion de la caja de texto dirrecion
function getDirrecion(){

	dirrecion  = $("#txtDirrecion").val();
	return dirrecion;

}



//obtiene la informacion de la caja de texto telefono
function getTelefono(){

	telefono  = $("#txtTelefono").val();
	return telefono;

}



//obtiene la informacion de la caja de texto Celular

function getCelular(){

	celular  = $("#txtCelular").val();
	return celular;

}



//obtiene la informacion de la caja de texto Email
function getEmail(){

	email  = $("#txtEmail").val();
	return email;

}



//obtiene la informacion de la caja de texto edad

function getEdad(){

	edad  = $("#txtEdad").val();
	return edad;

}



//obtiene la informacion de la caja de texto sexo

function getSexo(){

	sexo  = $("#txtSexo").val();
	return sexo;

}

//obtiene la informacion de la caja de texto partido

function getPartido(){

	partido  = $("#txtPartido").val();
	return partido;

}



//obtiene la informacion de la caja de texto postulacion

function getPostulacion(){

	postulacion  = $("#txtPostulacion").val();
	return postulacion;

}



//obtiene la informacion de la caja de texto tarjeton

function getTarjeton(){

	tarjeton  = $("#txtTarjeton").val();
	return tarjeton;

}



//obtiene la informacion de la caja de texto lema
function getLema(){

	lema  = $("#txtLema").val();
	return lema;

}



