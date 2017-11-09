<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/smain.css">
	<link rel="stylesheet" href="../css/linkspag.css">
  <link rel="stylesheet" href="../css/tables.css">
  <link rel="stylesheet" href="../css/btns.css">
</head>
<body>
<div id="ContenedorMenu">
	<?php

	$opciona="miBoton";
	$opcionb="miBoton";

	$menuLinkid=basename($_SERVER['PHP_SELF'],".php");

		if($menuLinkid=="usuario_controler_3"){

			$opciona='ActivaBoton';

		}else if($menuLinkid=="usuario_controler_3_1"){

            $opcionb='ActivaBoton';
        }

	 ?>
	 <a class="<?php echo $opciona; ?>" href="../controler/usuario_controler_3.php">Actualización de datos</a>
     <a class="<?php echo $opcionb; ?>" href="../controler/usuario_controler_3_1.php">Cambiar Contraseña</a>
</div>
<div id="CuerpoContenedor">
	<div id="ContenedorInterior">
    
    <h3 style="color: red;">! Tenga cuidado al hacer clic en "Actualizar" la información se modificara ¡</h3>

    <?php
        require("../model/usuario_actualiza_datos.php");
    ?>

        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <?php foreach($matrizUsuario as $usuario):?>
              <table class="tupdateuser">
                <tr>
                  <td class="tact_c">Ident.</td>
                  <td><label></label>
                  <input type="text" name="ident" value="<?php echo $usuario['UsuIdent'] ?>"></td>
                </tr>
                <tr>
                  <td class="tact_c">Nombre</td>
                  <td><label></label>
                  <input type="text" name="nomb" value="<?php echo $usuario['UsuNombre'] ?>"></td>
                </tr>
                <tr>
                  <td class="tact_c">Correo</td>
                  <td><label></label>
                  <input type="text" name="corr" value="<?php echo $usuario['UsuCorreo'] ?>"></td>
                </tr>
                <tr>
                  <td class="tact_c">Teléfono</td>
                  <td><label></label>
                  <input type="text" name="tel" value="<?php echo $usuario['UsuTelefono'] ?>"></td>
                </tr>
                <tr>
                  <td class="tact_c">Ubicación</td>
                  <td><label></label>
                  <input type="text" name="ubi" value="<?php echo $usuario['UsuUbicacion'] ?>"></td>
                </tr>
                <tr>
                  <td>
                  <input type="hidden" name="idusu" value="<?php echo $usuario['IdUsuario'] ?>"></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="submit" name="bot_actualizar" id="saveb" value="Actualizar"></td>
                </tr>
              </table>
        <?php endforeach ?>
</form>
	</div>
</div>

</body>
</html>