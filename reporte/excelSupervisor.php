<?php

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=documento_exportado_.xls");
header("Pragma: no-cache"); 
header("Expires: 0");

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


$output = "";
	

	$output .="
		<h2>Planta: ".$planta."</h2>
		<h4>Nombre: ".$nombre."</h4>
		<h4>Descripcion: ".$descripcion."</h4>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>DNI</th>
					<th>Cargo</th>
					<th>Celular</th>
				</tr>
			<tbody>
	";

	$numero=1;
	
	foreach ($personal as $key => $item) {
		
	$output .= "
				<tr>
					<td>".$numero."</td>
					<td>".$item['nombre']."</td>
					<td>".$item['dni']."</td>
					<td>".$item['cargo']."</td>
					<td>".$item['celular']."</td>
				</tr>
	";
	$numero++;
	}
	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;


?>