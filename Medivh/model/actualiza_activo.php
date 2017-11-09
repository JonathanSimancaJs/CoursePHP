<?php
	
    /* Este archivo permite actualizar la asignación del activo de un empleado. */

	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(isset($_POST["envia"])){

    $Serial=$_POST["sn"];
    $Estado=$_POST["estados"];
    $Usuario=$_POST["usu"];
    
    $sql="UPDATE ACTIVO SET ActEstado=:1, IdUsuarioAct=:2 WHERE ActSerial=:clave";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":clave"=>$Serial,":1"=>$Estado,":2"=>$Usuario));

    header("Location:../controler/admin_controler_4.php");


}