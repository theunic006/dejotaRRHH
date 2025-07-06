/*=============================================
CARGAR LA TABLA DINÁMICA DE PERSONAL
=============================================*/

$('.tablaPersonal').DataTable( {
    "ajax": "ajax/datatable-personal.ajax.php",
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
AGREGANDO PERSONAL A LA TABLA
=============================================*/

$(".tablaPersonal tbody").on("click", "button.agregarPersonal", function(){

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

			var nombre = respuesta["nombre"];
			var cargo = respuesta["cargo"];
			var celular = respuesta["celular"];
			var ubicacion = respuesta["provincia"];
			var observacion = respuesta["tiene"];
			var detalle = respuesta["detalle"];
			var tipo = respuesta["tipo"];
			var dni2 = respuesta["dni"];

			var firma = respuesta["imagenfirma"];
			var huella = respuesta["imagenhuella"];
			var dni = respuesta["pdfdni"];
			var cv = respuesta["pdfcv"];

			

          	/*=============================================
          	EVITAR AGREGAR PRODUTO CUANDO TIENE ALGUNA OBSERVACION
          	=============================================*/

          	if(observacion == 'SI'){

      			swal({
			      title: "DESDE: " + tipo + "\n DETALLE: "+ detalle,
			      type: "error",
			      confirmButtonText: "¡Cerrar!"
			    });

			    $("button[idPersonal='"+idPersonal+"']").addClass("btn-primary agregarPersonal");

			    return;

          	}
          	if(firma=='SI' || huella=='SI' || dni=='SI' || cv=='SI'){

				swal({
				title: "EL PERSONAL NO CUMPLE CON LOS REQUISITOS MINIMOS",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			  });

			  $("button[idPersonal='"+idPersonal+"']").addClass("btn-primary agregarPersonal");

			  return;

			}

          	$(".nuevoPersonal").append(

				'<div class="row" style="padding:5px 15px">'+
				'<!-- Descripción del producto -->'+
  
				'<div class="col-xs-4" style="padding-right:0px">'+
				  '<div class="input-group">'+
	              
	              '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarPersonal" idPersonal="'+idPersonal+'"><i class="fa fa-times"></i></button></span>'+

	              '<input type="text" class="form-control nuevoNombrePersonal" idPersonal="'+idPersonal+'" name="agregarPersonal" value="'+nombre+'" readonly required>'+
				  '<input type="hidden" class="form-control nuevoDniPersonal" name="nuevoDniPersonal" value="'+dni2+'" readonly>'+
				  

	            '</div>'+
	          '</div>'+
	          '<!-- Cantidad del producto -->'+

	          '<div class="col-xs-3">'+
	            
	             '<input type="text" class="form-control nuevoCargoPersonal" name="nuevoCargoPersonal" value="'+cargo+'" readonly>'+

	          '</div>' +
			  '<div class="col-xs-2">'+
	            
			  '<input type="text" class="form-control nuevoCelularPersonal" name="nuevoCelularPersonal" value="'+celular+'" readonly>'+

		   	  '</div>' +

			  '<div class="col-xs-2">'+
			
			  '<input type="text" class="form-control nuevaUbicacionPersonal" name="nuevaUbicacionPersonal" value="'+ubicacion+'" readonly>'+

			  '</div>' +

	          '<!-- Precio del producto -->'+

	        '</div>') 

			listarPersonales();

			localStorage.removeItem("quitarPersonal");

      	}

     })

});

/*=============================================
BOTON INGRESAR PERSONAL
=============================================*/
$(".tablas").on("click", ".btnIngresarPersonal", function(){

	console.log('dentro')

	var idTarea = $(this).attr("idTarea");
	var idPlanta = $(this).attr("idPlanta");

	window.location = "index.php?ruta=crear-personal&idTarea="+idTarea+"&idPlanta="+idPlanta;

})

