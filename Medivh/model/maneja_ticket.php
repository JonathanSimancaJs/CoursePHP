<?php

	include_once("ticket_modelo.php");

	class Manejo_Tickets{

		private $conexion;

		public function __construct($conexion){

			$this->setConexion($conexion);
		}

		public function setConexion(PDO $conexion){

			$this->conexion=$conexion;

		}

		public function consultaTicketsAsesor($areaasesor){

			$idarea=$areaasesor;

			$matriz=array();

			$contador=0;

			require("paginacion_asesor_tickets.php");

			$resultado=$this->conexion->query("SELECT IdTicket,TicFechaCreado,TicAsunto,AseNombre,EstNombre FROM TICKETS
LEFT OUTER JOIN ASESOR ON TICKETS.IdAsesorTic=ASESOR.IdAsesor
INNER JOIN ESTADOTICKET ON TICKETS.IdEstadoTic=ESTADOTICKET.IdEstado
WHERE IdAreaTic='$idarea' ORDER BY TicFechaCreado DESC LIMIT $empezar_desde,$tamano_paginas");

			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

				$ticket=new Ticket_Modelo();

				$ticket->setId($registro["IdTicket"]);
				$ticket->setFecha($registro["TicFechaCreado"]);
				$ticket->setTitulo($registro["TicAsunto"]);
				$ticket->setEstado($registro["EstNombre"]);
				$ticket->setAsesor($registro["AseNombre"]);

				$matriz[$contador]=$ticket;

				$contador++;

			}

			return $matriz;
		}

		public function consultaTicketsUsuario($ususess){

			$iduser=$ususess;

			$matriz=array();

			$contador=0;

			require("paginacion_usuario_tickets.php");

			$resultado=$this->conexion->query("SELECT IdTicket,TicFechaCreado,TicFechaCierre,EstNombre FROM TICKETS INNER JOIN ESTADOTICKET ON TICKETS.IdEstadoTic=ESTADOTICKET.IdEstado WHERE IdUsuarioTic='$iduser' ORDER BY TicFechaCreado DESC LIMIT $empezar_desde,$tamano_paginas");

			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

				$ticket=new Ticket_Modelo();

				$ticket->setId($registro["IdTicket"]);
				$ticket->setFecha($registro["TicFechaCreado"]);
				$ticket->setFechaCierre($registro["TicFechaCierre"]);
				$ticket->setEstado($registro["EstNombre"]);

				$matriz[$contador]=$ticket;

				$contador++;

			}

			return $matriz;
		}

		public function consultaTicketsDelAsesor($ususess){

			$iduser=$ususess;

			$matriz=array();

			$contador=0;

			require("paginacion_usuario_tickets.php");

			$resultado=$this->conexion->query("SELECT IdTicket,TicFechaCreado,TicAsunto,AseNombre,EstNombre FROM TICKETS
LEFT OUTER JOIN ASESOR ON TICKETS.IdAsesorTic=ASESOR.IdAsesor
INNER JOIN ESTADOTICKET ON TICKETS.IdEstadoTic=ESTADOTICKET.IdEstado
WHERE IdAsesorTic='$iduser' ORDER BY TicFechaCreado DESC LIMIT $empezar_desde,$tamano_paginas");

			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

				$ticket=new Ticket_Modelo();

				$ticket->setId($registro["IdTicket"]);
				$ticket->setFecha($registro["TicFechaCreado"]);
				$ticket->setTitulo($registro["TicAsunto"]);
				$ticket->setEstado($registro["EstNombre"]);
				$ticket->setAsesor($registro["AseNombre"]);

				$matriz[$contador]=$ticket;

				$contador++;

			}

			return $matriz;
		}		

		public function muestraTicket($iduser,$idticket){

			$user=$iduser;
			$tick=$idticket;

			$matriza=array();

			$resultadoa=$this->conexion->query("SELECT IdTicket,TicFechaCreado,TicFechaCierre,TicAsunto,TicDescripcion,TicImagen,EstNombre FROM TICKETS INNER JOIN ESTADOTICKET ON TICKETS.IdEstadoTic=ESTADOTICKET.IdEstado WHERE IdTicket='$tick' AND IdUsuarioTic='$user'");

			while($registroa=$resultadoa->fetch(PDO::FETCH_ASSOC)){

				$ticket=new Ticket_Modelo();

				$ticket->setId($registroa["IdTicket"]);
				$ticket->setFecha($registroa["TicFechaCreado"]);
				$ticket->setFechaCierre($registroa["TicFechaCierre"]);
				$ticket->setTitulo($registroa["TicAsunto"]);
				$ticket->setComentario($registroa["TicDescripcion"]);
				$ticket->setImagen($registroa["TicImagen"]);
				$ticket->setEstado($registroa["EstNombre"]);

				$matriza[]=$ticket;
			}

			return $matriza;

		}

		public function muestraTicketAsesor($idticket){

			$tick=$idticket;

			$matriza=array();

			$resultadoa=$this->conexion->query("SELECT IdTicket,TicFechaCreado,TicFechaCierre,TicAsunto,TicDescripcion,TicImagen,EstNombre,AreNombre,CanNombre,UsuIdent,UsuNombre,UsuCorreo,UsuTelefono,UsuUbicacion,IdCliente,CliNombre,CliTelefono1,CLiTelefono2,CliDireccion,CiuNombre,DepNombre,AseNombre,IdAsesor,AseCorreo,HarNombre,SofNOmbre FROM TICKETS
LEFT OUTER JOIN ESTADOTICKET ON TICKETS.IdEstadoTic=ESTADOTICKET.IdEstado
LEFT OUTER JOIN AREASSOPORTE ON TICKETS.IdAreaTic=AREASSOPORTE.IdArea
LEFT OUTER JOIN CANALENTRADA ON TICKETS.IdCanalTic=CANALENTRADA.IdCanal
LEFT OUTER JOIN ASESOR ON TICKETS.IdAsesorTic=ASESOR.IdAsesor
LEFT OUTER JOIN HARDWARE ON TICKETS.IdHardwareTic=HARDWARE.IdHardware
LEFT OUTER JOIN SOFTWARE ON TICKETS.IdSoftwareTic=SOFTWARE.IdSoftware
LEFT OUTER JOIN USUARIO ON TICKETS.IdUsuarioTic=USUARIO.Idusuario
INNER JOIN CLIENTE ON USUARIO.IdClienteUsu=CLIENTE.IdCLiente
INNER JOIN DEPARTAMENTO ON CLIENTE.IdDepartCli=DEPARTAMENTO.IdDepart
INNER JOIN CIUDAD ON CLIENTE.IdCiudadCli=CIUDAD.IdCiudad
WHERE IdTicket='$tick'");

			while($registroa=$resultadoa->fetch(PDO::FETCH_ASSOC)){

				$ticket=new Ticket_Modelo();

				$ticket->setId($registroa["IdTicket"]);
				$ticket->setFecha($registroa["TicFechaCreado"]);
				$ticket->setFechaCierre($registroa["TicFechaCierre"]);
				$ticket->setTitulo($registroa["TicAsunto"]);
				$ticket->setComentario($registroa["TicDescripcion"]);
				$ticket->setImagen($registroa["TicImagen"]);
				$ticket->setEstado($registroa["EstNombre"]);
				$ticket->setArea($registroa["AreNombre"]);
				$ticket->setCanal($registroa["CanNombre"]);
				$ticket->setIdUsuario($registroa["UsuIdent"]);
				$ticket->setUsuario($registroa["UsuNombre"]);
				$ticket->setUsuCorreo($registroa["UsuCorreo"]);
				$ticket->setUsutel($registroa["UsuTelefono"]);
				$ticket->setUsuUbicacion($registroa["UsuUbicacion"]);
				$ticket->setIdCliente($registroa["IdCliente"]);
				$ticket->setCliNombre($registroa["CliNombre"]);
				$ticket->setClitel1($registroa["CliTelefono1"]);
				$ticket->setClitel2($registroa["CLiTelefono2"]);
				$ticket->setCliDireccion($registroa["CliDireccion"]);
				$ticket->setCiuNombre($registroa["CiuNombre"]);
				$ticket->setDepNombre($registroa["DepNombre"]);
				$ticket->setDepNombre($registroa["DepNombre"]);
				$ticket->setAsesorId($registroa["IdAsesor"]);
				$ticket->setAsesor($registroa["AseNombre"]);
				$ticket->setAseCorreo($registroa["AseCorreo"]);
				$ticket->setHardware($registroa["HarNombre"]);
				$ticket->setSoftware($registroa["SofNOmbre"]);

				$matriza[]=$ticket;
			}

			return $matriza;

		}

		public function muestraNotas($idticket){

			$tick=$idticket;

			$matrizb=array();
			$contador=0;

			$resultadob=$this->conexion->query("SELECT IdNota,NotDescripcion,NotFecha,AseNombre FROM NOTAS INNER JOIN ASESOR ON NOTAS.IdAsesorNot=ASESOR.IdAsesor WHERE IdTicketNot='$tick'");

			while($registrob=$resultadob->fetch(PDO::FETCH_ASSOC)){

				$nota=new Ticket_Modelo();

				$nota->setIdnota($registrob["IdNota"]);
				$nota->setNotatexto($registrob["NotDescripcion"]);
				$nota->setNotafecha($registrob["NotFecha"]);
				$nota->setAsesor($registrob["AseNombre"]);

				$matrizb[$contador]=$nota;
				$contador++;
			}

			return $matrizb;

		}

		public function creaNuevoTicket(Ticket_Modelo $blog){

			$sql="INSERT INTO TICKETS (TicFechaCreado,TicAsunto,TicDescripcion,TicImagen,IdEstadoTic,IdAreaTic,IdCanalTic,IdUsuarioTic) VALUES ('" . $blog->getFecha() . "','" . $blog->getTitulo() . "','" . $blog->getComentario() . "','" . $blog->getImagen() . "',1,1,1,'" . $blog->getUsuario() . "')";

			$this->conexion->exec($sql);

		}
	}

?>