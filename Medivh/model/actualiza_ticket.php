<?php
	
	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(isset($_POST["actualiza_ticket"])){

    $Idticket=$_POST["noticket"];
    $Idasesor=$_POST["codigo"];
    $estado=$_POST["estados"];
    $cathard=$_POST["hard"];
    $catsoft=$_POST["soft"];
    
    $sql="UPDATE TICKETS SET IdEstadoTic=:1, IdAsesorTic=:2, IdHardwareTic=:3, IdSoftwareTic=:4 WHERE IdTicket=:clave";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":clave"=>$Idticket,":1"=>$estado,":2"=>$Idasesor,":3"=>$cathard,":4"=>$catsoft));


    header("Location:../controler/asesor_controler_1.php");

}

?>