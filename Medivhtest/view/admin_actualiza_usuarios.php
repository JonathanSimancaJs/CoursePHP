<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualización Clientes</title>
<link rel="stylesheet" href="../css/smain.css">
</head>

<body>

<div id="CuerpoContenedor">
  <div id="ContenedorInterior">

<?php
  
  require("../model/actualiza_usuarios.php");

?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0">
    <tr>
      <td>Usuario</td>
      <td><label for="idusu"></label>
      <input type="text" name="idusu" id="iusu" value="<?php echo $IdUsu?>" readonly></td>
    </tr>
    <tr>
      <td>Ident.</td>
      <td><label for="iden"></label>
      <input type="text" name="iden" id="iden" value="<?php echo $Ident?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $Nomb?>"></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><label for="corr"></label>
      <input type="text" name="corr" id="corr" value="<?php echo $Corr?>"></td>
    </tr>
    <tr>
      <td>Teléfono</td>
      <td><label for="tel"></label>
      <input type="text" name="tel" id="tel" value="<?php echo $Tele?>"></td>
    </tr>
    <tr>
      <td>Ubicación</td>
      <td><label for="ubi"></label>
      <input type="text" name="ubi" id="ubi" value="<?php echo $Ubi?>"></td>
    </tr>
    <tr>
      <td>Cliente</td>
      <td><label for="cli"></label>
      <input type="text" name="cli" id="cli" value="<?php echo $Cli?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

  </div>
</div>

</body>
</html>