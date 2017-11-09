<?php

	require_once("conexion.php");

	$base=Conectar::conexion();

	$ususess=$_SESSION['usu_sesion'];

	$sql="SELECT UsuNombre FROM USUARIO WHERE IdUsuario=:user";

	$resultado=$base->prepare($sql);

	$resultado->execute(array(":user"=>$ususess));

	if(empty($resultado)){
		echo "lol";

	}

	while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

		echo "Bienvenido: " . $registro["UsuNombre"] . "<br>";
	}

	$resultado->closeCursor();

?>