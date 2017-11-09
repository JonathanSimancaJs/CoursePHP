<?php
	
	class Clientes_modelo{

		private $db;
		private $clientes;

		public function __construct(){

			require_once("conexion.php");

			$this->db=Conectar::conexion();

			$this->clientes=array();

		}

		public function get_clientes(){

			require("paginacion_cliente.php");

			$consulta=$this->db->query("SELECT IdCliente,CliNombre,CliTelefono1,CliTelefono2,CliDireccion,CiuNombre,DepNombre FROM CLIENTE
INNER JOIN CIUDAD ON CLIENTE.IdCiudadCli=CIUDAD.IdCiudad
INNER JOIN DEPARTAMENTO ON CLIENTE.IdDepartCli=DEPARTAMENTO.IdDepart LIMIT $empezar_desde,$tamano_paginas");

			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

				$this->clientes[]=$filas;
			}

			return $this->clientes;
		}

	}

?>