/*=============================================
BOTON INGRESAR PERSONAL A TAREA
=============================================*/
$(".tablas").on("click", ".btnInsertarPersonal", function(){

	var idTarea = $(this).attr("idTarea");
	var idPlanta = $(this).attr("idPlanta");

//	window.location = "index.php?ruta=insertar-personal&idTarea="+idTarea+"&idPlanta="+idPlanta;
	window.location = "index.php?ruta=insertar-personal&idTarea=" + idTarea + "&idPlanta=" + idPlanta;


	localStorage.setItem("ididtarea", idTarea);
	localStorage.setItem("ididplanta", idPlanta);

})

/*=============================================
CUANDO CARGUE LA TABLA CADA VEZ QUE NAVEGUE EN ELLA
=============================================*/

$(".tablaPersonal").on("draw.dt", function(){

	if(localStorage.getItem("quitarProducto") != null){

		var listaIdProductos = JSON.parse(localStorage.getItem("quitarProducto"));

		for(var i = 0; i < listaIdProductos.length; i++){

			$("button.recuperarBoton[idProducto='"+listaIdProductos[i]["idProducto"]+"']").removeClass('btn-default');
			$("button.recuperarBoton[idProducto='"+listaIdProductos[i]["idProducto"]+"']").addClass('btn-primary agregarProducto');

		}


	}


})


/*=============================================
QUITAR PRODUCTOS DE LA VENTA Y RECUPERAR BOTÓN
=============================================*/

var idQuitarProducto = [];

localStorage.removeItem("quitarPersonal");

$(".formularioVenta").on("click", "button.quitarProducto", function(){

	$(this).parent().parent().parent().parent().remove();

	var idProducto = $(this).attr("idProducto");

	/*=============================================
	ALMACENAR EN EL LOCALSTORAGE EL ID DEL PRODUCTO A QUITAR
	=============================================*/

	if(localStorage.getItem("quitarProducto") == null){

		idQuitarProducto = [];
	
	}else{

		idQuitarProducto.concat(localStorage.getItem("quitarProducto"))

	}

	idQuitarProducto.push({"idProducto":idProducto});

	localStorage.setItem("quitarProducto", JSON.stringify(idQuitarProducto));

	$("button.recuperarBoton[idProducto='"+idProducto+"']").removeClass('btn-default');

	$("button.recuperarBoton[idProducto='"+idProducto+"']").addClass('btn-primary agregarProducto');

	if($(".nuevoProducto").children().length == 0){

		$("#nuevoImpuestoVenta").val(0);
		$("#nuevoTotalVenta").val(0);
		$("#totalVenta").val(0);
		$("#nuevoTotalVenta").attr("total",0);

	}else{

		// SUMAR TOTAL DE PRECIOS

    	sumarTotalPrecios()

    	// AGREGAR IMPUESTO
	        
        agregarImpuesto()

        // AGRUPAR PRODUCTOS EN FORMATO JSON

        listarProductos()

	}

})


/*=============================================
SELECCIONAR PRODUCTO
=============================================*/

$(".formularioPersonal").on("change", "select.nuevoNombrePersonal", function(){

	console.log('dentro de un formulario')

	var nombrePersonal = $(this).val();

	var nuevoNombrePersonal = $(this).parent().parent().parent().children().children().children(".nuevoNombrePersonal");
	var nuevoCargoPersonal = $(this).parent().parent().parent().children().children().children(".nuevoCargoPersonal");
	var nuevoCelularPersonal = $(this).parent().parent().parent().children().children().children(".nuevoCelularPersonal");
	var nuevoUbicacionPersonal = $(this).parent().parent().parent().children().children().children(".nuevoUbicacionPersonal");
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
      	    $(nuevoUbicacionPersonal).val("ubicacion",respuesta["provincia"]);
      	    $(nuevoDniPersonal).val("dni", respuesta["dni"]);


  	      // AGRUPAR PRODUCTOS EN FORMATO JSON

	        listarProductos()

      	}

      })
})

/*=============================================
MODIFICAR LA CANTIDAD
=============================================*/

