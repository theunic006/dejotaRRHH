<?php

require_once "../controladores/personal.controlador.php";
require_once "../modelos/personal.modelo.php";

$valor = $_GET["codigo"];
$item = 'id';

$respuesta = ControladorPersonales::ctrMostrarCertificadoU($item, $valor);


$nombre =($respuesta["nombre"]);
$dni =($respuesta["dni"]);
$cargo = ($respuesta["cargo"]);
$celular = ($respuesta["celular"]);
$planta = ($respuesta["planta"]);
$unidad = ($respuesta["unidad"]);
$fechainicio = ($respuesta["fechainicio"]);
$fechafin = ($respuesta["fechafin"]);
$areatrabajo = ($respuesta["areatrabajo"]);
$descripcion = ($respuesta["descripcion"]);
$fecha = ($respuesta["fecha"]);

$porciones = explode("-", $fecha);
$año= $porciones[0];
$mesnum= $porciones[1];
$dia=$porciones[2];

switch ($mesnum) {
	case '1': $mes = 'Enero';break;
	case '2': $mes = 'Febrero';break;
	case '3': $mes = 'Marzo';break;
	case '4': $mes = 'Abril';break;
	case '5': $mes = 'Mayo';break;
	case '6': $mes = 'Junio';break;
	case '7': $mes = 'Julio';break;
	case '8': $mes = 'Agosto';break;
	case '9': $mes = 'Septiembre';break;
	case '10': $mes = 'Octubre';break;
	case '11': $mes = 'Noviembre';break;
	case '12': $mes = 'Diciembre';break;
	default: $mes = 'Non'; break;
  }

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

// Introducimos HTML de prueba
if(empty($_GET["codigo"]))
{
	echo "No es posible generar la una Guia.";
}else{
	$codigo = $_GET["codigo"];

	$options = new Options();
	$options->set('IsRemoteEnable', true);

	ob_start();
	include(dirname('__FILE__').'/pdfcert.php');
	$html = ob_get_clean();

	$dompdf = new Dompdf($options);

	$dompdf->loadHtml($html);
	$dompdf->setPaper('a4', 'portrait');
	$dompdf->render();
	$dompdf->stream('Lista-Personal.pdf',array('Attachment'=>0));


}

?>