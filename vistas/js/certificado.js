/*=============================================
BOTON INGRESAR PERSONAL A TAREA
=============================================*/
$(".tablas").on("click", ".btnIngresarCertifocado", function(){

	var idCertificado = $(this).attr("idCertifocado");

	window.location = "index.php?ruta=certificado-personal&idCertificado="+idCertificado;

//	localStorage.setItem("ididtarea", idTarea);
//	localStorage.setItem("ididplanta", idPlanta);

})

/*=============================================
BOTON INGRESAR PERSONAL A TAREA
=============================================*/
$(".tcertificado").on("click", ".btnEditarCertificado", function(){

	var idCertificado = $(this).attr("idCertificado");
	var idtarea = $(this).attr("idtarea");

	window.open("reporte/certificado.php?codigo="+idCertificado, "_blank");

//	localStorage.setItem("ididtarea", idTarea);
//	localStorage.setItem("ididplanta", idPlanta);

})

/*=============================================
ELIMINAR CATEGORIA
=============================================*/
$(".tcertificado").on("click", ".btnEliminarCertificado", function(){


	var idCertificado = $(this).attr("idCertificado");

	swal({
		title: '¿Está seguro de borrar la categoría?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar categoría!'
	}).then(function(result){

		if(result.value){

			window.location = "index.php?ruta=certificado&idCertificado="+idCertificado;

		}

	})

})