<?php

require_once "conexion.php";

class ModeloPre{

	/*=============================================
	CREAR PERSOANLES
	=============================================*/

	static public function mdlCrearPre($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idplanta,listapersonal,nombre,descripcion,nombreresponsable,cargoresponsable,celularresponsable,nombresuper,cargosuper,celularsuper) VALUES (:idplanta, :listapersonal, :nombre, :descripcion, :nombreresponsable, :cargoresponsable, :celularresponsable, :nombresuper, :cargosuper, :celularsuper)");

		$stmt->bindParam(":idplanta", $datos["idplanta"], PDO::PARAM_STR);
		$stmt->bindParam(":listapersonal", $datos["listapersonal"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreresponsable", $datos["nombreresponsable"], PDO::PARAM_STR);
		$stmt->bindParam(":cargoresponsable", $datos["cargoresponsable"], PDO::PARAM_STR);
		$stmt->bindParam(":celularresponsable", $datos["celularresponsable"], PDO::PARAM_STR);
		$stmt->bindParam(":nombresuper", $datos["nombresuper"], PDO::PARAM_STR);
		$stmt->bindParam(":cargosuper", $datos["cargosuper"], PDO::PARAM_STR);
		$stmt->bindParam(":celularsuper", $datos["celularsuper"], PDO::PARAM_STR);

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
	ACTUALIZAR PERSOANLES
	=============================================*/

	static public function mdlEditarPre($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE preseleccion SET listapersonal=:listapersonal WHERE id=:id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":listapersonal", $datos["listapersonal"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
	/*=============================================
	MOSTRAR PERSONALES
	=============================================*/

	static public function mdlMostrarPre($tabla, $item, $valor){


		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT pr.id, pr.fecha, pr.listapersonal, p.nombre, p.unidadproduccion 
			FROM preseleccion pr 
			INNER JOIN planta p ON pr.idplanta=p.id
			WHERE pr.id='$valor'");
			$stmt -> execute();
			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT pr.id, pr.fecha, p.nombre, p.unidadproduccion, pr.aviso 
			FROM preseleccion pr 
			INNER JOIN planta p ON pr.idplanta=p.id 
			ORDER BY pr.id DESC");
			$stmt -> execute();
			return $stmt -> fetchAll();

		}


			
		


		$stmt -> close();
		$stmt = null;


	}

	/*=============================================
	MOSTRAR PERSONALES
	=============================================*/

	static public function mdlMostrarAlertas($tabla, $item, $valor){


			$stmt = Conexion::conectar()->prepare("SELECT pr.id, pr.fecha, p.nombre, p.unidadproduccion, pr.aviso, p.id as idplanta FROM preseleccion pr INNER JOIN planta p ON pr.idplanta=p.id WHERE aviso='1' ORDER BY pr.id DESC");
			$stmt -> execute();
			return $stmt -> fetchAll();

		$stmt -> close();
		$stmt = null;


	}

	/*=============================================
	ELIMINAR PERSOANLES
	=============================================*/

	static public function mdlEliminarPre($tabla, $valor){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id='$valor'");
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

}