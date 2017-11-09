<?php
	
	class Asesores_modelo{

		private $db;
		private $asesor;

		public function __construct(){

			require_once("conexion.php");

			$this->db=Conectar::conexion();

			$this->asesor=array();

		}

		public function get_asesores(){

			require("paginacion_asesor.php");

			$consulta=$this->db->query("SELECT IdAsesor,AseNombre,AseCorreo,AseContra,AreNombre,PerTipo FROM ASESOR
INNER JOIN AREASSOPORTE ON ASESOR.IdAreaAse=AREASSOPORTE.IdArea
INNER JOIN PERMISOS ON ASESOR.IdPermisoAse=PERMISOS.IdPermiso LIMIT $empezar_desde,$tamano_paginas");

			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

				$this->asesor[]=$filas;
			}

			return $this->asesor;
		}

	}

?>