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
  
  require("../model/actualiza_cliente.php");

?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td>Ident.</td>
      <td><label for="idcli"></label>
      <input type="text" name="idcli" id="idcli" value="<?php echo $IdCli?>" readonly></td>
    </tr>
    <tr>
      <td>Nombre Cliente</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $CliNom?>"></td>
    </tr>
    <tr>
      <td>Teléfono 1</td>
      <td><label for="tel1"></label>
      <input type="text" name="tel1" id="tel1" value="<?php echo $CliTel1?>"></td>
    </tr>
    <tr>
      <td>Teléfono 2</td>
      <td><label for="tel2"></label>
      <input type="text" name="tel2" id="tel2" value="<?php echo $CliTel2?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $CliDir?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><label for="cnom"></label>
      <input type="hidden" name="cnom" id="cnom" value="<?php echo $CiuNom?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><label for="dnom"></label>
      <input type="hidden" name="dnom" id="dnom" value="<?php echo $DepNom?>"></td>
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