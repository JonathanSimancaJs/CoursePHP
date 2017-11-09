<?php
	
  require_once("conexion.php");

  $base=Conectar::conexion();

  $sql="SELECT IdActivo,ActSerial,ActNombreModelo,ActLicencia,ActCategoria,ProNombre,MemCantidad,HarNombre,SofNOmbre FROM ACTIVO
  INNER JOIN PROCESADOR ON ACTIVO.IdProcesadorAct=PROCESADOR.IdProcesador
  INNER JOIN MEMORIA ON ACTIVO.IdMemoriaAct=MEMORIA.IdMemoria
  INNER JOIN HARDWARE ON ACTIVO.IdHardwareAct=HARDWARE.IdHardware
  INNER JOIN SOFTWARE ON ACTIVO.IdSoftwareAct=SOFTWARE.IdSoftware
  WHERE IdUsuarioAct=:USER";

  $resultado=$base->prepare($sql);

  $resultado->execute(array(":USER"=>$ususess));

  while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

  	 	echo ("<tr>
  	 			<td>ACT".$registro['IdActivo']."</td>
  	 			<td>".$registro['ActSerial']."</td>
  	 			<td>".$registro['ActNombreModelo']."</td>
  	 			<td>".$registro['ActLicencia']."</td>
  	 			<td>".$registro['ActCategoria']."</td>
  	 			<td>".$registro['ProNombre']."</td>
  	 			<td>".$registro['MemCantidad']."</td>
  	 			<td>".$registro['HarNombre']."</td>
  	 			<td>".$registro['SofNOmbre']."</td>
			</tr>
  	 		");

  	}

?>