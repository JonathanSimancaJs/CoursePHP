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

require("../model/paginacion_usuario.php");
require("../model/inserta_usuarios.php");

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table class="tdatos">
    <tr >
     <td class="primera_fila">Usuario</td>
      <td class="primera_fila">Ident.</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Correo</td>
      <td class="primera_fila">Teléfono</td>
      <td class="primera_fila">Ubicación</td>
      <td class="primera_fila">Contraseña</td>
      <td class="primera_fila">Ident. Cliente</td>
      <td class="primera_fila">Permisos</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>

    </tr>

    <?php

    foreach ($matrizUsuario as $usuario): ?> 

   	<tr>
      <td><?php echo $usuario['IdUsuario'] ?></td>
      <td><?php echo $usuario['UsuIdent'] ?></td>
      <td><?php echo $usuario['UsuNombre'] ?></td>
      <td><?php echo $usuario['UsuCorreo'] ?></td>
      <td><?php echo $usuario['UsuTelefono'] ?></td>
      <td><?php echo $usuario['UsuUbicacion'] ?></td>
      <td>******</td>
      <td><?php echo $usuario['IdClienteUsu'] ?></td>
      <td><?php echo $usuario['PerTipo'] ?></td>
 
      <td class="bot">
        <form action="../model/borra_usuarios.php?Id=<?php echo $usuario['IdUsuario']?>" method="post">
        <input type='image' src="../images/delete.png" name='del' id='del'>
        </form>
      </td>
      <td class='bot'>
        <form action="../controler/admin_controler_3_1_1.php?idusu=<?php echo $usuario['IdUsuario']?> & iden=<?php echo $usuario['UsuIdent'] ?> & nom=<?php echo $usuario['UsuNombre'] ?> & corr=<?php echo $usuario['UsuCorreo'] ?> & tel=<?php echo $usuario['UsuTelefono'] ?> & ubi=<?php echo $usuario['UsuUbicacion'] ?> & cli=<?php echo $usuario['IdClienteUsu'] ?>" method="post">
      <input type='image' src="../images/update.png" name='up' id='up'>
      </form>
      </td>
    </tr>   

    <?php

    endforeach;

    ?>

	<tr>
      <td><input type='text' name='idusu' size='10' class='centrado'></td>
      <td><input type='text' name='usuide' size='10' class='centrado'></td>
      <td><input type='text' name='usunom' size='10' class='centrado'></td>
      <td><input type='text' name='usucor' size='10' class='centrado'></td>
      <td><input type='text' name='usutel' size='10' class='centrado'></td>
      <td><input type='text' name='usuubi' size='10' class='centrado'></td>
      <td><input type='text' name='usucon' size='10' class='centrado'></td>
      <td><input type='text' name='idcli' size='10' class='centrado'></td>
      <td><select name="idper">
      <option value="3">Empleado</option>
      </select></td>

        <td colspan="2">
          <input type='submit' name='cr' id='save' value='Save'>
        </td>
      </tr> 
      <tr>
        <td colspan="9">
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