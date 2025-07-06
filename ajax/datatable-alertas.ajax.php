<?php

require_once "../controladores/preseleccion.controlador.php";
require_once "../modelos/preseleccion.modelo.php";


class TablaAlertas{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaAlertas(){

		$item = null;
    	$valor = null;

  		$alertas = ControladorPre::ctrMostrarAlertas($item, $valor);
		
		  echo json_encode($alertas);

	}



}

/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activarAlertas = new TablaAlertas();
$activarAlertas -> mostrarTablaAlertas();

