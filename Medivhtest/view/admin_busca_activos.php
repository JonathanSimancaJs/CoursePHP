<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="../css/smain.css">
<link rel="stylesheet" href="../css/btns.css">
<link rel="stylesheet" href="../css/tables.css">
<script src="../js/scripts.js"></script>

<?php
	include("../model/busca_activos.php");
?>

</head>
<body>
<div id="ContenedorMenu">
  <?php

  $opciona="miBoton";
  $opcionb="miBoton";

  $menuLinkid=basename($_SERVER['PHP_SELF'],".php");

    if($menuLinkid=="admin_controler_4"){

      $opciona='ActivaBoton';

    }else if($menuLinkid=="admin_controler_4_1"){

      $opcionb='ActivaBoton';
    }

   ?>
   <a class="<?php echo $opciona; ?>" href="../controler/admin_controler_4.php">Creación Activos</a>
   <a class="<?php echo $opcionb; ?>" href="../controler/admin_controler_4_1.php">Modifica Activos</a>
</div>
<div id="CuerpoContenedor">
  <div id="ContenedorInterior">

<?php
	
	$mibusqueda='default';

	if(isset($_GET["enviando"])){

		$mibusqueda=$_GET["buscar"];

		ejecuta_consulta($mibusqueda);
	}

?>		
		<br>
		<form action='<?php echo $_SERVER['PHP_SELF'];?>' method='get'>
			<label>Buscar Serial:<input type='text' name='buscar'></label>
			<input type='submit' name='enviando' id='saveb' value='Buscar'>
		</form>

  </div>
</div>

</body>
</html>