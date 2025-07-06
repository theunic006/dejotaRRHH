<?php

require_once "../../../controladores/personal.controlador.php";
require_once "../../../modelos/personal.modelo.php";

require_once "../../../controladores/tareas.controlador.php";
require_once "../../../modelos/tareas.modelo.php";

$valor = $_GET["codigo"];
$idtarea = $_GET["idTarea"];
$item = 'id';

$getfirma = $_GET["firma"];
$gethuella = $_GET["huella"];

$tareas = ControladorTareas::ctrMostrarTareasPlantas($item,$idtarea);


$listaPersonales = json_decode($tareas["personal"], true);
foreach ($listaPersonales as $key => $value) {

	$tabla = "personal";

	 $personal = ModeloPersonales::mdlMostrarPersonalesFormatos($tabla,$item, $valor);

 }

$nombre =($personal["nombre"]);
$dni =($personal["dni"]);
$direccion =($personal["direccion"]);
$cargo = ($personal["cargo"]);
$distrito = ($personal["distrito"]);
$provincia = ($personal["provincia"]);
$departamento = ($personal["departamento"]);
$edad = ($personal["edad"]);
$genero = ($personal["genero"]);
$estadocivil = ($personal["estadocivil"]);
$gruposanguineo = ($personal["gruposanguineo"]);
$celular = ($personal["celular"]);
$correo = ($personal["correo"]);
$fechanacimiento = DateTime::createFromFormat('Y-m-d', $personal["fechanacimiento"])->format('d/m/Y');
$lugarnacimiento = $personal["distrito"] ." - ". $personal["provincia"]." - ". $personal["departamento"];


if ($getfirma=='1') {
	$firma = '../../../'.($personal["imagenfirma"]);
}else{
	$firma = '';
}

if ($gethuella=='1') {
	$huella = '../../../'.($personal["imagenhuella"]);
}else{
	$huella = '';
}

$familiar = ($personal["familiar"]);
$parentesco = ($personal["parentesco"]);
$fcelular = ($personal["fcelular"]);


//DATOS DE LAS UNIDADES//

$planta = ($tareas["nombre"]);

$descripciontrabajo = ($tareas["descripciontrabajo"]);
$areatrabajo = ($tareas["areatrabajo"]);

if($areatrabajo=="SUPERFICIE"){
	$check1 = '(X)';
	$check2 = '( )';
}else{
	$check1 = '( )';
	$check2 = '(X)';
}

$autoriza = ($tareas["autoriza"]);
$cargoautoriza = ($tareas["cargoautoriza"]);
$supervisor = ($tareas["supervisor"]);
$cargosupervisor = ($tareas["cargosupervisor"]);
$superintendente = ($tareas["superintendente"]);
$cargosuperintendente = ($tareas["cargosuperintendente"]);
$pdistrito = ($tareas["pdistrito"]);
$pprovincia = ($tareas["pprovincia"]);
$unidadproduccion =($tareas["unidadproduccion"]);
$residente = ($tareas["residente"]);
$cargoresidente = ($tareas["cargoresidente"]);
$fechacontrato = ($tareas["fechacontrato"]);
$porciones = explode("-", $fechacontrato);
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

$residentee = '../../../'.($tareas["firmaResidente"]);

$fechainicio = DateTime::createFromFormat('Y-m-d', $tareas["fechainicio"])->format('d/m/Y');
$fechafin = DateTime::createFromFormat('Y-m-d', $tareas["fechafin"])->format('d/m/Y');

$dias = ($tareas["dias"]);

$directorio = 'tareas/'.$idtarea.'/'.$_GET["codigo"];  //  tareas/97/1961

?>