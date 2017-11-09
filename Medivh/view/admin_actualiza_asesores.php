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
  
  require("../model/actualiza_asesores.php");

?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0">
    <tr>
      <td>Usuario</td>
      <td><label for="idase"></label>
      <input type="text" name="idase" id="idase" value="<?php echo $IdAse?>" readonly></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nomase"></label>
      <input type="text" name="nomase" id="nomase" value="<?php echo $Nomb?>"></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><label for="corre"></label>
      <input type="text" name="corre" id="corre" value="<?php echo $Corr?>"></td>
    </tr>
    <tr>
      <td>Area</td>
      <td><select name="area" id="area">
      <option value="1">Nivel 1</option>
      <option value="2">Redes</option>
      <option value="3">Windows Server</option>
      <option value="4">Backup</option>
      <option value="5">Domain Controller</option>
      <option value="6">Active Directory</option>
      <option value="7">Administración</option>
      </select></td>
    </tr>
    <tr>
      <td>Permiso</td>
      <td><select name="perm" id="perm">
      <option value="2">Funcionario</option>
      <option value="1">Administrador</option>
      </select></td>
    </tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

  </div>
</div>

</body>
</html>