$(".formularioVenta").on("change", "input.nuevaCantidadProducto", function(){

	var precio = $(this).parent().parent().children(".ingresoPrecio").children().children(".nuevoPrecioProducto");

	var precioFinal = $(this).val() * precio.attr("precioReal");
	
	precio.val(precioFinal);

	var nuevoStock = Number($(this).attr("stock")) - $(this).val();

	$(this).attr("nuevoStock", nuevoStock);

	if(Number($(this).val()) > Number($(this).attr("stock"))){

		/*=============================================
		SI LA CANTIDAD ES SUPERIOR AL STOCK REGRESAR VALORES INICIALES
		=============================================*/

		$(this).val(0);

		$(this).attr("nuevoStock", $(this).attr("stock"));

		var precioFinal = $(this).val() * precio.attr("precioReal");

		precio.val(precioFinal);

		sumarTotalPrecios();

		swal({
	      title: "La cantidad supera el Stock",
	      text: "¡Sólo hay "+$(this).attr("stock")+" unidades!",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

	    return;

	}

	// SUMAR TOTAL DE PRECIOS

	sumarTotalPrecios()

	// AGREGAR IMPUESTO
	        
    agregarImpuesto()

    // AGRUPAR PRODUCTOS EN FORMATO JSON

    listarProductos()

})

/*=============================================
SUMAR TODOS LOS PRECIOS
=============================================*/

function sumarTotalPrecios(){

	var precioItem = $(".nuevoPrecioProducto");
	
	var arraySumaPrecio = [];  

	for(var i = 0; i < precioItem.length; i++){

		 arraySumaPrecio.push(Number($(precioItem[i]).val()));
		
		 
	}

	function sumaArrayPrecios(total, numero){

		return total + numero;

	}

	var sumaTotalPrecio = arraySumaPrecio.reduce(sumaArrayPrecios);
	
	$("#nuevoTotalVenta").val(sumaTotalPrecio);
	$("#totalVenta").val(sumaTotalPrecio);
	$("#nuevoTotalVenta").attr("total",sumaTotalPrecio);


}

/*=============================================
FUNCIÓN AGREGAR IMPUESTO
=============================================*/

function agregarImpuesto(){

	var impuesto = $("#nuevoImpuestoVenta").val();
	var precioTotal = $("#nuevoTotalVenta").attr("total");

	var precioImpuesto = Number(precioTotal * impuesto/100);

	var totalConImpuesto = Number(precioImpuesto) + Number(precioTotal);
	
	$("#nuevoTotalVenta").val(totalConImpuesto);

	$("#totalVenta").val(totalConImpuesto);

	$("#nuevoPrecioImpuesto").val(precioImpuesto);

	$("#nuevoPrecioNeto").val(precioTotal);

}

/*=============================================
CUANDO CAMBIA EL IMPUESTO
=============================================*/

$("#nuevoImpuestoVenta").change(function(){

	agregarImpuesto();

});

/*=============================================
FORMATO AL PRECIO FINAL
=============================================*/

$("#nuevoTotalVenta").number(true, 2);

/*=============================================
SELECCIONAR MÉTODO DE PAGO
=============================================*/

$("#nuevoMetodoPago").change(function(){

	var metodo = $(this).val();

	if(metodo == "Efectivo"){

		$(this).parent().parent().removeClass("col-xs-6");

		$(this).parent().parent().addClass("col-xs-4");

		$(this).parent().parent().parent().children(".cajasMetodoPago").html(

			 '<div class="col-xs-4">'+ 

			 	'<div class="input-group">'+ 

			 		'<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>'+ 

			 		'<input type="text" class="form-control" id="nuevoValorEfectivo" placeholder="000000" required>'+

			 	'</div>'+

			 '</div>'+

			 '<div class="col-xs-4" id="capturarCambioEfectivo" style="padding-left:0px">'+

			 	'<div class="input-group">'+

			 		'<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>'+

			 		'<input type="text" class="form-control" id="nuevoCambioEfectivo" placeholder="000000" readonly required>'+

			 	'</div>'+

			 '</div>'

		 )

		// Agregar formato al precio

		$('#nuevoValorEfectivo').number( true, 2);
      	$('#nuevoCambioEfectivo').number( true, 2);


      	// Listar método en la entrada
      	listarMetodos()

	}else{

		$(this).parent().parent().removeClass('col-xs-4');

		$(this).parent().parent().addClass('col-xs-6');

		 $(this).parent().parent().parent().children('.cajasMetodoPago').html(

		 	'<div class="col-xs-6" style="padding-left:0px">'+
                        
                '<div class="input-group">'+
                     
                  '<input type="number" min="0" class="form-control" id="nuevoCodigoTransaccion" placeholder="Código transacción"  required>'+
                       
                  '<span class="input-group-addon"><i class="fa fa-lock"></i></span>'+
                  
                '</div>'+

              '</div>')

	}

	

})

/*=============================================
CAMBIO EN EFECTIVO
=============================================*/
$(".formularioVenta").on("change", "input#nuevoValorEfectivo", function(){

	var efectivo = $(this).val();

	var cambio =  Number(efectivo) - Number($('#nuevoTotalVenta').val());

	var nuevoCambioEfectivo = $(this).parent().parent().parent().children('#capturarCambioEfectivo').children().children('#nuevoCambioEfectivo');

	nuevoCambioEfectivo.val(cambio);

})

/*=============================================
CAMBIO TRANSACCIÓN
=============================================*/
$(".formularioVenta").on("change", "input#nuevoCodigoTransaccion", function(){

	// Listar método en la entrada
     listarMetodos()


})


/*=============================================
LISTAR TODOS EL PERSONAL CALIFICADO
=============================================*/

function listarPersonales(){

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
							  "celular" : $(celular[i]).val(),
							  "ubicacion" : $(ubicacion[i]).val()})

	}

	$("#listaPersonales").val(JSON.stringify(listaPersonales)); 

}

