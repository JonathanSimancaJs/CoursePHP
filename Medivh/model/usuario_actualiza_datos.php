<?php
	
	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(isset($_POST["bot_actualizar"])){

    $Idusu=$_POST["idusu"];
    $Ident=$_POST["ident"];
    $Nomb=$_POST["nomb"];
    $Corr=$_POST["corr"];
    $Tele=$_POST["tel"];
    $Ubi=$_POST["ubi"];
    
    $sql="UPDATE USUARIO SET UsuIdent=:1, UsuNombre=:2, UsuCorreo=:3, UsuTelefono=:4, UsuUbicacion=:5 WHERE IdUsuario=:clave";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":clave"=>$Idusu,":1"=>$Ident,":2"=>$Nomb,":3"=>$Corr,":4"=>$Tele,":5"=>$Ubi));

    echo "<h2 style='color:green;'>Actualizacion exitosa</h2>";

}

?>