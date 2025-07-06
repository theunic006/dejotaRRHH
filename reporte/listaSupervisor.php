<?php

require_once "../controladores/tareas.controlador.php";
require_once "../modelos/tareas.modelo.php";

$valor = $_GET["codigo"];

$respuesta = ControladorTareas::ctrMostrarPdfSup($valor);

$personal = json_decode($respuesta[0]["listapersonal"], true);
$planta = ($respuesta[0]["planta"]);
$nombre = ($respuesta[0]["nombre"]);
$descripcion = ($respuesta[0]["descripcion"]);
$nombreresponsable = ($respuesta[0]["nombreresponsable"]);
$cargoresponsable = ($respuesta[0]["cargoresponsable"]);
$celularresponsable = ($respuesta[0]["celularresponsable"]);
$nombresuper = ($respuesta[0]["nombresuper"]);
$cargosuper = ($respuesta[0]["cargosuper"]);
$celularsuper = ($respuesta[0]["celularsuper"]);



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
	include(dirname('__FILE__').'/pdflistaSupervisor.php');
	$html = ob_get_clean();

	$dompdf = new Dompdf($options);

	$dompdf->loadHtml($html);
	$dompdf->setPaper('a4', 'portrait');
	$dompdf->render();
	$dompdf->stream('Lista-Personal.pdf',array('Attachment'=>0));


}

?>