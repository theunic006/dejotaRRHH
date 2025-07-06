<?php

require_once "../controladores/tareas.controlador.php";
require_once "../modelos/tareas.modelo.php";

class AjaxTareas
{

	/*=============================================
	EDITAR PERSONALES
	=============================================*/
	public $idTarea;

	public function ajaxEditarTarea()
	{

		$item = "id";
		$valor = $this->idTarea;

		$respuesta = ControladorTareas::ctrMostrarTareas($item, $valor);

		echo json_encode($respuesta);
	}
}

/*=============================================
EDITAR PERSONALES
=============================================*/

if (isset($_POST["idTarea"])) {

	$tarea = new AjaxTareas();
	$tarea->idTarea = $_POST["idTarea"];
	$tarea->ajaxEditarTarea();
}
