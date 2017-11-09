<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
  <link rel="stylesheet" href="../css/tables.css">
  <link rel="stylesheet" href="../css/btns.css"
</head>
<body>
<div id="ContenedorMenu">

	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="asesor_controler_3"){

			$opciona='ActivaBoton';

		}

	 ?>

     <a class="<?php echo $opciona; ?>" href="../controler/asesor_controler_3.php">Cambiar Contraseña</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">
  <?php
    include("../model/cambia_contra_asesor.php");
  ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table class="tupdateuser">
          <tr>
            <td></td>
            <td><input type="hidden" name="iduser" value="<?php echo $ususess; ?>"></td>
          </tr>         
          <tr>
            <td>Contraseña Anterior</td>
            <td><input type="password" name="oldpass"></td>
          </tr>
          <tr>
            <td>Nueva Contraseña</td>
            <td><input type="password" name="newpass"></td>
          </tr>
          <tr>
            <td>Confirmar Contraseña</td>
            <td><input type="password" name="confpass"></td>
          </tr> 
          <tr>
            <td><input type="submit" name="bot_cambiar" id="saveb" value="Cambiar"></td>
          </tr>     
        </table>
    </form>
	</div>
</div>

</body>
</html>