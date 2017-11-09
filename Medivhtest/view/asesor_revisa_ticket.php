<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>

	<!-- 
		Importación de hotjas de estilo y Javascript
	-->

	<link rel="stylesheet" href="../css/btns.css">
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
	<link rel="stylesheet" href="../css/tables.css">
	<script src="../js/scripts.js"></script>
</head>
<body>

	<!-- 
		Dentro de este primer Div se encuentra el menu de las pestañas.
	-->
<div id="ContenedorMenu">

	<?php

	/* Esta sección me permite administrar el manejo de las url y las pentañas de la pagina, tambien aqui importo el archivo que me permite actualizar la informacion del ticket /model/actualiza_ticket.php*/

	require("../model/actualiza_ticket.php");

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="asesor_controler_1_1"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="asesor_controler_1_1"){

			$opcionb='ActivaBoton';
		}
	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/asesor_controler_1.php">Gestion SS</a>
	 <a class="<?php echo $opcionb; ?>" href="../controler/asesor_controler_1_1_1.php">Mis SS</a>
</div>

	<!-- 
		Dentro de estos Div esta el cotendio del diseño y uso de la informacion de Tickets.
	-->

<div id="CuerpoContenedor">
	<div id="ContenedorInterior">

 			<?php

 			/* Esta seccion me pemite traer la informacion de la cosulta de la DB y mostrarla, si no hay informacion muetra que no hay tickets creados*/

 			if(empty($registrosa)){

 				echo "No tiene tickets creados";

 			}

 			?>


	<!-- 
		Aqui empieza el formulario donde se encuentra toda la información del Ticket.
	-->

							<form name="neo" id="neo" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
								<table class="tshowtick">	

	<!-- 
		Aqui empieza el ciclo for que me permite mostrar los datos en el formulario.
	-->								

 			<?php	foreach ($registrosa as $valor):


 				/*El siguiente codigo me permite mantener el id correspondiente a cada elemento en las tablas ESTADOTICK, HARDWARE, SOFTWAR ya que por default estan en "0" y al intentar actualizar la información del ticket arroja error de SQL*/

 				$estadotick=$valor->getEstado();
 				$cathard=$valor->getHardware();
 				$catsoft=$valor->getSoftware();
 				$idselect=0;
 				$idhard=0;
 				$idsoft=0;

 				if($estadotick=='Creado'){
 					$idselect=1;
 				}else if($estadotick=='Asignado'){
 					$idselect=2;
 				}else if($estadotick=='En Gestion'){
 					$idselect=3;
 				}else if($estadotick=='Cerrado'){
 					$idselect=4;
 				}

 				if ($cathard=='No Aplica') {
 					$idhard=1;
 				}else if($cathard=='Teclado'){
 					$idhard=2;
 				}else if($cathard=='All In One'){
 					$idhard=3;
 				}else if($cathard=='Camara'){
 					$idhard=4;
 				}else if($cathard=='Celular'){
 					$idhard=5;
 				}else if($cathard=='Diadema'){
 					$idhard=6;
 				}else if($cathard=='Modem'){
 					$idhard=7;
 				}else if($cathard=='Monitor'){
 					$idhard=8;
 				}else if($cathard=='Mouse'){
 					$idhard=9;
 				}else if($cathard=='Portatil'){
 					$idhard=10;
 				}else if($cathard=='Router'){
 					$idhard=11;
 				}else if($cathard=='Servidor'){
 					$idhard=12;
 				}else if($cathard=='Swich'){
 					$idhard=13;
 				}else if($cathard=='Tablet'){
 					$idhard=14;
 				}else if($cathard=='Teléfono'){
 					$idhard=15;
 				}else if($cathard=='Televisor'){
 					$idhard=16;
 				}else if($cathard=='Torre'){
 					$idhard=17;
 				}

 				if ($idsoft=='No Aplica') {
 					$idsoft=1;
 				}else if($idsoft=='Windows Xp'){
 					$idsoft=2;
 				}else if($idsoft=='Windows Vista'){
 					$idsoft=3;
 				}else if($idsoft=='Windows 7'){
 					$idsoft=4;
 				}else if($idsoft=='Windows 8'){
 					$idsoft=5;
 				}else if($idsoft=='Windows 8.1'){
 					$idsoft=6;
 				}else if($idsoft=='Windows 10'){
 					$idsoft=7;
 				}else if($idsoft=='Windows Server 2003'){
 					$idsoft=8;
 				}else if($idsoft=='Windows Server 2008'){
 					$idsoft=9;
 				}else if($idsoft=='Windows Server 2008 R2'){
 					$idsoft=10;
 				}else if($idsoft=='Windows Server 2012'){
 					$idsoft=11;
 				}else if($idsoft=='Windows Server 2012 R2'){
 					$idsoft=12;
 				}else if($idsoft=='Windows Server 2016'){
 					$idsoft=13;
 				}else if($idsoft=='Office 2007'){
 					$idsoft=14;
 				}else if($idsoft=='Office 2010'){
 					$idsoft=15;
 				}else if($idsoft=='Office 2013'){
 					$idsoft=16;
 				}else if($idsoft=='Office 2016'){
 					$idsoft=17;
 				}else if($idsoft=='Office 365'){
 					$idsoft=18;
 				}else if($idsoft=='Navegador Web'){
 					$idsoft=19;
 				}else if($idsoft=='Base de datos'){
 					$idsoft=20;
 				}else if($idsoft=='Plugin'){
 					$idsoft=21;
 				}else if($idsoft=='Controlador'){
 					$idsoft=22;
 				}else if($idsoft=='Software Empresarial'){
 					$idsoft=25;
 				}else if($idsoft=='Otro Software'){
 					$idsoft=26;
 				}else if($idsoft=='Software Multimedia'){
 					$idsoft=28;
 				}

 			?>

									<tr>
										<td colspan='6' id="idtick">SS<?php echo $valor->getId(); ?><input type="hidden" name="noticket" value="<?php echo $valor->getId(); ?>"></td>
										<td>Estado SS</td>
										<td>
											<select name="estados" class="campos">
												<option selected value="<?php echo $idselect ?>"><?php echo $estadotick ?></option>
												<option value="2">Asignado</option>
												<option value="3">En gestión</option>
												<option value="4">Cerrado</option>
												</select>
										</td>
									</tr>
									<tr>
										<td colspan='2' class="tact_c">Fecha de Creación</td>
										<td colspan='2'><?php echo $valor->getFecha(); ?></td>
										<td colspan='2' class="tact_c">Fecha de Cierre</td>
										<td colspan='2'><?php echo $valor->getFechaCierre(); ?></td>
									</tr>	
									<tr>
										<td colspan='2' class="tactitle">Datos Solicitante</td>

										<td colspan='2' class="tactitle">Datos Cliente</td>

										<td colspan='4' class="tactitle">Informacion SS</td>

									</tr>	
									<tr>
										<td class="tact_c">Ident.</td>
										<td><?php echo $valor->getIdUsuario(); ?></td>
										<td class="tact_c">Nit</td>
										<td><?php echo $valor->getIdCLiente(); ?></td>
										<td class="tact_c">Asunto</td>
										<td colspan='3'><?php echo $valor->getTitulo(); ?></td>

									</tr>
									<tr>
										<td class="tact_c">Nombre</td>
										<td><?php echo $valor->getUsuario(); ?></td>
										<td class="tact_c">Empresa</td>
										<td><?php echo $valor->getCliNombre(); ?></td>
										<td class="tact_c">Descripcion</td>
										<td rowspan='3' colspan='3'><p><?php echo $valor->getComentario(); ?></p></td>

									</tr>
									<tr>
										<td class="tact_c">Correo</td>
										<td><?php echo $valor->getUsuCorreo(); ?></td>
										<td class="tact_c">Telefono 1</td>
										<td><?php echo $valor->getClitel1(); ?></td>
										<td></td>

									</tr>
									<tr>
										<td class="tact_c">Télefono</td>
										<td><?php echo $valor->getUsutel(); ?></td>
										<td class="tact_c">Telefono 2</td>
										<td><?php echo $valor->getClitel2(); ?></td>
										<td></td>

									</tr>
									<tr>
										<td class="tact_c">Ubicación</td>
										<td><?php echo $valor->getUsuUbicacion(); ?></td>
										<td class="tact_c">Direccion</td>
										<td><?php echo $valor->getCliDireccion(); ?></td>
										<td class="tact_c">Asesor Id</td>
										<td><input class="campos" type="text" onclick="BuscaAsesor()" name="codigo" id="codigo" value="<?php echo $valor->getAsesorId(); ?>"></td>
										<a href=""></a>
										<td colspan='2' class="tactitle">Categorización</td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td class="tact_c">Ciudad</td>
										<td><?php echo $valor->getCiuNombre(); ?></td>
										<td class="tact_c">NombreAsesor</td>
										<td><?php echo $valor->getAsesor(); ?></td>
										<td class="tact_c">Hardware</td>
										<td>
											<select name="hard" class="campos">
												<option slected value="<?php echo $idhard; ?>"><?php echo $cathard; ?></option>
												<option value="1">No Aplica</option>
												<option value="2">Teclado</option>
												<option value="3">All In One</option>
												<option value="4">Camara</option>
												<option value="5">Celular</option>
												<option value="6">Diadema</option>
												<option value="7">Modem</option>
												<option value="8">Monitor</option>
												<option value="9">Mouse</option>
												<option value="10">Portatíl</option>
												<option value="11">Router</option>
												<option value="12">Servidor</option>
												<option value="13">Swich</option>
												<option value="14">Tablet</option>
												<option value="15">Teléfono</option>
												<option value="16">Televisor</option>
												<option value="17">Torre</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="tactitle">Canal Entrada</td>
										<td><?php echo $valor->getCanal(); ?></td>
										<td class="tact_c">Departamento</td>
										<td><?php echo $valor->getDepNombre(); ?></td>
										<td class="tact_c">Correo</td>
										<td><?php echo $valor->getAseCorreo(); ?></td>
										<td class="tact_c">Software</td>
										<td>
											<select name="soft" class="campos">
												<option selected value="<?php echo $idsoft ?>"><?php echo $catsoft; ?></option>
												<option value="1">No Aplica</option>
												<option value="2">Windows Xp</option>
												<option value="3">Windows Vista</option>
												<option value="4">Windows 7</option>
												<option value="5">Windows 8</option>
												<option value="6">Windows 8.1</option>
												<option value="7">Windows 10</option>
												<option value="8">Windows Server 2003</option>
												<option value="9">Windows Server 2008</option>
												<option value="10">Windows Server 2008 R2</option>
												<option value="11">Windows Server 2012</option>
												<option value="12">Windows Server 2012 R2</option>
												<option value="13">Windows Server 2016</option>
												<option value="14">Office 2007</option>
												<option value="15">Office 2010</option>
												<option value="16">Office 2013</option>
												<option value="17">Office 2016</option>
												<option value="18">Office 365</option>
												<option value="19">Navegador Web</option>
												<option value="20">Base de datos</option>
												<option value="21">Plugin</option>
												<option value="22">Controlador</option>
												<option value="25">Sofware Empresarial</option>
												<option value="28">Sofware Multimedia</option>
												<option value="26">Otro Software</option>
											</select>
										</td>
									</tr>
									<tr>
										<td colspan="4"><input id="saveb" name="actualiza_ticket" type="submit" value="Guardar"></td>
										<td class="tact_c">Area</td>
										<td><?php echo $valor->getArea(); ?></td>
									</tr>				

			<?php
				endforeach;
			?>
								</table>
							</form>	

	<!-- 
		Aquí empieza el formulario que muestra las notas del ticket y tambien permite agregar nuevas notas.
	-->									

			<form method="post">
				<table class='tnotas'>
					<tr>
						<td colspan='5'>Notas Del Caso</td>
					</tr>
					<tr>
						<td width="20px">#</td>
						<td width="150px">Fecha</td>
						<td width="200px">Nota</td>
						<td width="150px">Asesor</td>
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
			<tr>
				<td colspan="4"><input id="saveb" type="button" value="Nuevo" onclick="NuevaNota('<?php echo $valor->getId(); ?>','<?php echo $valor->getAsesorId(); ?>')"></td>
			</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>