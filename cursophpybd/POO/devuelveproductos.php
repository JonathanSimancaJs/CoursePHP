<?php
	
	require "conexion.php";

	class DevuelveProductos extends Conexion{

		public function DevuelveProductos(){

			parent::__construct();
		}

		public function get_productos(){

			$resultado=$this->conexion_db->query('select * from PRODUCTOS');

			$productos=$resultado->fetch_all(MYSQLI_ASSOC);

			return $productos;
		}
	}
?>