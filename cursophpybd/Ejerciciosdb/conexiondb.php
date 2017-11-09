<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	
	$db_host="localhost";
	$db_nombre="sisticket";
	$db_usuario="root";
	$db_contra="tatan";

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al intentar conectar a la base de datos";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

	mysqli_set_charset($conexion, "utf-8");

	$query="select * from SOFTWARE";

	$resultados=mysqli_query($conexion,$query);

	while($fila=mysqli_fetch_row($resultados)){

	echo $fila[0] . " ";
	echo $fila[1] . " ";
	echo $fila[2] . " ";
	echo $fila[3] . " ";
	echo $fila[4] . " ";
	echo "<br>";

	}

	mysqli_close($conexion);

	

?>

</body>
</html>