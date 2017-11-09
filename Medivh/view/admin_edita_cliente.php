<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="../css/smain.css">
<link rel="stylesheet" href="../css/btns.css">
<link rel="stylesheet" href="../css/linkspag.css">
<link rel="stylesheet" href="../css/tables.css">
<script src="../js/scripts.js"></script>
</head>
<body>
<div id="ContenedorMenu">
  <?php

  $opciona="miBoton";
  $opcionb="miBoton";

  $menuLinkid=basename($_SERVER['PHP_SELF'],".php");

    if($menuLinkid=="admin_controler_2"){

      $opciona='ActivaBoton';

    }
   ?>
   <a class="<?php echo $opciona; ?>" href="../controler/admin_controler_2.php">Gestion Clientes</a>
</div>

<div id="CuerpoContenedor">
  <div id="ContenedorInterior">

<?php

require("../model/paginacion_cliente.php");
require("../model/inserta_cliente.php");

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table class="tdatos">
    <tr>
     <td class="primera_fila">Ident. Cliente</td>
      <td class="primera_fila">Nombre Ciente</td>
      <td class="primera_fila">Teléfono 1</td>
      <td class="primera_fila">Teléfono 2</td>
      <td class="primera_fila">Dirección</td>
      <td class="primera_fila">Ciudad</td>
      <td class="primera_fila">Departamento</td>
    </tr>

    <?php

    foreach ($matrizCliente as $cliente): ?> 

   	<tr class="sfile">
      <td><?php echo $cliente['IdCliente'] ?></td>
      <td><?php echo $cliente['CliNombre'] ?></td>
      <td><?php echo $cliente['CliTelefono1'] ?></td>
      <td><?php echo $cliente['CliTelefono2'] ?></td>
      <td><?php echo $cliente['CliDireccion'] ?></td>
      <td><?php echo $cliente['CiuNombre'] ?></td>
      <td><?php echo $cliente['DepNombre'] ?></td>
 
      <td class="bot">
        <form action="../model/borra_cliente.php?Id=<?php echo $cliente['IdCliente']?>" method="post">
        <input type='image' src="../images/delete.png" name='del' id='del'>
        </form>
      </td>
      <td class='bot'>
        <form action="../controler/admin_controler_2_1_1.php?idcli=<?php echo $cliente['IdCliente']?> & nom=<?php echo $cliente['CliNombre']?> & tel1=<?php echo $cliente['CliTelefono1']?> & tel2=<?php echo $cliente['CliTelefono2']?> & dir=<?php echo $cliente['CliDireccion'] ?> & cnom=<?php echo $cliente['CiuNombre']?> & dnom=<?php echo $cliente['DepNombre']?>" method="post">
        <input type='image' src="../images/update.png" name='up' id='up'>
        </form>
      </td>
    </tr>   

    <?php

    endforeach;

    ?>

	<tr>
      <td><input type='text' name='IdCli' size='10' class='centrado'></td>
      <td><input type='text' name='CliNom' size='10' class='centrado'></td>
      <td><input type='text' name='CliTel1' size='10' class='centrado'></td>
      <td><input type='text' name='CliTel2' size='10' class='centrado'></td>
      <td><input type='text' name='CliDir' size='10' class='centrado'></td>
      <td><select name="IdCiu">
      <option value="1">Bogotá</option>
      <option value="2">Medellin</option>
      <option value="3">Cali</option>
      <option value="4">Barranquilla</option>
      <option value="5">Cartagena de indias</option>
      <option value="6">Soledad</option>
      <option value="7">Cúcuta</option>
      <option value="8">Ibagué</option>
      <option value="9">Soacha</option>
      <option value="10">Bucaramanga</option>
      <option value="11">Santa Martha</option>
      <option value="12">Villavicencio</option>
      <option value="13">Pereira</option>
      <option value="14">Buenaventura</option>
      <option value="15">Pasto</option>
      <option value="16">Manizalez</option>
      <option value="17">Montería</option>
      <option value="18">Neiva</option>
      </select></td>
      <td><select name="IdDepar">
      <option value="1">Amazonas</option>
      <option value="2">Antioqia</option>
      <option value="3">Arauca</option>
      <option value="4">Atántico</option>
      <option value="5">Bogotá D.C.</option>
      <option value="6">Bolívar</option>
      <option value="7">Boyacá</option>
      <option value="8">Caldas</option>
      <option value="9">Caquetá</option>
      <option value="10">Casanare</option>
      <option value="11">Cauca</option>
      <option value="12">Cesar</option>
      <option value="13">Chocó</option>
      <option value="14">Córdoba</option>
      <option value="15">Cundinamarca</option>
      <option value="16">Guainía</option>
      <option value="17">Guaviare</option>
      <option value="18">Huila</option>
      <option value="19">La guajira</option>
      <option value="20">Magdalena</option>
      <option value="21">Meta</option>
      <option value="22">Nariño</option>
      <option value="23">Norte de Santander</option>
      <option value="24">Putumayo</option>
      <option value="25">Quindío</option>
      <option value="26">Risalralda</option>
      <option value="27">Santander</option>
      <option value="28">Sucre</option>
      <option value="29">Tolima</option>
      <option value="30">Valle del cauca</option>
      <option value="31">Vaupés</option>
      <option value="32">Vichada</option>        
      </select></td>
        <td colspan="2">
          <input type='submit' name='cr' id='save' value='Save'>
        </td>
      </tr>
      <tr>
        <td colspan="7">
          <?php

          for($i=1; $i<=$total_paginas; $i++){

            echo "<a id='pag' href='?pagina=" . $i . "'>" . $i . "</a>  ";

          }

          ?>
        
        </td>
      </tr>   
  </table>
</form>
  </div>
</div>

</body>
</html>