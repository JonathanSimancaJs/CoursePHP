<?php
	
	class Usuarios_modelo{

		private $db;
		private $usuario;

		public function __construct(){

			require_once("conexion.php");

			$this->db=Conectar::conexion();

			$this->usuario=array();

		}

		public function get_usuarios(){

			require("paginacion_usuario.php");

			$consulta=$this->db->query("SELECT IdUsuario,UsuIdent,UsuNombre,UsuCorreo,UsuTelefono,UsuUbicacion,UsuContra,IdClienteUsu,PerTipo FROM USUARIO
INNER JOIN PERMISOS ON USUARIO.IdPermisoUsu=PERMISOS.IdPermiso LIMIT $empezar_desde,$tamano_paginas");

			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

				$this->usuario[]=$filas;
			}

			return $this->usuario;
		}

		public function get_UsuarioEspecifico($ususess){

			$user=$ususess;

			$consulta=$this->db->query("SELECT IdUsuario,UsuIdent,UsuNombre,UsuCorreo,UsuTelefono,UsuUbicacion FROM USUARIO WHERE IdUsuario='$user'");

			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

				$this->usuario[]=$filas;
			}

			return $this->usuario;
		}

	}

?>