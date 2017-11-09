<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	$bus_prov=$_POST["prov"];
	$bus_cat=$_POST["cat"];
  
  try{

  $base=new PDO ('mysql:host=localhost; dbname=escuela', 'root','tatan');

  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $base->exec("SET CHARACTER SET utf8");

  $sql="select idProducto, NombreProducto, Proveedor, Categoría from PRODUCTOS where Proveedor= :M_PROV and Categoría=:M_CAT";

  $resultado=$base->prepare($sql);

  $resultado->execute(array("M_PROV"=>$bus_prov,"M_CAT"=>$bus_cat));

  while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
  		
  		echo "Cod Producto: " . $registro['idProducto'] . "Nombre: " . $registro['NombreProducto'] . "Proveedor: " . $registro['Proveedor'] . "Categoría: " . $registro['Categoría'] . "<br>";

 	 }

  		$resultado->closeCursor();

  }catch(Exception $e){

        echo ('Error: ' . $e->GetMessage());
  		//echo "Linea del error: " . $e->getLine();

  }finally{

      $base=null;
  }




?>

</body>
</html>