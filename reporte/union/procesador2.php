<?php

require_once "../../controladores/personal.controlador.php";
require_once "../../modelos/personal.modelo.php";

require_once "../../controladores/tareas.controlador.php";
require_once "../../modelos/tareas.modelo.php";

$valor = $_GET["codigo"];
$idPersonal = $_GET["codigo"];
$idtarea1 = $_GET["idtarea"];
$item = 'id';

$examen = $_GET["examen"];
$inducc = $_GET["inducc"];
$cstr = $_GET["cstr"];

$tareas = ControladorTareas::ctrMostrarTareasPlantas($item,$idtarea1);

$listaPersonales = json_decode($tareas["personal"], true);
foreach ($listaPersonales as $key => $value) {

	$tabla = "personal";

	 $personal = ModeloPersonales::mdlMostrarPersonalesFormatos($tabla,$item, $valor);

 }


$dni =($personal["dni"]);
$idtarea =$idtarea1;
$idplanta =($tareas["idplanta"]);

$certif =($personal["certificado"]);


/*la chamba biene desde auqi  haaa*/
$ubiacion = '../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"];
$archivoSalida = $ubiacion."/".$personal["dni"].".pdf";

$nombrearchivo = $personal["dni"].".pdf";


            /* CV */
            $pdfdni ='../../'.($personal["pdfdni"]);
            /* DNI */
            $pdfcv ='../../'.($personal["pdfcv"]);
            /* CERTIFOCADO MEDICO */
            $examenmedico ='../../'.($personal["certificado"]);
            /* CERTIFOCADO DE INDUCCIONN */
            $induccion ='../../'.($personal["induccion"]);
            
            /* AUTORIZACION */
            $autori='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/autorizacion.pdf';
            /* ANEXO V */
            $anexov='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/anexov.pdf';
            /* ANEXO B */
            $anexob='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/anexob.pdf';
            /* ANEXO C */
            $anexoc='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/anexoc.pdf';
            /* ANEXO 4 */
            $anexo4='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/anexo4.pdf';
            /* ANEXO 5 */
            $anexo5='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/anexo5.pdf';
      
            /* CONTANCIA */
            $constancia='../../'.($tareas["cstr"]);
            /* VIDA LEY  */
            $vidaley='../../'.($tareas["vidaley"]);
             $acta ='../../'.($tareas["actaasistencia"]);
             /* ANEXO V */
             $anexoa='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/anexoa.pdf';
             $declaracion='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/declaracion.pdf';
             /* ANEXO B */
             $carta='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/carta.pdf';
             $contrato='../plantas/'.$idplanta.'/tareas/'.$idtarea.'/'.$_GET["codigo"].'/contrato.pdf';

