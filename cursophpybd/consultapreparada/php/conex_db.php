<?php

	$db_host="localhost";
	$db_nombre="escuela";
	$db_usuario="root";
	$db_contra="tatan";

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al intentar conectar a la base de datos";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

	mysqli_set_charset($conexion, "utf8");

?>