<?php


	class Conectar{
		
		public static function conexion(){

			try{

				$conexion=new PDO('mysql:host=localhost; dbname=MEDIVH', 'root', 'tatan');

				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$conexion->exec("SET CHARACTER SET UTF8");

			}catch(Exeption $e){

				die("Error" . $e->getMessage());

				echo "Linea del error" . $e->getLine();

			}

			return $conexion;
		}
	}

?>