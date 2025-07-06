$.ajax({

	url:"ajax/datatable-alertas.ajax.php",
	method: "POST",
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(respuesta){

		$("#listaAlertas").empty();

		var contar=0;
		respuesta.forEach(funcionForEach);

		function funcionForEach(item, index){

			$("#listaAlertas").append(
				
				"<li>" + 
				"<a href='index.php?ruta=tareas&idPlanta="+item.idplanta+"'>"+
					"<i class='fa fa-users text-aqua'></i>"+item.unidadproduccion +
				"</a>"+
			 "</li>" 
			
			);

			contar++
		}

		document.getElementById("contar").textContent = contar;
		document.getElementById("contador").textContent = contar;
	}
})


$('.tablaPreselecciones').DataTable( {
    "ajax": "ajax/datatable-pre.ajax.php",
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );

/*=============================================
AGREGANDO PRODUCTOS A LA VENTA DESDE LA TABLA
=============================================*/

$(".tablaPreselecciones tbody").on("click", "button.agregarPersonal", function(){

	var idPersonal = $(this).attr("idPersonal");

	$(this).removeClass("btn-primary agregarPersonal");

	$(this).addClass("btn-default");

	var datos = new FormData();
    datos.append("idPersonal", idPersonal);

     $.ajax({

     	url:"ajax/personal.ajax.php",
      	method: "POST",
      	data: datos,
      	cache: false,
      	contentType: false,
      	processData: false,
      	dataType:"json",
      	success:function(respuesta){


      	    var descripcion = respuesta["descripcion"];
          	var stock = respuesta["stock"];
          	var precio = respuesta["precio_venta"];
			var nombre = respuesta["nombre"];
			var dni = respuesta["dni"];
			var cargo = respuesta["cargo"];
			var celular = respuesta["celular"];
			var ubicacion = respuesta["lugarresidencia"];

          	/*=============================================
          	EVITAR AGREGAR PRODUTO CUANDO EL STOCK ESTÁ EN CERO
          	=============================================*/

          	if(stock == 0){

      			swal({
			      title: "No hay stock disponible",
			      type: "error",
			      confirmButtonText: "¡Cerrar!"
			    });

			    $("button[idPersonal='"+idPersonal+"']").addClass("btn-primary agregarPersonal");

			    return;

          	}

          	$(".nuevoPersonal").append(

          	'<div class="row" style="padding:5px 20px">'+

			  '<!-- Descripción del producto -->'+
	          
	          '<div class="col-xs-4" style="padding-right:0px">'+
	          
	            '<div class="input-group">'+
	              
	              '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarPersonal" idPersonal="'+idPersonal+'"><i class="fa fa-times"></i></button></span>'+

	              '<input type="text" class="form-control nuevoNombrePersonal" idPersonal="'+idPersonal+'" name="agregarPersonal" value="'+nombre+'" readonly required>'+
				  '<input type="hidden" class="form-control nuevoDniPersonal" name="nuevoDniPersonal" value="'+dni+'" readonly>'+

	            '</div>'+

	          '</div>'+

	          '<!-- Cantidad del producto -->'+

	          '<div class="col-xs-3" style="padding-right:0px">'+
	            
	             '<input type="text" class="form-control nuevoCargoPersonal" name="nuevoCargoPersonal" value="'+cargo+'" readonly>'+

	          '</div>' +
			  '<div class="col-xs-2" style="padding-right:0px">'+
	            
			  '<input type="text" class="form-control nuevoCelularPersonal" name="nuevoCelularPersonal" value="'+celular+'" readonly>'+

		   	  '</div>' +

			  '<div class="col-xs-3">'+
			
			  '<input type="text" class="form-control nuevaUbicacionPersonal" name="nuevaUbicacionPersonal" value="'+ubicacion+'" readonly>'+

			  '</div>' +

	          '<!-- Precio del producto -->'+

	        '</div>') 

	        listarPersonales()

		//	localStorage.removeItem("quitarPersonal");

      	}

     })

});

/*=============================================
CUANDO CARGUE LA TABLA CADA VEZ QUE NAVEGUE EN ELLA
=============================================*/

$(".tablaPreselecciones").on("draw.dt", function(){

	if(localStorage.getItem("quitarPersonal") != null){

		var listaIdPersonal = JSON.parse(localStorage.getItem("quitarPersonal"));

		for(var i = 0; i < listaIdPersonal.length; i++){

			$("button.recuperarBoton[idpersonal='"+listaIdPersonal[i]["idpersonal"]+"']").removeClass('btn-default');
			$("button.recuperarBoton[idpersonal='"+listaIdPersonal[i]["idpersonal"]+"']").addClass('btn-primary agregarPersonal');

		}


	}


})


/*=============================================
QUITAR PERSONAL DE LA LISTA Y RECUPERAR BOTÓN
=============================================*/

var idQuitarPersonal = [];

localStorage.removeItem("quitarPersonal");

$(".formularioPreseleccion").on("click", "button.quitarPersonal", function(){

	$(this).parent().parent().parent().parent().remove();

	var idPersonal = $(this).attr("idPersonal");

	/*=============================================
	ALMACENAR EN EL LOCALSTORAGE EL ID DEL PERSONAL A QUITAR
	=============================================*/

	if(localStorage.getItem("quitarPersonal") == null){

		idQuitarPersonal = [];
	
	}else{

		idQuitarPersonal.concat(localStorage.getItem("quitarPersonal"))

	}

	idQuitarPersonal.push({"idPersonal":idPersonal});

	localStorage.setItem("quitarPersonal", JSON.stringify(idQuitarPersonal));

	$("button.recuperarBoton[idPersonal='"+idPersonal+"']").removeClass('btn-default');

	$("button.recuperarBoton[idPersonal='"+idPersonal+"']").addClass('btn-primary agregarPersonal');

	if($(".nuevoPersonal").children().length == 0){


	}else{

        listarPersonales()

	}

})



/*=============================================
SELECCIONAR PERSONAL
=============================================*/

$(".formularioPreseleccion").on("change", "select.nuevoNombrePersonal", function(){

	var nombrePersonal = $(this).val();

	var nuevoNombrePersonal = $(this).parent().parent().parent().children().children().children(".nuevoNombrePersonal");
	var nuevoCargoPersonal = $(this).parent().parent().parent().children().children().children(".nuevoCargoPersonal");
	var nuevoCelularPersonal = $(this).parent().parent().parent().children().children().children(".nuevoCelularPersonal");
	var nuevaUbicacionPersonal = $(this).parent().parent().parent().children().children().children(".nuevaUbicacionPersonal");
	var nuevoDniPersonal = $(this).parent().parent().parent().children().children().children(".nuevoDniPersonal");

	var datos = new FormData();
    datos.append("nombrePersonal", nombrePersonal);


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
      	    
      	    $(nuevoNombrePersonal).attr("id", respuesta["id"]);
			$(nuevoNombrePersonal).val("nombre", respuesta["nombre"]);
      	    $(nuevoCargoPersonal).val("cargo", respuesta["cargo"]);
      	    $(nuevoCelularPersonal).val("celular", respuesta["celular"]);
      	    $(nuevaUbicacionPersonal).val("ubicacion",respuesta["lugarresidencia"]);
      	    $(nuevoDniPersonal).val("dni", respuesta["dni"]);
			
  	      // AGRUPAR PRODUCTOS EN FORMATO JSON

	        listarPersonales()

      	}

      })
})



