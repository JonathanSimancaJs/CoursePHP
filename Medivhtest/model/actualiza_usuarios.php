<?php
	
	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(!isset($_POST["bot_actualizar"])){

    $IdUsu=$_GET["idusu"];
    $Ident=$_GET["iden"];
    $Nomb=$_GET["nom"];
    $Corr=$_GET["corr"];
    $Tele=$_GET["tel"];
    $Ubi=$_GET["ubi"];
    $Cli=$_GET["cli"];

}else{

    $IdUsu=$_POST["idusu"];
    $Ident=$_POST["iden"];
    $Nomb=$_POST["nom"];
    $Corr=$_POST["corr"];
    $Tele=$_POST["tel"];
    $Ubi=$_POST["ubi"];
    $Cli=$_POST["cli"];
    
    $sql="UPDATE USUARIO SET UsuIdent=:1, UsuNombre=:2, UsuCorreo=:3, UsuTelefono=:4, UsuUbicacion=:5, IdClienteUsu=:6 WHERE IdUsuario=:clave";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":clave"=>$IdUsu,":1"=>$Ident,":2"=>$Nomb,":3"=>$Corr,":4"=>$Tele,":5"=>$Ubi,":6"=>$Cli));

    header("Location:../controler/admin_controler_3.php");


}

?>