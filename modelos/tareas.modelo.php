<?php

require_once "conexion.php";

class ModeloTareas{

	/*=============================================
	MOSTRAR TAREAS
	=============================================*/

	static public function mdlMostrarTareas($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT t.* FROM tareas t WHERE t.$item = '$valor' ORDER BY fecha DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		
		$stmt -> close();

		$stmt = null;

	}
	/*=============================================
	MOSTRAR TAREAS Y PLANTAS
	=============================================*/

	static public function mdlMostrarTareasPlantas($tabla, $item, $idtarea){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT t.*, DATEDIFF(fechafin, fechainicio)+1 AS dias, p.nombre, unidadproduccion, pdistrito, pprovincia FROM tareas t INNER JOIN planta p ON t.idplanta=p.id WHERE t.ID = $idtarea ORDER BY fecha DESC");

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		
		$stmt -> close();

		$stmt = null;

	}
		/*=============================================
	MOSTRAR TAREAS
	=============================================*/

	static public function mdlMostrarId(){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM tareas ORDER BY id desc limit 1");
			$stmt -> execute();
			return $stmt -> fetch();

		$stmt -> close();
		$stmt = null;

	}

	/*=============================================
	REGISTRO DE TAREA
	=============================================*/

	static public function mdlIngresarTarea($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(titulo,fechainicio,fechafin,areatrabajo,descripciontrabajo,autoriza,cargoautoriza,supervisor,cargosupervisor,superintendente,cargosuperintendente,residente,cargoresidente,fechacontrato,firmaResidente,lugartrabajo,actaasistencia,cstr,vidaley,idplanta) VALUES (:titulo, :fechainicio, :fechafin, :areatrabajo, :descripciontrabajo, :autoriza, :cargoautoriza, :supervisor, :cargosupervisor, :superintendente, :cargosuperintendente, :residente, :cargoresidente, :fechacontrato, :firmaResidente, :lugartrabajo, :actaasistencia, :cstr, :vidaley, :idplanta)");

		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":fechainicio", $datos["fechainicio"], PDO::PARAM_STR);
		$stmt->bindParam(":fechafin", $datos["fechafin"], PDO::PARAM_STR);
		$stmt->bindParam(":idplanta", $datos["idplanta"], PDO::PARAM_STR);
		$stmt->bindParam(":areatrabajo", $datos["areatrabajo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripciontrabajo", $datos["descripciontrabajo"], PDO::PARAM_STR);
		$stmt->bindParam(":autoriza", $datos["autoriza"], PDO::PARAM_STR);
		$stmt->bindParam(":cargoautoriza", $datos["cargoautoriza"], PDO::PARAM_STR);
		$stmt->bindParam(":supervisor", $datos["supervisor"], PDO::PARAM_STR);
		$stmt->bindParam(":cargosupervisor", $datos["cargosupervisor"], PDO::PARAM_STR);
		$stmt->bindParam(":superintendente", $datos["superintendente"], PDO::PARAM_STR);
		$stmt->bindParam(":cargosuperintendente", $datos["cargosuperintendente"], PDO::PARAM_STR);
		$stmt->bindParam(":residente", $datos["residente"], PDO::PARAM_STR);
		$stmt->bindParam(":cargoresidente", $datos["cargoresidente"], PDO::PARAM_STR);
		$stmt->bindParam(":fechacontrato", $datos["fechacontrato"], PDO::PARAM_STR);
		$stmt->bindParam(":firmaResidente", $datos["firmaResidente"], PDO::PARAM_STR);
		$stmt->bindParam(":lugartrabajo", $datos["lugartrabajo"], PDO::PARAM_STR);
		$stmt->bindParam(":actaasistencia", $datos["actaasistencia"], PDO::PARAM_STR);
		$stmt->bindParam(":cstr", $datos["cstr"], PDO::PARAM_STR);
		$stmt->bindParam(":vidaley", $datos["vidaley"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR NUEVA TAREA
	=============================================*/

	static public function mdlEditarNuevaTarea($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  personal = :personal  WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":personal", $datos["personal"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}
	/*=============================================
	EDITAR VENTA
	=============================================*/

	static public function mdlEditarTarea($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  titulo = :titulo, tipotrabajo = :tipotrabajo, fechainicio = :fechainicio, fechafin = :fechafin, areatrabajo = :areatrabajo, descripciontrabajo= :descripciontrabajo, autoriza = :autoriza, cargoautoriza = :cargoautoriza, supervisor = :supervisor, cargosupervisor = :cargosupervisor, superintendente = :superintendente, fechacontrato = :fechacontrato, actaasistencia = :actaasistencia, cstr = :cstr, vidaley = :vidaley WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":fechainicio", $datos["fechainicio"], PDO::PARAM_STR);
		$stmt->bindParam(":fechafin", $datos["fechafin"], PDO::PARAM_STR);
		$stmt->bindParam(":areatrabajo", $datos["areatrabajo"], PDO::PARAM_STR);
		$stmt->bindParam(":tipotrabajo", $datos["tipotrabajo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripciontrabajo", $datos["descripciontrabajo"], PDO::PARAM_STR);
		$stmt->bindParam(":autoriza", $datos["autoriza"], PDO::PARAM_STR);
		$stmt->bindParam(":cargoautoriza", $datos["cargoautoriza"], PDO::PARAM_STR);
		$stmt->bindParam(":supervisor", $datos["supervisor"], PDO::PARAM_STR);
		$stmt->bindParam(":cargosupervisor", $datos["cargosupervisor"], PDO::PARAM_STR);
		$stmt->bindParam(":superintendente", $datos["superintendente"], PDO::PARAM_STR);
		$stmt->bindParam(":fechacontrato", $datos["fechacontrato"], PDO::PARAM_STR);
		$stmt->bindParam(":actaasistencia", $datos["actaasistencia"], PDO::PARAM_STR);
		$stmt->bindParam(":cstr", $datos["cstr"], PDO::PARAM_STR);
		$stmt->bindParam(":vidaley", $datos["vidaley"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			$errorInfo = $stmt->errorInfo();
			return "error: " . $errorInfo[2];
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR VENTA
	=============================================*/

	static public function mdlEliminarVenta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function mdlRangoFechasVentas($tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();	


		}else if($fechaInicial == $fechaFinal){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha like '%$fechaFinal%' ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinalMasUno' ORDER BY id DESC");

			}else{


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinal' ORDER BY id DESC");

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}

	/*=============================================
	SUMAR EL TOTAL DE VENTAS
	=============================================*/

	static public function mdlSumaTotalVentas($tabla){	

		$stmt = Conexion::conectar()->prepare("SELECT SUM(neto) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR PDF TAREAS
	=============================================*/

	static public function mdlMostrarPdfTareas($valor){

			$stmt = Conexion::conectar()->prepare("SELECT t.*, p.nombre AS planta FROM tareas t INNER JOIN planta p ON t.idplanta=p.id WHERE t.id = '$valor' ORDER BY id ASC");
			$stmt -> execute();
			return $stmt -> fetchAll();

		$stmt -> close();
		$stmt = null;

	}
	/*=============================================
	MOSTRAR PDF SUPERVISOOR
	=============================================*/

	static public function mdlMostrarPdfSup($valor){

		$stmt = Conexion::conectar()->prepare("SELECT pr.*, p.nombre AS planta FROM preseleccion pr INNER JOIN planta p ON pr.idplanta=p.id WHERE pr.id = '$valor' ORDER BY id ASC");
		$stmt -> execute();
		return $stmt -> fetchAll();

	$stmt -> close();
	$stmt = null;

}
	/*=============================================
	DEVUELVE ID
	=============================================*/

	static public function mdlDevuelveId($tabla, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idplanta='$valor' ORDER BY id DESC LIMIT 1");
		$stmt -> execute();
		return $stmt -> fetchAll();

	$stmt -> close();
	$stmt = null;

	}

	/*=============================================
	EDITAR NUEVA TAREA
	=============================================*/

	static public function mdlActualizarPreseleccion($tabla, $valorpre){

		$stmt = Conexion::conectar()->prepare("UPDATE preseleccion SET aviso = '0' WHERE id = '$valorpre'");
		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR TAREAS PARA CERTIFICADOSZ
	=============================================*/

	static public function mdlMostrarTareasCert($tabla, $item, $valor){

			$stmt = Conexion::conectar()->prepare("SELECT t.id, t.titulo, t.fechainicio, t.fechafin, t.autoriza, t.supervisor, p.nombre, p.unidadproduccion,t.fechacontrato, t.fecha FROM tareas t INNER JOIN planta p ON t.idplanta=p.id WHERE t.personal IS NOT NULL ORDER BY t.id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();


		
		$stmt -> close();

		$stmt = null;

	}	
	
}