/*=============================================
LISTAR TODOS LOS PRODUCTOS
=============================================*/

function listarPersonales(){

	console.log('dentro del edit');

	var listaPersonales = [];

	var nombre = $(".nuevoNombrePersonal");
	var dni = $(".nuevoDniPersonal");
	var cargo = $(".nuevoCargoPersonal");
	var celular = $(".nuevoCelularPersonal");
	var ubicacion = $(".nuevaUbicacionPersonal");

	for(var i = 0; i < nombre.length; i++){

		listaPersonales.push({ "id" : $(nombre[i]).attr("idPersonal"), 
							  "nombre" : $(nombre[i]).val(),
							  "dni" : $(dni[i]).val(),
							  "cargo" : $(cargo[i]).val(),
							  "ubicacion" : $(ubicacion[i]).val(),
							  "celular" : $(celular[i]).val()
							  })

	}

	$("#listaPersonales").val(JSON.stringify(listaPersonales)); 

}


/*=============================================
BOTON EDITAR PRESELECCION
=============================================*/
$(".tablas").on("click", ".btnEditarPreseleccion", function(){

	var idPreseleccion = $(this).attr("idPreseleccion");
	window.location = "index.php?ruta=editar-preseleccion&idPreseleccion="+idPreseleccion;

})

/*=============================================
AGREGANDO PRODUCTOS A LA VENTA DESDE LA TABLA
=============================================*/

