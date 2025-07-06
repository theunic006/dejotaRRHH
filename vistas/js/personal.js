/*=============================================
EDITAR PERSONAL
=============================================*/
$(".tablas").on("click", ".btnEditarPersonal", function(){

	esconderdatos();

	var idpersonal = $(this).attr("idPersonal");

	editarpersonal(idpersonal);
})

$(".tablaPersonal").on("click", ".btnEditarPersonal", function(){

	esconderdatos();

	var idpersonal = $(this).attr("idpersonal");

	editarpersonal(idpersonal);
})

function editarpersonal(idpersonal){	

	var datos = new FormData();
    datos.append("idPersonal", idpersonal);

    $.ajax({

      url:"ajax/personal.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

		var datosCargo = new FormData();
		datosCargo.append("idCargo",'');

		 $.ajax({

			url:"ajax/cargos.ajax.php",
			method: "POST",
			data: datosCargo,
			cache: false,
			contentType: false,
			processData: false,
			dataType:"json",
			success:function(respuestacargo){

				// Limpiar el select antes de agregar las opciones
				$("#editarCargo").empty();

				// Iterar sobre los datos recibidos y agregar las opciones al select
				$.each(respuestacargo, function(index, cargo) {
					var selected = (cargo.id == respuesta["idcargo"]) ? 'selected' : '';
					$("#editarCargo").append('<option value="' + cargo.id + '" ' + selected + '>' + cargo.cargo + '</option>');
				});

				

			}

		})
   
          $("#idPersonal").val(respuesta["id"]);
          $("#editnombre").val(respuesta["nombre"]);
		  $("#editdni").val(respuesta["dni"]);
		  $("#editcargo").val(respuesta["cargo"]);
		//  $("#editarcargo").val(respuesta["cargo"]);
		  $("#editcelular").val(respuesta["celular"]);
		  $("#editnacionalidad").val(respuesta["nacionalidad"]);
		  $("#editgenero").val(respuesta["genero"]);
		  $("#editestadocivil").val(respuesta["estadocivil"]);
		  $("#editgruposanguineo").val(respuesta["gruposanguineo"]);
		  $("#editfechanacimiento").val(respuesta["fechanacimiento"]);
		  $("#editedad").val(respuesta["edad"]);
		  $("#editdireccion").val(respuesta["direccion"]);
		  $("#editcorreo").val(respuesta["correo"]);
		  $("#editdistrito").val(respuesta["distrito"]);
		  $("#editprovincia").val(respuesta["provincia"]);
		  $("#editdepartamento").val(respuesta["departamento"]);
		  $("#editlugarresidencia").val(respuesta["lugarresidencia"]);

		  $("#editpdfdni").val(respuesta["pdfdni"]);
		  $("#editpdfcv").val(respuesta["pdfcv"]);

		  $("#firmaactual").val(respuesta["imagenfirma"]);
		  $("#huellaactual").val(respuesta["imagenhuella"]);
		  $("#fotoactual").val(respuesta["fotografia"]);


			$('#enlacedni').attr("href", respuesta["pdfdni"]); 	// enlace para los pdf
			$('#enlacecv').attr("href", respuesta["pdfcv"]); 


		  if(respuesta["imagenfirma"] != ""){
			$("#firmaactual").val(respuesta["imagenfirma"]);
			$(".previsualizarFirma").attr("src",  respuesta["imagenfirma"]);
		  }
		  if(respuesta["imagenhuella"] != ""){
			$("#huellaactual").val(respuesta["imagenhuella"]);
			$(".previsualizarHuella").attr("src",  respuesta["imagenhuella"]);
		  }  
		  if(respuesta["fotografia"] != ""){
			$("#fotoactual").val(respuesta["fotografia"]);
			$(".previsualizarfoto").attr("src",  respuesta["fotografia"]);
		  }  

		  
		  if(respuesta["pdfdni"] != ""){
			$("#dniactual").val(respuesta["pdfdni"]);
			let dni = respuesta["pdfdni"];		//nombre pdf 
			let ddni = dni.split('/');
			$("#dnidni").val(ddni[4]);
		  }else{
			$("#dnidni").val("Archivo No Existe");
		  }
		  if(respuesta["pdfcv"] != ""){
			$("#cvactual").val(respuesta["pdfcv"]);
			let dni = respuesta["pdfcv"];		//nombre pdf 
			let ddni = dni.split('/');
			$("#cvcv").val(ddni[4]);
		  }else{
			$("#cvcv").val("Archivo No Existe");
		  }
    }

  	})

}
/*=============================================
AUTOMATIZAR LA EDAD DEL PERSONAL
=============================================*/

