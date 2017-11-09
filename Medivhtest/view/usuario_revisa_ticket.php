<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
	<link rel="stylesheet" href="../css/tables.css">
</head>
<body>
<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="usuario_controler_1"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="usuario_controler_1_1" || $menuLinkid=="usuario_controler_1_1_1"){

			$opcionb='ActivaBoton';
		}
	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/usuario_controler_1.php">Abrir SS</a>
	 <a class="<?php echo $opcionb; ?>" href="../controler/usuario_controler_1_1.php">Mis SS</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">

 			<?php

 			if(empty($registrosa)){

 				echo "No tiene tickets creados";

 			}else{

 				foreach ($registrosa as $valor) {

					echo	("
							<form>
								<table class='tshowtick'>
									<tr>
										<td colspan='5'>SS".$valor->getId()."</td>
									</tr>
									<tr>				
											<tr>
												<td class='tshowtitulos'>Fecha Creación</td>
												<td>".$valor->getFecha()."</td>
												<td class='tshowtitulos'>Asunto</td>
												<td colspan='2'>".$valor->getTitulo()."</td>							
											</tr>
											<tr>
												<td class='tshowtitulos'>Fecha Cierre</td>
												<td>".$valor->getFechaCierre()."</td>
												<td rowspan='2' class='tshowtitulos'>Descripción</td>
												<td rowspan='2'><div style='width:350px'>".$valor->getComentario()."</div></td>						
											</tr>
											<tr>
												<td class='tshowtitulos'>Estado</td>
												<td>".$valor->getEstado()."</td>					
											</tr>				
									</tr>
								</table>
							</form>
						");
					if($valor->getImagen()!=""){

						echo("<table class='tshowimg'>
								<tr>
									<td>Imagen</td>
									<td><img src='../media/".$valor->getImagen()."' width='300px' height='200px'></td>
								</tr>
							</table");
					}
				}
			}

			?>

			<form>
				<table class='tshowtick'>
					<tr>
						<td colspan='5'>Notas Del Caso</td>
					</tr>
					<tr class='tshowtitulos'>
						<td>No</td>
						<td>Fecha</td>
						<td>Nota</td>
						<td>Asesor</td>
					</tr>

			<?php

			if(empty($registrosb)){

				echo "<tr><td colspan='5'>El caso no tiene notas</td></tr>";

			}else{

				foreach ($registrosb as $nota){

					echo ("
							
									<tr>
										<td>".$nota->getIdnota()."</td>
										<td>".$nota->getNotafecha()."</td>
										<td><div style='width:350px'>".$nota->getNotatexto()."</div></td>
										<td>".$nota->getAsesor()."</td>
									</tr>
						");

				}
			}
		?>
			</table>
		</form>
	</div>
</div>
</body>
</html>