<?php

require_once "../../controladores/personal.controlador.php";
require_once "../../modelos/personal.modelo.php";

$valor = $_GET["codigo"];
$idPersonal = $_GET["codigo"];
$item = 'id';

$examen = $_GET["examen"];
$inducc = $_GET["inducc"];
$cstr = $_GET["cstr"];

$respuesta = ControladorPersonales::ctrMostrarPdfPersonales($item, $valor);

$dni =($respuesta["dni"]);
$idtarea =($respuesta["idtarea"]);
$idplanta =($respuesta["idplanta"]);

$certificado = ControladorPersonales::ctmGuardarCertificado($idPersonal);


/*
$pdfcv ='../../'.($respuesta["pdfcv"]);
$pdfdni ='../../'.($respuesta["pdfdni"]);
$examenmedico ='../../'.($respuesta["certificado"]);
$induccion ='../../'.($respuesta["induccion"]);
$acta ='../../'.($respuesta["acta"]);
*/

$ubiacion = '../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"];

/* SIMILARES
1-3
2-4-5-6-7-8-12-13-17-23-24
14-15
*/ 

if($examen=='0' && $inducc=='0' && $cstr=='0'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}elseif($examen=='0' && $inducc=='0' && $cstr=='1'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}elseif($examen=='0' && $inducc=='1' && $cstr=='0'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}elseif($examen=='0' && $inducc=='1' && $cstr=='1'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta)
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}elseif($examen=='1' && $inducc=='0' && $cstr=='0'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}elseif($examen=='1' && $inducc=='0' && $cstr=='1'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "7"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '7' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}elseif($examen=='1' && $inducc=='1' && $cstr=='0'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($anexo4),
          '7' => new CURLFILE($induccion),
          '8' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfdni),
          '10' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($anexo4),
          '7' => new CURLFILE($induccion),
          '8' => new CURLFILE($anexo5),
          '9' => new CURLFILE($pdfdni),
          '10' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($anexo4),
          '4' => new CURLFILE($induccion),
          '5' => new CURLFILE($anexo5),
          '6' => new CURLFILE($acta),
          '7' => new CURLFILE($pdfcv),
          '8' => new CURLFILE($declaracion),
          '9' => new CURLFILE($carta),
          '10' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}elseif($examen=='1' && $inducc=='1' && $cstr=='1'){
  switch ($idplanta) {
    case 1:
        /* 01 ALPAMARCA */
  
        /* CV */
        $pdfdni ='../../'.($respuesta["pdfdni"]);
        if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
        /* DNI */
        $pdfcv ='../../'.($respuesta["pdfcv"]);
        if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
        /* CERTIFOCADO MEDICO */
        $examenmedico ='../../'.($respuesta["certificado"]);
        if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
        /* CERTIFOCADO DE INDUCCIONN */
        $induccion ='../../'.($respuesta["induccion"]);
        if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
        
        /* AUTORIZACION */
        $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
        if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
        /* ANEXO V */
        $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
        if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
        /* ANEXO B */
        $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
        if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
        /* ANEXO C */
        $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
        if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
        /* ANEXO 4 */
        $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
        if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
        /* ANEXO 5 */
        $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
        if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
        /* CONTANCIA */
        $constancia='../../'.($respuesta["cstr"]);
        if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
        /* VIDA LEY  */
        $vidaley='../../'.($respuesta["vidaley"]);
        if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 2:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 3:
  
      /* 03 ROMINA */
  
  
              /* CV */
              $pdfdni ='../../'.($respuesta["pdfdni"]);
              if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
              /* DNI */
              $pdfcv ='../../'.($respuesta["pdfcv"]);
              if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
              /* CERTIFOCADO MEDICO */
              $examenmedico ='../../'.($respuesta["certificado"]);
              if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
              /* CERTIFOCADO DE INDUCCIONN */
              $induccion ='../../'.($respuesta["induccion"]);
              if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
              
              /* AUTORIZACION */
              $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
              if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
              /* ANEXO V */
              $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
              if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
              /* ANEXO B */
              $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
              if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
              /* ANEXO C */
              $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
              if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
              /* ANEXO 4 */
              $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
              if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
              /* ANEXO 5 */
              $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
              if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
        
              /* CONTANCIA */
              $constancia='../../'.($respuesta["cstr"]);
              if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
              /* VIDA LEY  */
              $vidaley='../../'.($respuesta["vidaley"]);
              if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
        
    break;
    case 4:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 5:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 6:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 7:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 8:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 12:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 13:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 14:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 15:
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $anexoa='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoa.pdf';
             if (file_exists($anexoa)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
             if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
             if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
             $contrato='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/contrato.pdf';
             if (file_exists($contrato)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 17:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 18:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 19:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 20:
      /* 01 ALPAMARCA */
  
      /* CV */
      $pdfdni ='../../'.($respuesta["pdfdni"]);
      if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
      /* DNI */
      $pdfcv ='../../'.($respuesta["pdfcv"]);
      if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
      /* CERTIFOCADO MEDICO */
      $examenmedico ='../../'.($respuesta["certificado"]);
      if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
      /* CERTIFOCADO DE INDUCCIONN */
      $induccion ='../../'.($respuesta["induccion"]);
      if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
      
      /* AUTORIZACION */
      $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
      if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
      /* ANEXO V */
      $anexov='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexov.pdf';
      if (file_exists($anexov)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
      /* ANEXO B */
      $anexob='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexob.pdf';
      if (file_exists($anexob)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
      /* ANEXO C */
      $anexoc='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexoc.pdf';
      if (file_exists($anexoc)) {} else {echo "no existe el archivo ANEXO C \r\n ";}
      /* ANEXO 4 */
      $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
      if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
      /* ANEXO 5 */
      $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
      if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
  
      /* CONTANCIA */
      $constancia='../../'.($respuesta["cstr"]);
      if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
      /* VIDA LEY  */
      $vidaley='../../'.($respuesta["vidaley"]);
      if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
  
  
    break;
    case 23:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
    case 24:
  
      /* 02 CHUNGAR */
  
  
             /* CV */
             $pdfdni ='../../'.($respuesta["pdfdni"]);
             if (file_exists($pdfdni)) {} else {echo "no existe el archivo DNI \r\n ";}
             /* DNI */
             $pdfcv ='../../'.($respuesta["pdfcv"]);
             if (file_exists($pdfcv)) {} else {echo "no existe el archivo CV \r\n ";}
             /* CERTIFOCADO MEDICO */
             $examenmedico ='../../'.($respuesta["certificado"]);
             if (file_exists($examenmedico)) {} else {echo "no existe el archivo EXAMEN MEDICO \r\n ";}
             /* CERTIFOCADO DE INDUCCIONN */
             $induccion ='../../'.($respuesta["induccion"]);
             if (file_exists($induccion)) {} else {echo "no existe el archivo CERTIFICADO DE INDUCCION \r\n ";}
             /* ACTA DE ASISTENCIA */
             $acta ='../../'.($respuesta["acta"]);
             if (file_exists($acta)) {} else {echo "no existe el archivo ACTA DE ASISTENCIA \r\n ";}
             
             /* AUTORIZACION */
             $autori='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/autorizacion.pdf';
             if (file_exists($autori)) {} else {echo "no existe el archivo CARTA DE AUTORIZACION \r\n ";}
             /* ANEXO V */
             $declaracion='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/declaracion.pdf';
             if (file_exists($declaracion)) {} else {echo "no existe el archivo ANEXO V \r\n ";}
             /* ANEXO B */
             $carta='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/carta.pdf';
             if (file_exists($carta)) {} else {echo "no existe el archivo ANEXO B \r\n ";}
             /* ANEXO 4 */
             $anexo4='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo4.pdf';
             if (file_exists($anexo4)) {} else {echo "no existe el archivo ANEXO 4 \r\n ";}
             /* ANEXO 5 */
             $anexo5='../plantas/'.$respuesta["idplanta"].'/tareas/'.$respuesta["idtarea"].'/'.$_GET["codigo"].'/anexo5.pdf';
             if (file_exists($anexo5)) {} else {echo "no existe el archivo ANEXO 5 \r\n ";}
       
             /* CONTANCIA */
             $constancia='../../'.($respuesta["cstr"]);
             if (file_exists($constancia)) {} else {echo "no existe el archivo CONSTANCIA CSTR \r\n ";}
             /* VIDA LEY  */
             $vidaley='../../'.($respuesta["vidaley"]);
             if (file_exists($vidaley)) {} else {echo "no existe el archivo CONSTANCIA VIDA LEY \r\n ";}
    break;
  }
  
  $FileHandle = fopen($ubiacion.'/'.$respuesta["dni"].'.pdf', 'w+');
  $curl = curl_init();
  
  switch ($idplanta) {
    case 1:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 2:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 3:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 4:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 5:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 6:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 7:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 8:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 12:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 13:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 14:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 15:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"},
          {"file": "13"},
          {"file": "14"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexoa),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($acta),
          '12' => new CURLFILE($contrato),
          '13' => new CURLFILE($pdfdni),
          '14' => new CURLFILE($pdfcv),
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 17:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 18:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 19:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 20:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($anexov),
          '3' => new CURLFILE($anexob),
          '4' => new CURLFILE($anexoc),
          '5' => new CURLFILE($examenmedico),
          '6' => new CURLFILE($constancia),
          '7' => new CURLFILE($vidaley),
          '8' => new CURLFILE($anexo4),
          '9' => new CURLFILE($induccion),
          '10' => new CURLFILE($anexo5),
          '11' => new CURLFILE($pdfdni),
          '12' => new CURLFILE($pdfcv)
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 23:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
    case 24:
      $instructions = '{
        "parts": [
          {"file": "1"},
          {"file": "2"},
          {"file": "3"},
          {"file": "4"},
          {"file": "5"},
          {"file": "6"},
          {"file": "7"},
          {"file": "8"},
          {"file": "9"},
          {"file": "10"},
          {"file": "11"},
          {"file": "12"}
        ]
      }';
      ///https://pspdfkit.com/
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pspdfkit.com/build',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_POSTFIELDS => array(
          'instructions' => $instructions,
          '1' => new CURLFILE($autori),
          '2' => new CURLFILE($pdfdni),
          '3' => new CURLFILE($constancia),
          '4' => new CURLFILE($vidaley),
          '5' => new CURLFILE($anexo4),
          '6' => new CURLFILE($induccion),
          '7' => new CURLFILE($anexo5),
          '8' => new CURLFILE($acta),
          '9' => new CURLFILE($pdfcv),
          '10' => new CURLFILE($declaracion),
          '11' => new CURLFILE($carta),
          '12' => new CURLFILE($examenmedico),
  
      
        ),
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer pdf_live_00NAx9HXWf9Xm2PjhI0I2V5Ovpeevoxai5JLB1TFCzC'
        ),
        CURLOPT_FILE => $FileHandle,
      ));
    break;
  }
}


$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);