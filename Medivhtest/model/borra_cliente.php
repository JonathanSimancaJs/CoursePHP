<?php

	require_once("conexion.php");

	$base=Conectar::conexion();

	$Id=$_GET["Id"];

	$base->query("DELETE FROM CLIENTE WHERE IdCliente='$Id'");

	header("Location:../controler/admin_controler_2.php");

?>