/*=============================================
LISTAR MÉTODO DE PAGO
=============================================*/

function listarMetodos(){

	var listaMetodos = "";

	if($("#nuevoMetodoPago").val() == "Efectivo"){

		$("#listaMetodoPago").val("Efectivo");

	}else{

		$("#listaMetodoPago").val($("#nuevoMetodoPago").val()+"-"+$("#nuevoCodigoTransaccion").val());

	}

}



/*=============================================
BORRAR VENTA
=============================================*/
$(".tablas").on("click", ".btnEliminarVenta", function(){

  var idVenta = $(this).attr("idVenta");

  swal({
        title: '¿Está seguro de borrar la venta?',
        text: "¡Si no lo está puede cancelar la accíón!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar venta!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=ventas&idVenta="+idVenta;
        }

  })

})

/*=============================================
IMPRIMIR FACTURA
=============================================*/

$(".tablas").on("click", ".btnImprimirPdfRegistro", function(){
	var idTarea = $(this).attr("idTarea");
	window.open("reporte/listaPersonal.php?codigo="+idTarea, "_blank");
})

/*=============================================
IMPRIMIR EXCEL
=============================================*/

$(".tablas").on("click", ".btnExcelRegistro", function(){
	var idTarea = $(this).attr("idTarea");
	window.open("reporte/excelPersonal.php?codigo="+idTarea, "_blank");
})



/*=============================================================================================================

==============================================================================================================*/


/*=============================================
CARGAR LA TABLA DINÁMICA DE PERSONAL
=============================================*/

