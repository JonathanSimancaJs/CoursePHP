<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<body>

<?php
	
	$cod=$_GET["c_prod"];
	$nom=$_GET["Nomprod"];
	$prov=$_GET["prov"];
	$cat=$_GET["cat"];
	$cantunid=$_GET["can_unid"];
	$preunid=$_GET["pre_unid"];
	$unidexis=$_GET["unid_exis"];


	require("php/conex_db.php");

	$query="update PRODUCTOS set idProducto=$cod, NombreProducto='$nom', Proveedor='$prov', Categoría='$cat', CantidadPorUnidad='$cantunid', PrecioUnidad='$preunid', UnidadesEnExistencia='$unidexis' where idProducto=$cod";

	$resultados=mysqli_query($conexion,$query);

	if($resultados==false){
		echo "Error el insertar registros";
	}
	else{
		echo "Registros guardados<br><br>";
		echo "<table><tr><td>$cod</td></tr>";
		echo "<tr><td>$nom</td></tr>";
		echo "<tr><td>$prov</td></tr>";
		echo "<tr><td>$cat</td></tr>";
		echo "<tr><td>$cantunid</td></tr>";
		echo "<tr><td>$preunid</td></tr>";
		echo "<tr><td>$unidexis</td></tr></table>";
	}


	mysqli_close($conexion);

	

?>

</body>
</head>
</html>