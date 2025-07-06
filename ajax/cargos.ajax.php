<?php

require_once "../controladores/cargos.controlador.php";
require_once "../modelos/cargos.modelo.php";

class AjaxCargos{

	/*=============================================
	EDITAR cargo
	=============================================*/	


	
	public $idCargo;

	public function ajaxEditarCargo(){


		$item = "id";
		$valor = $this->idCargo;

		if($valor){
			$respuesta = ControladorCargos::ctrMostrarCargos($item, $valor);
		}else{
			$respuesta = ControladorCargos::ctrMostrarCargos('', '');
		}
		
		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR cargo
=============================================*/	
if(isset($_POST["idCargo"])){

	$cargo = new AjaxCargos();
	$cargo -> idCargo = $_POST["idCargo"];
	$cargo -> ajaxEditarCargo();
}