$('.tablaPersonalT').DataTable( {
    "ajax": "ajax/datatable-tarea.ajax.php?idTarea="+localStorage.getItem('ididtarea') + "&idPlanta=" + localStorage.getItem("ididplanta"),
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
AGREGANDO PERSONAL A LA TABLA
=============================================*/

$(".tablaPersonalT tbody").on("click", "button.procesarPdf", function(){
	var idPersonal = $(this).attr("idPersonal");

	window.open("reporte/merge_pdf/processor.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank");

});

$(".tablaPersonalT tbody").on("click", "button.procesarPdf3", function(){

	var idpersona = $(this).data("idpersona");
	var idtarea = $(this).data("idtarea");

	$("#idPersonaInput").val(idpersona);
	$("#idtareaInput").val(idtarea);
	$('#modalOpcione2').modal('show');

});
$("#guardarOpciones2").click(function() {
    // Obtener los valores de los inputs del modal
    var idPersona = $("#idPersonaInput").val();
	var idtarea = $("#idtareaInput").val();

	var examenMedico = $("#examenMedico").prop("checked") ? 1 : 0;
    var induccion = $("#induccion").prop("checked") ? 1 : 0;
    var cstr = $("#cstr").prop("checked") ? 1 : 0;


  //  window.open("reporte/union/procesador.php?codigo="+idPersona+"&examen="+examenMedico+"&inducc="+induccion+"&cstr="+cstr+"&idtarea="+idtarea, "_blank");
	// Construir la URL con los parámetros
    var url = "reporte/union/procesador.php?codigo=" + encodeURIComponent(idPersona) +
              "&examen=" + encodeURIComponent(examenMedico) +
              "&inducc=" + encodeURIComponent(induccion) +
              "&cstr=" + encodeURIComponent(cstr) +
              "&idtarea=" + encodeURIComponent(idtarea);

    // Abrir la URL en una nueva ventana
    window.open(url, "_blank");

    // Cerrar el modal
    $("#modalOpcione2").modal("hide");

  });


/*=============================================
AGREGANDO PERSONAL A LA TABLA
=============================================*/

$(".tablaPersonalT tbody").on("click", "button.verPdf", function(){
	var idPersonal = $(this).attr("idPersonal");
	var idTarea = $(this).attr("idTarea");
	var idPlanta = $(this).attr("idPlanta");
	var idDni = $(this).attr("idDni");

	console.log(idDni);
	console.log(idTarea);
	console.log(idPlanta);
	
	window.open("reporte/plantas/"+idPlanta+"/tareas/"+idTarea+"/"+idPersonal+"/"+idDni+".pdf", "_blank");

});

/*=============================================
AGREGANDO 01 ANEXO ABC
=============================================*/

$(".tablaPersonalT tbody").on("click", "button.anexoABC", function(){

	var idPersonal = $(this).attr("idPersonal");
	var idPlanta = $(this).attr("idPlanta");
	var idTarea = $(this).attr("idTarea");

	$("#idPersonaInput").val(idPersonal);
	$("#idtareaInput").val(idTarea);
	$("#idplantaInput").val(idPlanta);
	$('#modalOpcione3').modal('show');

});

$("#guardarOpciones3").click(function() {

	console.log('dentro');

	var idPersonal = $("#idPersonaInput").val();
	var idPlanta = $("#idplantaInput").val();
	var idTarea = $("#idtareaInput").val();

	var firma = $("#firma").prop("checked") ? 1 : 0;
    var huella = $("#huella").prop("checked") ? 1 : 0;

	console.log(idTarea);
	console.log(idPlanta);

	switch (idPlanta) {
		case '1':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoV-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);

		break;
		case '2':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '3':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoV-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 9000);

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '4':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '5':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '6':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '7':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '8':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '12':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '13':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '14':

		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion-cerro.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoA.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 9000);

		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/contrato.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 18000);

		break;
		case '15':

		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion-cerro.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoA.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 9000);

		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/contrato.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 18000);

			break;
		case '17':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '18':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoV.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 9000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '19':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoV.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 9000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '20':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoV.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 9000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '23':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '24':

			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/carta.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/declaracion.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
			setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		case '34':

		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/autorizacion-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 0);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoV-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 3000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoB.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 6000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexoC-alpamarca.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 9000);

		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo4.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 12000);
		setTimeout(() => { window.open("reporte/plantas/"+idPlanta+"/anexo5.php?codigo="+idPersonal+"&idTarea="+idTarea+"&firma="+firma+"&huella="+huella, "_blank"); }, 15000);

		break;
		}

		$("button.anexoABC[idPersonal='"+idPersonal+"']").removeClass('btn-primary');
		$("button.anexoABC[idPersonal='"+idPersonal+"']").addClass('btn-default');

});

