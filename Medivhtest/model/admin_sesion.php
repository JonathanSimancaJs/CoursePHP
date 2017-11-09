<?php

	require_once("conexion.php");

	$base=Conectar::conexion();

	$ususess=$_SESSION['usu_sesion'];

	$sql="SELECT AseNombre,IdAreaAse FROM ASESOR WHERE IdAsesor=:user";

	$resultado=$base->prepare($sql);

	$resultado->execute(array(":user"=>$ususess));

	while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

		echo "Bienvenido: " . $registro["AseNombre"] . "<br>";
		$areaasesor=$registro["IdAreaAse"];
	}

	$resultado->closeCursor();

?>