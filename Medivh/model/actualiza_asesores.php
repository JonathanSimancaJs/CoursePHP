<?php

    /* Este archvio permite la actualización de los datos de un usuario asesor. */
	
	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(!isset($_POST["bot_actualizar"])){

    $IdAse=$_GET["idase"];
    $Nomb=$_GET["nomase"];
    $Corr=$_GET["corre"];
    $Area=$_GET["area"];
    $Perm=$_GET["perm"];

}else{

    $IdAse=$_POST["idase"];
    $Nomb=$_POST["nomase"];
    $Corr=$_POST["corre"];
    $Area=$_POST["area"];
    $Perm=$_POST["perm"];
    
    $sql="UPDATE ASESOR SET AseNombre=:1, AseCorreo=:2, IdAreaAse=:3, IdPermisoAse=:4 WHERE IdAsesor=:clave";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":clave"=>$IdAse,":1"=>$Nomb,":2"=>$Corr,":3"=>$Area,":4"=>$Perm));


    header("Location:../controler/admin_controler_3.php");

}

?>