$(".tablaPreselecciones tbody").on("click", "button.observaciones", function(){
	console.log('dentrotrotro');
	
	var obs = $(this).attr("obs");
	var tipo = $(this).attr("tipo");
	var detalle = $(this).attr("detalle");

	if(obs !=""){

		swal({
			type: "error",
			title: "DESDE: "+ tipo+ " \n DETALLE: " + obs,
			confirmButtonText: "Cerrar"
				})
	}else{

		swal({
			type: "success",
			title: "No tiene ninguna Observacion",
			confirmButtonText: "Cerrar"
				})

	}


});

/*=============================================
FUNCIÓN PARA DESACTIVAR LOS BOTONES AGREGAR CUANDO EL PRODUCTO YA HABÍA SIDO SELECCIONADO EN LA CARPETA
=============================================*/

function quitaragregarPersonal(){

	//Capturamos todos los id de productos que fueron elegidos en la venta
	var isPersonales = $(".quitarPersonal");

	//Capturamos todos los botones de agregar que aparecen en la tabla
	var botonesTabla = $(".tablaPreselecciones tbody button.agregarPersonal");

	//Recorremos en un ciclo para obtener los diferentes isPersonales que fueron agregados a la venta
	for(var i = 0; i < isPersonales.length; i++){

		//Capturamos los Id de los productos agregados a la venta
		var boton = $(isPersonales[i]).attr("idPersonal");
		
		//Hacemos un recorrido por la tabla que aparece para desactivar los botones de agregar
		for(var j = 0; j < botonesTabla.length; j ++){

			if($(botonesTabla[j]).attr("idPersonal") == boton){

				$(botonesTabla[j]).removeClass("btn-primary agregarPersonal");
				$(botonesTabla[j]).addClass("btn-default");

			}
		}

	}
	
}

/*=============================================
CADA VEZ QUE CARGUE LA TABLA CUANDO NAVEGAMOS EN ELLA EJECUTAR LA FUNCIÓN:
=============================================*/

$('.tablaPreselecciones').on( 'draw.dt', function(){

	quitaragregarPersonal();

})


/*=============================================
BORRAR PRESELECCION
=============================================*/
$(".tablas").on("click", ".btnEliminarPreseleccion", function(){

	var idPreseleccion = $(this).attr("idPreseleccion");

	swal({
		  title: '¿Está seguro de borrar la Seccion?',
		  text: "¡Si no lo está puede cancelar la accíón!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancelar',
		  confirmButtonText: 'Si, borrar!'
		}).then(function(result){
		  if (result.value) {
			
			 window.location = "index.php?ruta=preseleccion&idPreseleccion="+idPreseleccion;
		  }
  
	})

})

/*=============================================
IMPRIMIR FACTURA
=============================================*/

$(".tablas").on("click", ".btnPdfSupervisor", function(){

	var codigoSupervisor = $(this).attr("codigoSupervisor");

	window.open("reporte/listaSupervisor.php?codigo="+codigoSupervisor, "_blank");

})

/*=============================================
IMPRIMIR EXCEL
=============================================*/

$(".tablas").on("click", ".btnExcelSupervisor", function(){

	var codigoSupervisor = $(this).attr("codigoSupervisor");

	window.open("reporte/excelSupervisor.php?codigo="+codigoSupervisor, "_blank");

})