<?php

class ControladorPre{

	/*=============================================
	CREAR PERSONALES
	=============================================*/

	static public function ctrCrearPre(){

		if(isset($_POST["seleccionarPlanta"])){



			if(isset($_POST["seleccionarPlanta"])){

				if($_POST["listaPersonales"] == ""){

						echo'<script>

					swal({
						type: "error",
						title: "No existe ningun Personal en la Lista",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
						}).then(function(result){
									if (result.value) {

									window.location = "crear-preseleccion";

									}
								})

					</script>';

					return;
				}


				$tabla = "preseleccion";

				$datos = array("idplanta"=>$_POST["seleccionarPlanta"],
								"listapersonal"=>$_POST["listaPersonales"],
								"nombre"=>$_POST["nuevoNombre"],
								"descripcion"=>$_POST["nuevoDescripcion"],
								"nombreresponsable"=>$_POST["nombreResponsable"],
								"cargoresponsable"=>$_POST["cargoResponsable"],
								"celularresponsable"=>$_POST["celularResponsable"],
								"nombresuper"=>$_POST["nombreSupervidor"],
								"cargosuper"=>$_POST["cargoSupervidor"],
								"celularsuper"=>$_POST["celularSupervidor"]
							);

				$respuesta = ModeloPre::mdlCrearPre($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
							type: "success",
							title: "La Unidad fue creada con sus Personales calificados",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
									if (result.value) {

									window.location = "preseleccion";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
							type: "error",
							title: "¡La Unidad NO fue creada !",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
							if (result.value) {

							window.location = "preseleccion";

							}
						})

				</script>';



			}

		}

	}

	/*=============================================
	EDITAR PERSONALES
	=============================================*/

	static public function ctrEditarPre(){

		if(isset($_POST["listaPersonales"])){

			$id = $_GET["idPreseleccion"];

			if(isset($_POST["listaPersonales"])){

				if($_POST["listaPersonales"] == ""){

					echo'<script>

					swal({
						type: "warning",
						title: "No hay ningun Personal Aprobado",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
						}).then(function(result){
									if (result.value) {

										window.location = "preseleccion";

									}
								})

					</script>';

					return;
				}


				$tabla = "preseleccion";

				$datos = array("id"=>$id,
								"listapersonal"=>$_POST["listaPersonales"]);

				$respuesta = ModeloPre::mdlEditarPre($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
							type: "success",
							title: "El Personal ha sido guardado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
									if (result.value) {

									window.location = "preseleccion";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
							type: "error",
							title: "¡El Personal no puede ir vacío o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
							if (result.value) {

							window.location = "preseleccion";

							}
						})

				</script>';



			}

		}

	}


	/*=============================================
	MOSTRAR PERSONAL
	=============================================*/

	static public function ctrMostrarPre($item, $valor){

		$tabla = "preseleccion";

		$respuesta = ModeloPre::mdlMostrarPre($tabla, $item, $valor);

		return $respuesta;

	}
	/*=============================================
	MOSTRAR ALERTAS
	=============================================*/

	static public function ctrMostrarAlertas($item, $valor){

		$tabla = "preseleccion";

		$respuesta = ModeloPre::mdlMostrarAlertas($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	DESACTIVAR PRESELCCION
	=============================================*/

	static public function ctrEliminarPre(){

		if(isset($_GET["idPreseleccion"])){

			

			if(isset($_GET["idPreseleccion"])){


				$tabla = "preseleccion";
				$valor = $_GET["idPreseleccion"];
				$respuesta = ModeloPre::mdlEliminarPre($tabla, $valor);

				if($respuesta == "ok"){

					echo'<script>

					swal({
							type: "success",
							title: "La Seleccion de Personal ha sido borrado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
									if (result.value) {

									window.location = "preseleccion";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
							type: "error",
							title: "¡El Personal no se puede borrar!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
							if (result.value) {

							window.location = "preseleccion";

							}
						})

				</script>';



			}

		}

	}
}

