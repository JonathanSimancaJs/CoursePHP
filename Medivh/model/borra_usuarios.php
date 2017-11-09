<?php

	require_once("conexion.php");

	$base=Conectar::conexion();

	$Id=$_GET["Id"];

	$base->query("DELETE FROM USUARIO WHERE IdUsuario='$Id'");

	header("Location:../controler/admin_controler_3.php");

?>