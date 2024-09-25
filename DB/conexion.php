<?php
	class Conectar{
		
		public static function conexion(){
			$conexion = new mysqli("localhost", "root", "", "feria");
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}
		
	}


	/*$localhost="mysql.hostinger.es";
$usuario="u718463927_feria";
$contraseña="Tecno2021";
$basedatos="u718463927_Registro";



	*/ 
?>