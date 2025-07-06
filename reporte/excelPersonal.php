<?php

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=Lista_Personal_RRHH.xls");
header("Pragma: no-cache"); 
header("Expires: 0");

require_once "../controladores/tareas.controlador.php";
require_once "../modelos/tareas.modelo.php";

$valor = $_GET["codigo"];

$respuesta = ControladorTareas::ctrMostrarPdfTareas($valor);

$titulo =($respuesta[0]["titulo"]);
$fechainicio =($respuesta[0]["fechainicio"]);
$fechafin = ($respuesta[0]["fechafin"]);
$personal = json_decode($respuesta[0]["personal"], true);
$planta = ($respuesta[0]["planta"]);

$output = "";
	

	$output .="
		<h2>Planta: ".$planta."</h2>
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