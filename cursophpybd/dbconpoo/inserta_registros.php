<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	$cod=$_POST["c_prod"];
	$nomb=$_POST["Nomprod"];
  $prov=$_POST["prov"];
  $cat=$_POST["cat"];
  $cant=$_POST["cant_unid"];
  $pre=$_POST["pre_unid"];
  $exis=$_POST["unid_exis"];

  try{

  $base=new PDO ('mysql:host=localhost; dbname=escuela', 'root','tatan');

  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $base->exec("SET CHARACTER SET utf8");

  $sql="insert into PRODUCTOS (idProducto,NombreProducto,Proveedor,Categoría,CantidadPorUnidad,PrecioUnidad,UnidadesEnExistencia) values(:m_cod,:m_nomb,:m_prov,:m_cat,:m_cant,:m_pre,:m_exis)";

  $resultado=$base->prepare($sql);

  $resultado->execute(array("m_cod"=>$cod,"m_nomb"=>$nomb,"m_prov"=>$prov,"m_cat"=>$cat,"m_cant"=>$cant,"m_pre"=>$pre,"m_exis"=>$exis));

  /*while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
  		
  		echo "Cod Producto: " . $registro['idProducto'] . "Nombre: " . $registro['NombreProducto'] . "Proveedor: " . $registro['Proveedor'] . "Categoría: " . $registro['Categoría'] . "<br>";

 	 }*/

      echo "Registro insertado";

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