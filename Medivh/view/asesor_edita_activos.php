<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/btns.css">
	<link rel="stylesheet" href="../css/tables.css">
</head>
<body>
<div id="ContenedorMenu">
  <?php

  $opciona="miBoton";
  $opcionb="miBoton";

  $menuLinkid=basename($_SERVER['PHP_SELF'],".php");

    if($menuLinkid=="asesor_controler_2"){

      $opciona='ActivaBoton';

    }else if($menuLinkid=="asesor_controler_2_1"){

      $opcionb='ActivaBoton';
    }

   ?>
   <a class="<?php echo $opciona; ?>" href="../controler/asesor_controler_2.php">Creación Activos</a>
   <a class="<?php echo $opcionb; ?>" href="../controler/asesor_controler_2_1.php">Modifica Activos</a>
</div>
<div id="CuerpoContenedor">
  <div id="ContenedorInterior">

<?php
	
	include("../model/inserta_activo.php");

?>

<form method="post">
	<table class="tactivo">
		<tr>
			<td class="tact_a" colspan="2">Información Del Activo</td>
			<tr>
				<td class="tact_c">Id Activo</td>
				<td><input type="text" value="Automatico" readonly></td>
			</tr>
			<tr>
				<td class="tact_c">Nombre</td>
				<td><input type="text" name="nomact"></td>
			</tr>
			<tr>
				<td class="tact_c">Catetoría</td>
				<td>
					<select name="cat" id="">
      					<option>Hardware</option>
      					<option>Software</option>
      				</select>
				</td>
			</tr>
		</tr>
		<tr>
			<td class="tact_a" colspan="2">Propiedades Hardware</td>
			<tr>
				<td class="tact_c">Serial</td>
				<td><input type="text" name="sn"></td>
			</tr>
			<tr>
				<td class="tact_c">Tipo Hardware</td>
				<td>
					<select name="idhard">
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
				<td class="tact_c">Procesador</td>
				<td>
					<select name="idpro">
						<option value="1">Intel Core Duo</option>
						<option value="2">Intel Pentium 4</option>
						<option value="3">Intel Celeron</option>
						<option value="4">Intel Xeon</option>
						<option value="5">Intel Core i3</option>
						<option value="6">Intel Core i5</option>
						<option value="7">Intel Core i7</option>
						<option value="8">AMD FX</option>
						<option value="9">AMD Athlon</option>
						<option value="10">AMD APU</option>
						<option value="11">AMD Rizen</option>
						<option value="12">No Aplica</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="tact_c">Memoria</td>
				<td>
					<select name="idmem">
						<option value="9">No Aplica</option>
						<option value="1">2 GB</option>
						<option value="2">4 GB</option>
						<option value="3">8 GB</option>
						<option value="4">16 GB</option>
						<option value="5">32 GB</option>
						<option value="6">64 GB</option>
						<option value="7">128 GB</option>
						<option value="8">256 GB</option>
					</select>
				</td>
			</tr>
			<td class="tact_a" colspan="2">Propiedaes Software</td>
			<tr>
				<td class="tact_c">Tipo Software</td>
				<td>
					<select name="idsoft">
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
				<td class="tact_c">Licencia</td>
				<td><input type="text" name="lic"></td>
			</tr>
		</tr>
		<tr>
			<td class="tact_a" colspan="2">Asignación</td>
			<tr>
				<td class="tact_c">Estado</td>
				<td>
					<select name="est">
						<option>Asignado</option>
						<option>En Stock</option>
						<option>Prestamo</option>
						<option>Baja</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="tact_c">Usuario</td>
				<td><input type="text" name="idusu" value="default"></td>
			</tr>
		</tr>
		<tr>
			<td class="tact_b" colspan="2">
				<br>
				<input id='saveb' type="submit" name="cr" id="cr" value="Registar">
			</td>
		</tr>
	</table>
</form>

  </div>
</div>

</body>
</html>