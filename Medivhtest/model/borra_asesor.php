<?php

	require_once("conexion.php");

	$base=Conectar::conexion();

	$Id=$_GET["Id"];

	$base->query("DELETE FROM ASESOR WHERE IdAsesor='$Id'");

	header("Location:../controler/admin_controler_3.php");

?>