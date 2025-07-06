<?php

require_once "../controladores/personal.controlador.php";
require_once "../modelos/personal.modelo.php";

class AjaxPersonales{

	/*=============================================
	EDITAR PERSONALES
	=============================================*/	
	public $nombrePersonal;
	public $idPersonal;

		public function ajaxEditarPersonal(){

			if($this->nombrePersonal != ""){

				$item = "nombre";
				$valor = $this->$nombrePersonal;

				$respuesta = ControladorPersonales::ctrMostrarPersonales($item, $valor);

				echo json_encode($respuesta);

			}else{

				$item = "id";
				$valor = $this->idPersonal;

				$respuesta = ControladorPersonales::ctrMostrarPersonales($item, $valor);

				echo json_encode($respuesta);

			}
	}

}

class AjaxFamiliar{

	/*=============================================
	EDITAR FAMILIAR
	=============================================*/	

	public $idFamiliar;

	public function ajaxEditarFamiliar(){

		$item = "idpersonal";
		$valor = $this->idFamiliar;

		$respuesta = ControladorPersonales::ctrMostrarFamiliar($item, $valor);

		echo json_encode($respuesta);


	}

}

class AjaxExamen{

	/*=============================================
	EDITAR EXAMEN MEDICO
	=============================================*/	

	public $idExamen;

	public function ajaxEditarExamen(){

		$item = "idpersonal";
		$valor = $this->idExamen;

		$respuesta = ControladorPersonales::ctrMostrarExamen($item, $valor);

		echo json_encode($respuesta);


	}

}

class AjaxInduccion{

	/*=============================================
	EDITAR INDUCCION 
	=============================================*/	

	public $idInduccion;

	public function ajaxEditarInduccion(){

		$item = "idpersonal";
		$valor = $this->idInduccion;

		$respuesta = ControladorPersonales::ctrMostrarInduccion($item, $valor);

		echo json_encode($respuesta);


	}

}

class AjaxObservacion{

	/*=============================================
	EDITAR OBSERVACION
	=============================================*/	

	public $idObservacion;

	public function ajaxEditarObservacion(){

		$item = "idpersonal";
		$valor = $this->idObservacion;

		$respuesta = ControladorPersonales::ctrMostrarObservacion($item, $valor);

		echo json_encode($respuesta);


	}

}

class AjaxExperiencia{

	/*=============================================
	EDITAR EXPERIENCIA
	=============================================*/	

	public $idExperiencia;

	public function ajaxEditarExperiencia(){

		$item = "idpersonal";
		$valor = $this->idExperiencia;

		$respuesta = ControladorPersonales::ctrMostrarExperiencia($item, $valor);

		echo json_encode($respuesta);


	}

}
/*=============================================
EDITAR PERSONALES
=============================================*/	

if(isset($_POST["idPersonal"])){

	$personal = new AjaxPersonales();
	$personal -> idPersonal = $_POST["idPersonal"];
	$personal -> ajaxEditarPersonal();

}

