<?php


	class Conectar{
		
		public static function conexion(){

			try{

				$conexion=new PDO('mysql:host=sql301.epizy.com; dbname=epiz_20037598_MEDIVH', 'epiz_20037598', 'xfvdn6p7');

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