function validaranios(event, type){

console.log(type);

}
$(document).on("change",".changeAnios",function(){

	console.log("dentro");

	let inputValue = $(this).val();

    let birthDate = new Date(inputValue);
    let today = new Date();
    let diffInMilliseconds = today - birthDate;
    let diffInYears = diffInMilliseconds / (1000 * 60 * 60 * 24 * 365.25);
    diffInYears = Math.floor(diffInYears);

    console.log("Diferencia en años:", diffInYears);

	$('input[name="edad"]').val(diffInYears);
	$('input[name="editedad"]').val(diffInYears);
})
  
/*=============================================
ELIMINAR PERSONAL
=============================================*/
$(".tablas").on("click", ".btnEliminarPersonal", function(){

	var idPersonal = $(this).attr("idPersonal");

	swal({
        title: '¿Está seguro de quitar al personal??',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar personal!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=personal&idPersonal="+idPersonal;
        }

  })

})

/*=============================================
SUBIENDO LA FOTO DE FIRMA
=============================================*/
$(".imagenfirma").change(function(){

	var imagen = this.files[0];

	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".imagenfirma").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen debe estar en formato JPG o PNG!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(imagen["size"] > 2000000){

		$(".imagenfirma").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen no debe pesar más de 2MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load", function(event){

			var rutaImagen = event.target.result;

			$(".previsualizarFirma").attr("src", rutaImagen);

		})

	}
})

/*=============================================
SUBIENDO LA FOTO DE HUELLA
=============================================*/
$(".imagenhuella").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".imagenhuella").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen debe estar en formato JPG o PNG!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(imagen["size"] > 2000000){

		$(".imagenhuella").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen no debe pesar más de 2MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load", function(event){

			var rutaImagen = event.target.result;

			$(".previsualizarHuella").attr("src", rutaImagen);

		})

	}
})

/*=============================================
SUBIENDO LA FOTO DE LA PERSONA
=============================================*/
$(".fotografia").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".fotografia").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen debe estar en formato JPG o PNG!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(imagen["size"] > 2000000){

		$(".fotografia").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen no debe pesar más de 2MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load", function(event){

			var rutaImagen = event.target.result;

			$(".previsualizarfoto").attr("src", rutaImagen);

		})

	}
})

