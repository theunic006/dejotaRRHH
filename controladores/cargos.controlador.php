<?php

class ControladorCargos{

	/*=============================================
	CREAR CargoS
	=============================================*/

	static public function ctrCrearCargo(){

		if(isset($_POST["nuevaCargo"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCargo"])){

				$tabla = "cargos";

				$datos = $_POST["nuevaCargo"];

				$respuesta = ModeloCargos::mdlIngresarCargo($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cargo ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "cargos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cargo no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "cargos";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR CARGOS
	=============================================*/

	static public function ctrMostrarCargos($item, $valor){

		$tabla = "cargos";

		$respuesta = ModeloCargos::mdlMostrarCargos($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	EDITAR CARGO
	=============================================*/

	static public function ctrEditarCargo(){

		if(isset($_POST["editarCargo"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCargo"])){

				$tabla = "cargos";

				$datos = array("cargo"=>$_POST["editarCargo"],
							   "id"=>$_POST["idCargo"]);

				$respuesta = ModeloCargos::mdlEditarCargo($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cargo ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "cargos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cargo no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "cargos";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR CARGO
	=============================================*/

	static public function ctrBorrarCargo(){

		if(isset($_GET["idCargo"])){

			$tabla ="cargos";
			$datos = $_GET["idCargo"];

			$respuesta = ModeloCargos::mdlBorrarCargo($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El cargo ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "cargos";

								}
							})

				</script>';

			}		

		}
		
	}
}
