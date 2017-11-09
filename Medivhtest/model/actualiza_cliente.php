<?php
	
    /* Este archvio permite la actualización de los datos de un cliente. */

	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(!isset($_POST["bot_actualizar"])){

    $IdCli=$_GET["idcli"];
    $CliNom=$_GET["nom"];
    $CliTel1=$_GET["tel1"];
    $CliTel2=$_GET["tel2"];
    $CliDir=$_GET["dir"];
    $CiuNom=$_GET["cnom"];
    $DepNom=$_GET["dnom"];

}else{

    $IdCli=$_POST["idcli"];
    $CliNom=$_POST["nom"];
    $CliTel1=$_POST["tel1"];
    $CliTel2=$_POST["tel2"];
    $CliDir=$_POST["dir"];
    $CiuNom=$_POST["cnom"];
    $DepNom=$_POST["dnom"];
    
    $sql="UPDATE CLIENTE SET CliNombre=:1, CliTelefono1=:2, CliTelefono2=:3, CliDireccion=:4 WHERE IdCliente=:clave";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":clave"=>$IdCli,":1"=>$CliNom,":2"=>$CliTel1,":3"=>$CliTel2,":4"=>$CliDir));

    header("Location:../controler/admin_controler_2.php");


}

?>