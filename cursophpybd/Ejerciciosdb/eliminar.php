<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<body>

<?php
	
	$cod=mysqli_real_escape_string($conexion,$_GET["c_prod"]);
	$nom=mysqli_real_escape_string($conexion,$_GET["Nomprod"]);
	$prov=mysqli_real_escape_string($conexion,$_GET["prov"]);
	$cat=mysqli_real_escape_string($conexion,$_GET["cat"]);
	$cantunid=mysqli_real_escape_string($conexion,$_GET["cant_unid"]);
	$preunid=mysqli_real_escape_string($conexion,$_GET["pre_unid"]);
	$unidexis=mysqli_real_escape_string($conexion,$_GET["unid_exis"]);


	require("php/conex_db.php");

	$query="delete from PRODUCTOS where IdProducto='$cod'";

	$resultados=mysqli_query($conexion,$query);

	if($resultados==false){
		echo "Error el insertar registros";
	}
	else{

		//echo "Registro ELIMINADO";

		if(mysqli_affected_rows($conexion)==0){
			echo "El registro no existe y no se han producido cambios en la DB";
		}
		else {
			echo "Registros eliminados= " . mysqli_affected_rows($conexion);
		}
	}


	mysqli_close($conexion);

	

?>

</body>
</head>
</html>