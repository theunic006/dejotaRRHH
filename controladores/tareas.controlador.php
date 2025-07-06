<?php

use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class ControladorTareas{

	/*=============================================
	MOSTRAR Tareas
	=============================================*/

	static public function ctrMostrarTareas($item, $valor){

		$tabla = "tareas";

		$respuesta = ModeloTareas::mdlMostrarTareas($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR Tareas
	=============================================*/

	static public function ctrMostrarTareasPlantas($item, $idtarea){

		$tabla = "tareas";

		$respuesta = ModeloTareas::mdlMostrarTareasPlantas($tabla, $item, $idtarea);

		return $respuesta;

	}
	/*=============================================
	MOSTRAR Tareas PARA CERTIFICADOS
	=============================================*/

	static public function ctrMostrarTareasCert($item, $valor){

		$tabla = "tareas";

		$respuesta = ModeloTareas::mdlMostrarTareasCert($tabla, $item, $valor);

		return $respuesta;

	}
	/*=============================================
	CREAR TAREA
	=============================================*/

	static public function ctrCrearTarea(){

		if(isset($_POST["nombre"])){

			if($_POST["nombre"]){

				$idmasuno = ModeloTareas::mdlMostrarId();
				$idadd = $idmasuno["id"]+1;


				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = "vistas/img/usuarios/default/anonymous.jpg";

				if(isset($_FILES["firmaResidente"]["tmp_name"]) && !empty($_FILES["firmaResidente"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["firmaResidente"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 400;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio2 = "vistas/img/jefes/".$_POST["residente"];

						mkdir($directorio2, 0755);

					


					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["firmaResidente"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);
						$ruta = "vistas/img/jefes/".$_POST["residente"]."/".$aleatorio.".jpg";
						$origen = imagecreatefromjpeg($_FILES["firmaResidente"]["tmp_name"]);						
						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
						imagejpeg($destino, $ruta);

					}

					if($_FILES["firmaResidente"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);
						$ruta = "vistas/img/jefes/".$_POST["residente"]."/".$aleatorio.".png";
						$origen = imagecreatefrompng($_FILES["firmaResidente"]["tmp_name"]);						
						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
						imagepng($destino, $ruta);

					}

					if ($ruta == "") {
						$ruta = "VACIO";
					}

				}

				/*=============================================
				VALIDAR ARCHIVO PDF ACTA DE ASISTENCIA
				=============================================*/

				$rutaacta = "";

				if(isset($_FILES["actaasistencia"]["tmp_name"]) && !empty($_FILES["actaasistencia"]["tmp_name"])){

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					$directorio2 = "vistas/img/tareas/".$idadd;
					if($directorio2!=null){
						mkdir($directorio2, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["actaasistencia"]["type"] == "application/pdf"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
						$aleatorio = mt_rand(100,999);
						$rutaacta = "vistas/img/tareas/".$idadd."/".$aleatorio."actaasistencia.pdf";
						$origen = basename($_FILES["actaasistencia"]["tmp_name"]);	

						move_uploaded_file($_FILES["actaasistencia"]["tmp_name"], $rutaacta );
					}

					if($rutaacta == ""){
						$rutaacta="VACIO";
					}

				}

				/*=============================================
				VALIDAR ARCHIVO PDF CSTR
				=============================================*/

				$rutacstr = "";

				if(isset($_FILES["cstr"]["tmp_name"]) && !empty($_FILES["cstr"]["tmp_name"])){

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					$directorio3 = "vistas/img/tareas/".$idadd;
					if($directorio3!=null){
						mkdir($directorio3, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["cstr"]["type"] == "application/pdf"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
						$aleatorio = mt_rand(100,999);
						$rutacstr = "vistas/img/tareas/".$idadd."/".$aleatorio."cstr.pdf";
						$origen = basename($_FILES["cstr"]["tmp_name"]);	

						move_uploaded_file($_FILES["cstr"]["tmp_name"], $rutacstr );
					}

					if($rutacstr == ""){
						$rutacstr="VACIO";
					}

				}

				/*=============================================
				VALIDAR ARCHIVO PDF VIDA LEY
				=============================================*/

				$rutavidaley = "";

				if(isset($_FILES["vidaley"]["tmp_name"]) && !empty($_FILES["vidaley"]["tmp_name"])){

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					$directorio4 = "vistas/img/tareas/".$idadd;
					if($directorio4!=null){
						mkdir($directorio4, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["vidaley"]["type"] == "application/pdf"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
						$aleatorio = mt_rand(100,999);
						$rutavidaley = "vistas/img/tareas/".$idadd."/".$aleatorio."vidaley.pdf";
						$origen = basename($_FILES["vidaley"]["tmp_name"]);	

						move_uploaded_file($_FILES["vidaley"]["tmp_name"], $rutavidaley );
					}

					if($rutavidaley == ""){
						$rutavidaley="VACIO";
					}

				}

				$tabla = "tareas";
				$valor = $_POST["idplanta"];

				$datos = array("titulo" => $_POST["nombre"],
								"idplanta" => $_POST["idplanta"],
								"fechainicio" => $_POST["fechainicio"],
								"fechafin" => $_POST["fechafin"],
								"areatrabajo" => $_POST["areatrabajo"],
								"descripciontrabajo" => $_POST["descripciontrabajo"],
								"autoriza" => $_POST["autoriza"],
								"cargoautoriza" => $_POST["cargoautoriza"],
								"supervisor" => $_POST["supervisor"],
								"cargosupervisor" => $_POST["cargosupervisor"],
								"superintendente" => $_POST["superintendente"],
								"cargosuperintendente" => $_POST["cargosuperintendente"],
								"residente" => $_POST["residente"],
								"cargoresidente" => $_POST["cargoresidente"],
								"fechacontrato" => $_POST["fechacontrato"],
								"lugartrabajo" => $_POST["lugartrabajo"],
								"firmaResidente" => $ruta,
								"actaasistencia" => $rutaacta,
								"cstr" => $rutacstr,
								"vidaley" => $rutavidaley);

				$respuesta = ModeloTareas::mdlIngresarTarea($tabla, $datos);

				$preseleccion = ModeloTareas::mdlActualizarPreseleccion($tabla, $valor);

				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
				=============================================*/
				$devuelve = ModeloTareas::mdlDevuelveId($tabla, $valor);

				$directorio = 'reporte/plantas/'.$devuelve[0]["idplanta"].'/tareas/'.$devuelve[0]["id"];
				
				if($directorio!=null){
					mkdir($directorio, 0755);
				}


				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La Tarea ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La Tarea no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	EDITAR NUEVA TAREA
	=============================================*/

	static public function ctrEditarNuevaTarea(){

		
		if(isset($_POST["idTarea"])){

			/*=============================================
			ACTUALIZAR LAS COMPRAS DEL CLIENTE Y REDUCIR EL STOCK Y AUMENTAR LAS VENTAS DE LOS PRODUCTOS
			=============================================*/

			if($_POST["listaPersonales"] == ""){

					echo'<script>

				swal({
					  type: "warning",
					  title: "No hay ningun Personal Aprobado",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

									window.location = "index.php?ruta=tareas&idPlanta="'.$_POST["idplanta"].'"";

								}
							})

				</script>';

				return;
			}

			$listaPersonales = json_decode($_POST["listaPersonales"], true);

			foreach ($listaPersonales as $key => $value) {
		 
				$tablaPersonal = "personal";
				$item = 'idtarea';
				$valor = $value["id"];
				$idtarea = $_POST["idTarea"];

				 $personal = ModeloPersonales::mdlActualizarTarea($tablaPersonal, $item, $valor, $idtarea);

				 $dir2 = 'reporte/plantas/'.$_GET["idPlanta"].'/tareas/'.$_POST["idTarea"].'/'.$value["id"];

				 if($dir2!=null){
					mkdir($dir2, 0755);
				}	
 
			 }

			$tabla = "tareas";

			$datos = array("id"=>$_POST["idTarea"],
						   "personal"=>$_POST["listaPersonales"]);

			$respuesta = ModeloTareas::mdlEditarNuevaTarea($tabla, $datos);


		}

	}

	/*=============================================
	MOSTRAR PDF TAREAS
	=============================================*/

	static public function ctrMostrarPdfTareas($valor){

		$respuesta = ModeloTareas::mdlMostrarPdfTareas($valor);
		return $respuesta;

	}

	/*=============================================
	MOSTRAR PDF SUPERVISOR
	=============================================*/

	static public function ctrMostrarPdfSup($valor){

		$respuesta = ModeloTareas::mdlMostrarPdfSup($valor);
		return $respuesta;

	}

	/*=============================================
	EDITAR PERSONAL
	=============================================*/

	static public function ctrEditarTarea(){

		if(isset($_POST["edittitulo"])){


			if($_POST["edittitulo"]){

				$idmasuno = ModeloTareas::mdlMostrarId();
				$idadd = $idmasuno["id"];


			//	$direccion = 'reporte/plantas/'.$_POST["idplanta"].'/tareas/'.$_POST["idtarea"].'/'.$_GET["codigo"]; 

				/*=============================================
				Crear el directorio si no existe
				=============================================*/
				/*
				if (!file_exists($directorio)) {
					mkdir($directorio, 0777, true);
				}
			*/



				/*=============================================
				VALIDAR ARCHIVO PDF ACTA DE ASISTENCIA
				=============================================*/

				$rutaacta = "";

				if(isset($_FILES["actaasistencia"]["tmp_name"]) && !empty($_FILES["actaasistencia"]["tmp_name"])){

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					$directorio2 = "vistas/img/tareas/".$idadd;
					if($directorio2!=null){
						mkdir($directorio2, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["actaasistencia"]["type"] == "application/pdf"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
						$aleatorio = mt_rand(100,999);
						$rutaacta = "vistas/img/tareas/".$idadd."/".$aleatorio."actaasistencia.pdf";
						$origen = basename($_FILES["actaasistencia"]["tmp_name"]);	

						move_uploaded_file($_FILES["actaasistencia"]["tmp_name"], $rutaacta );
					}

					if($rutaacta == ""){
						$rutaacta="VACIO";
					}

				}

				/*=============================================
				VALIDAR ARCHIVO PDF CSTR
				=============================================*/

				$rutacstr = "";

				if(isset($_FILES["cstr"]["tmp_name"]) && !empty($_FILES["cstr"]["tmp_name"])){

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					$directorio3 = "vistas/img/tareas/".$idadd;
					if($directorio3!=null){
						mkdir($directorio3, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["cstr"]["type"] == "application/pdf"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
						$aleatorio = mt_rand(100,999);
						$rutacstr = "vistas/img/tareas/".$idadd."/".$aleatorio."cstr.pdf";
						$origen = basename($_FILES["cstr"]["tmp_name"]);	

						move_uploaded_file($_FILES["cstr"]["tmp_name"], $rutacstr );
					}

					if($rutacstr == ""){
						$rutacstr="VACIO";
					}

				}

				/*=============================================
				VALIDAR ARCHIVO PDF VIDA LEY
				=============================================*/

				$rutavidaley = "";

				if(isset($_FILES["vidaley"]["tmp_name"]) && !empty($_FILES["vidaley"]["tmp_name"])){

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					$directorio4 = "vistas/img/tareas/".$idadd;
					if($directorio4!=null){
						mkdir($directorio4, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["vidaley"]["type"] == "application/pdf"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
						$aleatorio = mt_rand(100,999);
						$rutavidaley = "vistas/img/tareas/".$idadd."/".$aleatorio."vidaley.pdf";
						$origen = basename($_FILES["vidaley"]["tmp_name"]);	

						move_uploaded_file($_FILES["vidaley"]["tmp_name"], $rutavidaley );
					}

					if($rutavidaley == ""){
						$rutavidaley="VACIO";
					}

				}

			   	$tabla = "tareas";

				
				$valorpre = $_POST["idpreseleccion"];

			   	$datos = array("id"=>$_POST["idtarea"],
			   				   "titulo"=>$_POST["edittitulo"],
								"fechainicio" => $_POST["editfechainicio"],
								"fechafin" => $_POST["editfechafin"],
								"areatrabajo" => $_POST["editareatrabajo"],
								"tipotrabajo" => $_POST["edittipotrabajo"],
								"descripciontrabajo" => $_POST["editdescripciontrabajo"],
								"autoriza" => $_POST["editautoriza"],
								"cargoautoriza" => $_POST["editcargoautoriza"],
								"supervisor" => $_POST["editsupervisor"],
								"cargosupervisor" => $_POST["editcargosupervisor"],
								"superintendente" => $_POST["editsuperintendente"],
								"fechacontrato" => $_POST["editfechacontrato"],
								"actaasistencia" => $rutaacta,
								"cstr" => $rutacstr,
								"vidaley" => $rutavidaley);
					           

			   	$respuesta = ModeloTareas::mdlEditarTarea($tabla, $datos);

							 ModeloTareas::mdlActualizarPreseleccion($tabla, $valorpre);

				
				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
				=============================================*/

				$item = 'id';
				$valor = $_POST["idtarea"];

				$devuelve = ModeloTareas::mdlMostrarTareas($tabla,$item, $valor);

				$listaPersonales = json_decode($devuelve[0]["personal"], true);

				foreach ($listaPersonales as $key => $value) {
		 
					 $dir2 = 'reporte/plantas/'.$_POST["editidplanta"].'/tareas/'.$_POST["idtarea"].'/'.$value["id"];
	
					 if (!file_exists($dir2)) {
						mkdir($dir2, 0777, true);
					}
	 
				 }

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El personal ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El personal no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "";

							}
						})

			  	</script>';



			}

		}

	}


}