/*=============================================
SUBIENDO EL PDF DE CV
=============================================*/
$(".pdfdni").change(function(){

	var archivo = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(archivo["type"] != "application/pdf"){

		$(".pdfdni").val("");

			swal({
				title: "Error al subir El Archivo",
				text: "¡El archivo debe estar en formato PDF!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(archivo["size"] > 200000000){

		$(".pdfdni").val("");

			swal({
				title: "Error al subir El Pdf",
				text: "¡El Archivo no debe pesar más de 20MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosArchivo = new FileReader;
		datosArchivo.readAsDataURL(archivo);

		$(datosArchivo).on("load", function(event){

			var rutaArchivo = event.target.result;

		})

	}
})

/*=============================================
SUBIENDO EL PDF DE EXAMEN MEDICO
=============================================*/
$(".pdfcv").change(function(){

	var archivo = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(archivo["type"] != "application/pdf"){

		$(".pdfcv").val("");

			swal({
				title: "Error al subir El Archivo",
				text: "¡El archivo debe estar en formato PDF!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(archivo["size"] > 200000000){

		$(".nuevoExamen").val("");

			swal({
				title: "Error al subir El Pdf",
				text: "¡El Archivo no debe pesar más de 20MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosArchivo = new FileReader;
		datosArchivo.readAsDataURL(archivo);

		$(datosArchivo).on("load", function(event){

			var rutaArchivo = event.target.result;
		})

	}
})

/*=============================================
EDITAR 	FAMILIAR
=============================================*/
$(".tablas").on("click", ".btnEditarFamiliar", function(){

	var idFamiliar = $(this).attr("idFamiliar");

	console.log(idFamiliar);

	var datos = new FormData();
    datos.append("idFamiliar", idFamiliar);

    $.ajax({

      url:"ajax/personal.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

		console.log(respuesta);
		
          $("#idFamiliar").val(respuesta["id"]);
		  $("#idFamPersonal").val(respuesta["dni"]);
          $("#nombreFam").val(respuesta["nombre"]);
		  $("#parentescoFam").val(respuesta["parentesco"]);
		  $("#celularFam").val(respuesta["celular"]);
		  $("#planillaFam").val(respuesta["planilla"]);

		  $("#fotoactual").val(respuesta["fotografia"]);

		  if(respuesta["fotografia"] != ""){
			$("#fotoactual").val(respuesta["fotografia"]);
			$(".previsualizarFoto").attr("src",  respuesta["fotografia"]);
		  }
		  
    }

  	})

})

/*=============================================
SUBIENDO LA FOTO DEL FAMILIAR
=============================================*/
$(".imagenfoto").change(function(){

	var imagen = this.files[0];

	console.log('dentro del check')

	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".imagenfoto").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen debe estar en formato JPG o PNG!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(imagen["size"] > 2000000){

		$(".imagenfoto").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen no debe pesar más de 2MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load", function(event){

			var rutaImagen = event.target.result;

			$(".previsualizarFoto").attr("src", rutaImagen);

		})

	}
})


/*=============================================
EDITAR 	EXAMEN MEDICO
=============================================*/
$(".tablas").on("click", ".btnEditarExamen", function(){

	var idExamen = $(this).attr("idExamen");
	tablaExamen(idExamen);
})

$(".tablaPersonalT").on("click", ".btnEditarExamen", function(){

	var idExamen = $(this).attr("idExamen");
	tablaExamen(idExamen);
})

$(".tablaPersonal").on("click", ".btnEditarExamen", function(){

	var idExamen = $(this).attr("idExamen");
	tablaExamen(idExamen);
})


function tablaExamen(idExamen){
	

	var datos = new FormData();
    datos.append("idExamen", idExamen);

    $.ajax({

      url:"ajax/personal.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

          $("#idExamen").val(respuesta["id"]);
		  $("#idExamPersonal").val(respuesta["dni"]);
          $("#fechainicioExam").val(respuesta["fechainicio"]);
		  $("#fechafinExam").val(respuesta["fechafin"]);
		  $("#cantidaddiasExam").val(respuesta["cantidaddias"]);
		  $("#estadoExam").val(respuesta["estado"]);
		  $("#clinicaExam").val(respuesta["clinica"]);
		  $("#vacunaExam").val(respuesta["vacuna"]);
		  $("#certificadoExam").val(respuesta["certificado"]);
		  $("#certificadoExam").val(respuesta["certificado"]);

		  $('#examenmedicopdf').attr("href", respuesta["certificado"]); 
		  $('#vacunapdf').attr("href", respuesta["vacunapdf"]); 

		  if(respuesta["certificado"] != ""){
			$("#certificadoactual").val(respuesta["certificado"]);
			let dni = respuesta["certificado"];		//nombre pdf 
			let ddni = dni.split('/');
			$("#cercer").val(ddni[4]);
		  }else{
			$("#certificadoactual").val("Archivo No Existe");
			$("#cercer").val("Archivo No Existe");
		  }

		  if(respuesta["vacuna"] != ""){
			$("#vacunaactual").val(respuesta["vacunapdf"]);
			let dni = respuesta["vacunapdf"];		//nombre pdf 
			let ddni = dni.split('/');
			$("#vacvac").val(ddni[4]);
		  }else{
			$("#vacunaactual").val("Archivo No Existe");
			$("#vacvac").val("Archivo No Existe");
		  }
		  
    }

  	})

}


/*=============================================
SUBIENDO EL PDF EXAMEN MEDICO
=============================================*/
$(".pdfcertificado").change(function(){

	var archivo = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(archivo["type"] != "application/pdf"){

		$(".pdfcertificado").val("");

			swal({
				title: "Error al subir El Archivo",
				text: "¡El archivo debe estar en formato PDF!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(archivo["size"] > 200000000){

		$(".pdfcertificado").val("");

			swal({
				title: "Error al subir El Pdf",
				text: "¡El Archivo no debe pesar más de 20MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosArchivo = new FileReader;
		datosArchivo.readAsDataURL(archivo);

		$(datosArchivo).on("load", function(event){

			var rutaArchivo = event.target.result;

		})

	}
})

/*=============================================
SUBIENDO EL PDF EXAMEN MEDICO
=============================================*/
$(".pdfvacuna").change(function(){

	var archivo = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(archivo["type"] != "application/pdf"){

		$(".pdfvacuna").val("");

			swal({
				title: "Error al subir El Archivo",
				text: "¡El archivo debe estar en formato PDF!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(archivo["size"] > 200000000){

		$(".pdfvacuna").val("");

			swal({
				title: "Error al subir El Pdf",
				text: "¡El Archivo no debe pesar más de 20MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosArchivo = new FileReader;
		datosArchivo.readAsDataURL(archivo);

		$(datosArchivo).on("load", function(event){

			var rutaArchivo = event.target.result;

		})

	}
})


/*=============================================
EDITAR 	INDUCCION
=============================================*/
$(".tablas").on("click", ".btnEditarInduccion", function(){

	var idInduccion = $(this).attr("idInduccion");
	tablainduccion(idInduccion)

})
$(".tablaPersonalT").on("click", ".btnEditarInduccion", function(){

	var idInduccion = $(this).attr("idInduccion");
	tablainduccion(idInduccion)

})
$(".tablaPersonal").on("click", ".btnEditarInduccion", function(){

	var idInduccion = $(this).attr("idInduccion");
	tablainduccion(idInduccion)

})
function tablainduccion(idInduccion) {
	
	var datos = new FormData();
    datos.append("idInduccion", idInduccion);

    $.ajax({

      url:"ajax/personal.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

          $("#idInduccion").val(respuesta["id"]);
		  $("#idIndPersonal").val(respuesta["dni"]);
          $("#fechainicioInd").val(respuesta["fechainicio"]);
		  $("#fechafinInd").val(respuesta["fechafin"]);
		  $("#estadoInd").val(respuesta["estado"]);
		  $("#causaInd").val(respuesta["causa"]);

		  $("#certificadoIndu").val(respuesta["induccion"]);

		  $('#induccionpdf').attr("href", respuesta["induccion"]); 

		  if(respuesta["induccion"] != ""){
			$("#induccionactual").val(respuesta["induccion"]);
			let dni = respuesta["induccion"];		//nombre pdf 
			let ddni = dni.split('/');
			$("#induindu").val(ddni[4]);
		  }else{
			$("#induccionactual").val("Archivo No Existe");
			$("#induindu").val("Archivo No Existe");
		  }

		  $("#certificadoActa").val(respuesta["acta"]);

		  $('#actapdf').attr("href", respuesta["acta"]); 

		  if(respuesta["acta"] != ""){
			$("#actaactual").val(respuesta["acta"]);
			let dni2 = respuesta["acta"];		//nombre pdf 
			let ddni2 = dni2.split('/');
			$("#actaacta").val(ddni2[4]);
		  }else{
			$("#actaactual").val("Archivo No Existe");
			$("#actaacta").val("Archivo No Existe");
		  }
		  
    }

  	})
}

/*=============================================
SUBIENDO EL PDF INDUCCION
=============================================*/
$(".pdfinduccion").change(function(){

	var archivo = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(archivo["type"] != "application/pdf"){

		$(".pdfinduccion").val("");

			swal({
				title: "Error al subir El Archivo",
				text: "¡El archivo debe estar en formato PDF!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(archivo["size"] > 200000000){

		$(".pdfinduccion").val("");

			swal({
				title: "Error al subir El Pdf",
				text: "¡El Archivo no debe pesar más de 20MB!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else{

		var datosArchivo = new FileReader;
		datosArchivo.readAsDataURL(archivo);

		$(datosArchivo).on("load", function(event){

			var rutaArchivo = event.target.result;

		})

	}
})

/*=============================================
EDITAR 	OBSERVACION
=============================================*/
$(".tablas").on("click", ".btnEditarObservacion", function(){

	var idObservacion = $(this).attr("idObservacion");

	console.log(idObservacion);

	var datos = new FormData();
    datos.append("idObservacion", idObservacion);

    $.ajax({

      url:"ajax/personal.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

		console.log(respuesta);
		
          $("#idObservacion").val(respuesta["id"]);
		  $("#tipoObs").val(respuesta["tipo"]);
          $("#observacionObs").val(respuesta["observacion"]);
		  $("#detalleObs").val(respuesta["detalle"]);
		  $("#tieneObs").val(respuesta["tiene"]);
		  $("#fechaterminaObs").val(respuesta["fecha_termina"]);  
		  
    }

  	})

})

/*=============================================
EDITAR 	OBSERVACION RESAPARECER Y A APARECER
=============================================*/
$("#tieneObs").change(function(){
	
	$("#tieneObs option:selected").each(function () {
		selector = $(this).val();

		if(selector=='SI'){

			$("#cajaobservacionObs").show();
			$("#cajadetalleObs").show();
			$("#cajatipoObs").show();
			$("#cajafechaterminaObs").show();

		}else{

			$("#observacionObs").val('');
			$("#detalleObs").val('');
			$("#fechaterminaObs").val('');  
			$("#tipoObs").val('');  

			$("#cajaobservacionObs").hide();
			$("#cajadetalleObs").hide();
			$("#cajatipoObs").hide();
			$("#cajafechaterminaObs").hide();

		}
		   
	});
})

/*=============================================
EDITAR EXPERIENCIA APARECER Y DESAPARECER
=============================================*/
function agregarexp(idExperiencia){

	$("#cajatipo").show();
	$("#cajaempresa").show();
	$("#cajacargo").show();
	$("#cajaarea").show();
	$("#cajafechainicio").show();
	$("#cajafechafin").show();
	$("#cajaanio").show();
	$("#cajames").show();
	$("#cajadia").show();
	$("#cajaobservaciones").show();
	$("#cajaboton").show();

}

/*=============================================
EDITAR EXPERIENCIA
=============================================*/
$(".tablas").on("click", ".btnEditarExperiencia", function(){

	var idExperiencia = $(this).attr("idExperiencia");

	var datos = new FormData();
	datos.append("idExperiencia", idExperiencia);

    $.ajax({

		url:"ajax/personal.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType:"json",
		success:function(respuesta){

			$("#tablaRegistros tbody").empty();
			respuesta.forEach(funcionForEach);
			function funcionForEach(item, index){

				$("#tablaRegistros tbody").append(
					"<tr>" +
					"<td>" + item.empresa + "</td>" +
					"<td>" + item.tipo + "</td>" +
					"<td>" + item.cargo + "</td>" +
					"<td>" + item.sector + "</td>" +
					"</tr>"

				);
			}
		}
	})

	tablaexperiencia(idExperiencia);
	

})

function tablaexperiencia(idExperiencia) {


	$("#idnose").val(idExperiencia)

	  $("#cajatipo").hide();
	  $("#cajaempresa").hide();
	  $("#cajacargo").hide();
	  $("#cajaarea").hide();
	  $("#cajafechainicio").hide();
	  $("#cajafechafin").hide();
	  $("#cajaanio").hide();
	  $("#cajames").hide();
	  $("#cajadia").hide();
	  $("#cajaobservaciones").hide();
	  $("#cajaboton").hide();
	
}

function esconderdatos(){
	$("#cajatitulo").hide();
	$("#cajacomunidad").hide();
	$("#cajanombrecomunidad").hide();
	$("#cajacaserio").hide();
	$("#cajapensiones").hide();
	$("#cajaafp").hide();
	$("#cajacuspp").hide();
	$("#cajanivelsctr").hide();
	$("#cajasctrsalud").hide();
	$("#cajasctrpension").hide();
	$("#cajavidaley").hide();
	$("#cajagradoinstruccion").hide();
	$("#cajacattrabajador").hide();
	$("#cajasituacion").hide();
	$("#cajaexplosivos").hide();


}

function agregardatos(){
	
	$("#cajatitulo").show();
	$("#cajacomunidad").show();
	$("#cajanombrecomunidad").show();
	$("#cajacaserio").show();
	$("#cajapensiones").show();
	$("#cajaafp").show();
	$("#cajacuspp").show();
	$("#cajanivelsctr").show();
	$("#cajasctrsalud").show();
	$("#cajasctrpension").show();
	$("#cajavidaley").show();
	$("#cajagradoinstruccion").show();
	$("#cajacattrabajador").show();
	$("#cajasituacion").show();
	$("#cajaexplosivos").show();
}


function selectcategoria()
{
	
	var cargo = document.getElementById("idcargo").value;

			$.post("../ajax/cargos.ajax.php?op=idusuario2", {idarticulo : cargo},function(data, status)
		{	
			data = JSON.parse(data);	
			$("#idsguig").val(data.continua);

	 	});



}
