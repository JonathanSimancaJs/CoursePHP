<?php

	require("php/conex_db.php");

	$busqueda=mysqli_real_escape_string($conexion,$_GET["buscar"]);
	//$busqueda=$_GET["buscar"];

	$query="select * from PRODUCTOS where NombreProducto like '%$busqueda%'";

	$resultados=mysqli_query($conexion,$query);

	while($fila=mysqli_fetch_array($resultados, MYSQLI_BOTH)){

	//echo "<table><tr><td>";
	echo "<form action='actualizar.php' method='get'>";
	echo "<input type='text' name='c_prod' value='" . $fila['IdProducto'] . "'readonly><br>";
	echo "<input type='text' name='Nomprod' value='" . $fila['NombreProducto'] . "'><br>";
	echo "<input type='text' name='prov' value='" . $fila['Proveedor'] . "'><br>";
	echo "<input type='text' name='cat' value='" . $fila['Categoría'] . "'><br>";
	echo "<input type='text' name='can_unid' value='" . $fila['CantidadPorUnidad'] . "'><br>";
	echo "<input type='text' name='pre_unid' value='" . $fila['PrecioUnidad'] . "'><br>";
	echo "<input type='text' name='unid_exis' value='" . $fila['UnidadesEnExistencia'] . "'><br>";
	echo "<input type='submit' name='enviando' value='Actualizar'>";
	echo "</form>";

	}

	mysqli_close($conexion);

?>