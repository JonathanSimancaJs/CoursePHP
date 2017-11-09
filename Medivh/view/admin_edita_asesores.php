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

    if($menuLinkid=="admin_controler_3"){

      $opciona='ActivaBoton';

    }else if($menuLinkid=="admin_controler_3_1"){

      $opcionb='ActivaBoton';
    }

   ?>
   <a class="<?php echo $opciona; ?>" href="../controler/admin_controler_3.php">Gestion Empleados</a>
   <a class="<?php echo $opcionb; ?>" href="../controler/admin_controler_3_1.php">Gestion Asesores</a>
</div>
<div id="CuerpoContenedor">
  <div id="ContenedorInterior">

<?php

require("../model/paginacion_asesor.php");
require("../model/inserta_asesor.php");

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table class="tdatos">
    <tr >
     <td class="primera_fila">Usuario</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Correo</td>
      <td class="primera_fila">Contraseña</td>
      <td class="primera_fila">Area</td>
      <td class="primera_fila">Permisos</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>

    </tr>

    <?php

    foreach ($matrizAsesor as $asesor): ?> 

   	<tr>
      <td><?php echo $asesor['IdAsesor'] ?></td>
      <td><?php echo $asesor['AseNombre'] ?></td>
      <td><?php echo $asesor['AseCorreo'] ?></td>
      <td>******</td>
      <td><?php echo $asesor['AreNombre'] ?></td>
      <td><?php echo $asesor['PerTipo'] ?></td>
 
      <td class="bot">
        <form action="../model/borra_asesor.php?Id=<?php echo $asesor['IdAsesor']?>" method="post">
        <input type='image' src="../images/delete.png" name='del' id='del'>
        </form>
      </td>
      <td class='bot'>
        <form action="../controler/admin_controler_3_1_2.php?idase=<?php echo $asesor['IdAsesor'] ?> & nomase=<?php echo $asesor['AseNombre'] ?> & corre=<?php echo $asesor['AseCorreo'] ?> & area=<?php echo $asesor['AreNombre'] ?> & perm=<?php echo $asesor['PerTipo'] ?>" method="post">
        <input type='image' src="../images/update.png" name='up' id='up'>
        </form>
      </td>
    </tr>   

    <?php

    endforeach;

    ?>

	<tr>
      <td><input type='text' name='id' size='10' class='centrado'></td>
      <td><input type='text' name='nom' size='10' class='centrado'></td>
      <td><input type='text' name='corr' size='10' class='centrado'></td>
      <td><input type='text' name='cont' size='10' class='centrado'></td>
      <td><select name="are">
      <option value="1">Nivel 1</option>
      <option value="2">Redes</option>
      <option value="3">Windows Server</option>
      <option value="4">Backup</option>
      <option value="5">Domain Controller</option>
      <option value="6">Active Directory</option>
      <option value="7">Administración</option>
      </select></td>
      <td><select name="per">
      <option value="1">Administrador</option>
      <option value="2">Funcionario</option>
      </select></td>
      <td colspan="2">
        <input type='submit' name='cr' id='save' value='Save'>
      </td>
      </tr> 
      <tr>
        <td colspan="6">
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