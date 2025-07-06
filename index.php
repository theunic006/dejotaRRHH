<?php

/*=============================================
Mostrar errores
=============================================*/

//ini_set('display_errors', 1);
//ini_set("log_errors", 1);
//ini_set("error_log",  "E:/xampp7/htdocs/rrhh/php_error_log");

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/cargos.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/personal.controlador.php";
require_once "controladores/plantas.controlador.php";
require_once "controladores/preseleccion.controlador.php";
require_once "controladores/tareas.controlador.php";
require_once "controladores/observaciones.controlador.php";
require_once "controladores/ventas.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/cargos.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/personal.modelo.php";
require_once "modelos/plantas.modelo.php";
require_once "modelos/tareas.modelo.php";
require_once "modelos/preseleccion.modelo.php";
require_once "modelos/observaciones.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "pdf/vendor/autoload.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();