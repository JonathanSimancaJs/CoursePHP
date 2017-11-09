<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
</head>
<body>
<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="admin_controler_1"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="admin_controler_1_1"){

			$opcionb='ActivaBoton';
		}
	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/admin_controler_1.php">Comunicados</a>
	 <a class="<?php echo $opcionb; ?>" href="../controler/admin_controler_1_1.php">Nuevo Comunicado</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">
		<?php
			include("../model/consulta_comunicados.php");
		?>
	</div>
</div>
</body>
</html>