if($examen=='0' && $inducc=='0' && $cstr=='0'){
    switch ($idplanta) {
        case 1:
            $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$anexo5,$pdfdni,$pdfcv);
        break;
        case 2:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 3:
            $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$anexo5,$pdfdni,$pdfcv);
        break;
        case 4:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 5:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 6:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 7:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 8:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 12:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 13:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 17:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 18:
            $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$anexo5,$pdfdni,$pdfcv);
        break;
        case 19:
            $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$anexo5,$pdfdni,$pdfcv);
        break;
        case 20:
            $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$anexo5,$pdfdni,$pdfcv);
        break;
        case 23:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 24:
            $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
        break;
        case 14:
            $files = array($autori,$anexoa,$anexob,$anexoc,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
        break;
        case 15:
            $files = array($autori,$anexoa,$anexob,$anexoc,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
        break;
    }
    }elseif($examen=='0' && $inducc=='0' && $cstr=='1'){
        switch ($idplanta) {
            case 1:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 3:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 2:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 4:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 5:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 6:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 7:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 8:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 12:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 13:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 17:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 18:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 19:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 20:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 23:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 24:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta);
            break;
            case 14:
                $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
            break;
            case 15:
                $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
            break;
        }
    }elseif($examen=='0' && $inducc=='1' && $cstr=='0'){
        switch ($idplanta) {
            case 1:
                $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 3:
                $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 2:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 4:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 5:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 6:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 7:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 8:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 12:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 13:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 17:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 18:
                $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 19:
                $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 20:
                $files = array($autori,$anexov,$anexob,$anexoc,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 23:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 24:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 14:
                $files = array($autori,$anexoa,$anexob,$anexoc,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
            break;
            case 15:
                $files = array($autori,$anexoa,$anexob,$anexoc,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
            break;
        }
    }elseif($examen=='0' && $inducc=='1' && $cstr=='1'){
        switch ($idplanta) {
            case 1:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 3:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 2:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 4:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 5:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 6:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 7:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 8:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 12:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 13:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 17:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 18:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 19:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 20:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 23:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 24:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta);
            break;
            case 14:
                $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
            break;
            case 15:
                $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
            break;
        }
    }elseif($examen=='1' && $inducc=='0' && $cstr=='0'){
        switch ($idplanta) {
            case 1:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 3:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 2:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 4:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 5:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 6:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 7:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 8:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 12:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 13:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 17:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 18:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 19:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 20:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 23:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 24:
                $files = array($autori,$pdfdni,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 14:
                $files = array($autori,$anexoa,$anexob,$anexoc,$examenmedico,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
            break;
            case 15:
                $files = array($autori,$anexoa,$anexob,$anexoc,$examenmedico,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
            break;
        }
    }elseif($examen=='1' && $inducc=='0' && $cstr=='1'){
        switch ($idplanta) {
            case 1:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 3:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 2:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 4:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 5:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 6:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 7:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 8:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 12:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 13:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 17:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 18:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 19:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 20:
                $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$anexo5,$pdfdni,$pdfcv);
            break;
            case 23:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 24:
                $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$anexo5,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 14:
                $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
            break;
            case 15:
                $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$anexo5,$contrato,$pdfdni,$pdfcv);
            break;
        }
    }elseif($examen=='1' && $inducc=='1' && $cstr=='0'){
        switch ($idplanta) {
            case 1:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 3:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 2:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 4:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 5:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 6:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 7:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 8:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 12:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 13:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 17:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 18:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 19:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 20:
                $files = array($autori,$anexov,$anexob,$anexoc,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
            break;
            case 23:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 24:
                $files = array($autori,$pdfdni,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
            break;
            case 14:
                $files = array($autori,$anexoa,$anexob,$anexoc,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
            break;
            case 15:
                $files = array($autori,$anexoa,$anexob,$anexoc,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
            break;
        }
    }elseif($examen=='1' && $inducc=='1' && $cstr=='1'){
    switch ($idplanta) {
        case 1:
            $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
        break;
        case 3:
            $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
        break;
        case 2:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 4:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 5:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 6:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 7:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 8:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 12:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 13:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 17:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 18:
            $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
        break;
        case 19:
            $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
        break;
        case 20:
            $files = array($autori,$anexov,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$pdfdni,$pdfcv);
        break;
        case 23:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 24:
            $files = array($autori,$pdfdni,$constancia,$vidaley,$anexo4,$induccion,$anexo5,$acta,$pdfcv,$declaracion,$carta,$examenmedico);
        break;
        case 14:
            $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
        break;
        case 15:
            $files = array($autori,$anexoa,$anexob,$anexoc,$constancia,$vidaley,$examenmedico,$anexo4,$induccion,$anexo5,$acta,$contrato,$pdfdni,$pdfcv);
        break;
    }
}

// Verifica que todos los archivos de entrada existan
/*foreach ($files as $archivo) {
    if (!file_exists($archivo)) {
        die("El archivo $archivo no existe.");
    }
}
*/
// Comando Ghostscript. Ajusta la ruta según tu instalación.
$gsPath = '"C:\\Program Files\\gs\\gs10.03.0\bin\gswin64c.exe"';
$cmd = "$gsPath -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=\"$archivoSalida\" " . implode(' ', $files);
//$cmd = "$gsPath -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -dPDFSETTINGS=/prepress -dJPEGQ=100 -r300 -sOutputFile=\"$archivoSalida\" " . implode(' ', $files);

// Ejecuta el comando
$resultado = shell_exec($cmd);

// Verifica si el archivo se creó con éxito
if (file_exists($archivoSalida)) {

    // Descargar el archivo resultante
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $nombrearchivo . '"');
    readfile($archivoSalida);

    echo "Los archivos PDF fueron unidos con éxito! <br>";

    function verificarArchivos($array) {
        foreach ($array as $archivo) {
            if (file_exists($archivo)) {
                echo "El archivo $archivo existe.<br>";
            }
        }
        echo "<br>";
    }

    verificarArchivos($files);
} else {
    echo "Hubo un error al unir los archivos PDF.";

    function verificarArchivos($array) {
        foreach ($array as $archivo) {
            if (file_exists($archivo)) {
                echo "El archivo $archivo existe.<br>";
            } else {
                echo "El archivo $archivo no existe o esta dañado.<br>";
            }
        }
        echo "<br>";
    }

    verificarArchivos($files);

}