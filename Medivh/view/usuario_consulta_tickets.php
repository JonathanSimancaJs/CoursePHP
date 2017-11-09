<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
	<link rel="stylesheet" href="../css/tables.css">
</head>
<body>

<?php

	require("../model/paginacion_usuario_tickets.php");

?>

<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="usuario_controler_1"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="usuario_controler_1_1"){

			$opcionb='ActivaBoton';
		}
	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/usuario_controler_1.php">Abrir SS</a>
	 <a class="<?php echo $opcionb; ?>" href="../controler/usuario_controler_1_1.php">Mis SS</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">
	<table class="tdatos" align="center">
		<tr>
 			<td>Número de SS</td>
 			<td>Fecha Creado</td>
 			<td>Fecha Cerrado</td>
 			<td>Estado</td>			
		</tr>
 			<?php

 			if(empty($registros)){

 				echo "<h3>No tiene tickets creados</h3>";

 			}else{

 				foreach ($registros as $valor) {
 					
 					$idtick=$valor->getId();

 				echo ("
 						<tr>
 							<td><a id='pag' href='../controler/usuario_controler_1_1_1.php?user=$ususess & tick=$idtick' method='post'>" ."SS" . $valor->getId() . "</a></td>
 							<td>" . $valor->getFecha() . "</td>
 							<td>" . $valor->getFechaCierre() . "</td>
 							<td>" . $valor->getEstado() . "</td>
 						</tr>");
  				}

  				for($i=1; $i<=$total_paginas; $i++){

  					echo "<tr><td colspan='4'><a id='pag' href='?pagina=" . $i . "'>" . $i . "</a></td></tr>";
  				}
  			}

  			?>
  	</table>
	</div>
</div>
</body>
</html>