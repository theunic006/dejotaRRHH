<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=theunic006_rrhh",
			            "theunic006_admin_rrhh",
			            "Murci3lago968697711");

		$link->exec("set names utf8");

		return $link;

	}

}