/*=============================================
SUBIENDO LA FIRMA DEL RESIDENTE
=============================================*/
$(".firmaResidente").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".firmaResidente").val("");

			swal({
				title: "Error al subir la imagen",
				text: "¡La imagen debe estar en formato JPG o PNG!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(imagen["size"] > 2000000){

		$(".firmaResidente").val("");

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

			$(".previsualizar").attr("src", rutaImagen);

		})

	}
})

/*=============================================
SUBIENDO EL PDF CSTR
=============================================*/
$(".pdfcstr").change(function(){

	var archivo = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(archivo["type"] != "application/pdf"){

		$(".pdfcstr").val("");

			swal({
				title: "Error al subir El Archivo",
				text: "¡El archivo debe estar en formato PDF!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(archivo["size"] > 200000000){

		$(".pdfcstr").val("");

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
SUBIENDO EL PDF CSTR
=============================================*/
$(".pdfvidaley").change(function(){

	var archivo = this.files[0];
	
	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
	=============================================*/

	if(archivo["type"] != "application/pdf"){

		$(".pdfvidaley").val("");

			swal({
				title: "Error al subir El Archivo",
				text: "¡El archivo debe estar en formato PDF!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});

	}else if(archivo["size"] > 200000000){

		$(".pdfvidaley").val("");

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


/*=============================================================================================================

==============================================================================================================*/
/*=============================================
BOTON INGRESAR PERSONAL
=============================================*/
$(".tablas").on("click", ".btnInsertarPersonalPre", function(){

	console.log('dentro')

	var idPreseleccion = $(this).attr("idPreseleccion");

	window.location = "index.php?ruta=crear-preseleccion&idPreseleccion="+idPreseleccion;

})


/*=============================================
CARGAR LA TABLA DINÁMICA DE PERSONAL
=============================================*/

$('.tablaPersonalPre').DataTable( {
    "ajax": "ajax/datatable-pre.ajax.php?",
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
AGREGANDO PERSONAL A LA TABLA
=============================================*/

$(".tablaPersonalPre tbody").on("click", "button.agregarPersonal", function(){

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

			var nombre = respuesta["nombre"];
			var cargo = respuesta["cargo"];
			var celular = respuesta["celular"];
			var distrito = respuesta["distrito"];
			var provincia = respuesta["provincia"];
			var departamento = respuesta["departamento"];
			var tiene = respuesta["observacion"];
			var observacion = respuesta["descripcion"];


          	$(".nuevoPersonal").append(

          	'<div class="row" style="padding:5px 15px">'+
			  '<!-- Descripción del producto -->'+

	          '<div class="col-xs-4" style="padding-right:0px">'+
	            '<div class="input-group">'+
	              
	              '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarPersonalPre" idPersonal="'+idPersonal+'"><i class="fa fa-times"></i></button></span>'+

	              '<input type="text" class="form-control nuevoNombrePersonal" idPersonal="'+idPersonal+'" name="agregarPersonal" value="'+nombre+'" readonly required>'+
				  

	            '</div>'+
	          '</div>'+
			  '<!-- Cantidad del producto -->'+

	          '<div class="col-xs-3"><input type="text" class="form-control nuevoCargo" name="nuevCargo" value="'+cargo+'" readonly> </div>' +
			  '<div class="col-xs-2"><input type="text" class="form-control nuevoCelular" name="nuevCelular" value="'+celular+'" readonly></div>' +
			  '<div class="col-xs-3"><input type="text" class="form-control nuevoProvincia" name="nuevProvincia" value="'+provincia+'" readonly></div>' +
	        '</div>') 

			listarPersonales();

			 // PONER FORMATO AL PRECIO DE LOS PRODUCTOS

			 $(".nuevoNombrePersonal").number(true, 2);
			 localStorage.removeItem("quitarPersonal");

      	}

     })

});

/*=============================================
QUITAR PERSONAL DE LA LISTA PRE
=============================================*/

var idQuitarProducto = [];

localStorage.removeItem("quitarPersonal");

$(".formularioPersonal").on("click", "button.quitarPersonal", function(){

	$(this).parent().parent().parent().parent().remove();

	var idPersonal = $(this).attr("idPersonal");

	/*=============================================
	ALMACENAR EN EL LOCALSTORAGE EL ID DEL PRODUCTO A QUITAR
	=============================================*/

	if(localStorage.getItem("quitarPersonal") == null){

		idquitarPersonalPre = [];
	
	}else{

		idquitarPersonalPre.concat(localStorage.getItem("quitarPersonal"))

	}

	idquitarPersonalPre.push({"idPersonal":idPersonal});

	localStorage.setItem("quitarPersonalPre", JSON.stringify(idquitarPersonalPre));

	$("button.recuperarBoton[idPersonal='"+idPersonal+"']").removeClass('btn-default');

	$("button.recuperarBoton[idPersonal='"+idPersonal+"']").addClass('btn-primary agregarProducto');

        listarPersonales()
	
})


/*=============================================
FUNCIÓN PARA DESACTIVAR LOS BOTONES AGREGAR CUANDO EL PRODUCTO YA HABÍA SIDO SELECCIONADO EN LA CARPETA
=============================================*/

function quitarAgregarPersonal(){

	//Capturamos todos los id de productos que fueron elegidos en la venta
	var idpersonales = $(".quitarPersonal");

	//Capturamos todos los botones de agregar que aparecen en la tabla
	var botonesTabla = $(".tablaPersonalPre tbody button.agregarPersonal");

	//Recorremos en un ciclo para obtener los diferentes idProductos que fueron agregados a la venta
	for(var i = 0; i < idpersonales.length; i++){

		//Capturamos los Id de los productos agregados a la venta
		var boton = $(idpersonales[i]).attr("idPersonal");
		
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

$('.tablaPersonalPre').on( 'draw.dt', function(){

	quitarAgregarProducto();

})


/*=============================================
EDITAR 	EDITAR PERSONAL
=============================================*/
$(".tablas").on("click", ".btnEditarPersonal", function(){

	var idTarea = $(this).attr("idTarea");
	console.log(idTarea);

	var datos = new FormData();
    datos.append("idTarea", idTarea);

    $.ajax({

      url:"ajax/tareas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

         $("#idtarea").val(respuesta[0]["id"]);
		 $("#idpreseleccion").val(respuesta[0]["idpreseleccion"]);
		 $("#editidplanta").val(respuesta[0]["idplanta"]);

		  $("#edittitulo").val(respuesta[0]["titulo"]);
          $("#editfechainicio").val(respuesta[0]["fechainicio"]);
		  $("#editfechafin").val(respuesta[0]["fechafin"]);
		  $("#editdescripciontrabajo").val(respuesta[0]["descripciontrabajo"]);
		  $("#editautoriza").val(respuesta[0]["autoriza"]);
		  $("#editcargoautoriza").val(respuesta[0]["cargoautoriza"]);
		  $("#editsupervisor").val(respuesta[0]["supervisor"]);
		  $("#editcargosupervisor").val(respuesta[0]["cargosupervisor"]);
		  $("#editsuperintendente").val(respuesta[0]["superintendente"]);
		  $("#editfechacontrato").val(respuesta[0]["fechacontrato"]);

		  $("#editareatrabajo").html(respuesta[0]["areatrabajo"]);
			$("#editareatrabajo").val(respuesta[0]["areatrabajo"]);

			$("#edittipotrabajo").html(respuesta[0]["tipotrabajo"]);
			$("#edittipotrabajo").val(respuesta[0]["tipotrabajo"]);


    }

  	})

})