<?php

  require_once("conexion.php");

  $base=Conectar::conexion();

  
  if(isset($_POST["cr"])){

      $id=$_POST["idusu"];
      $iden=$_POST["usuide"];
      $nom=$_POST["usunom"];
      $corr=$_POST["usucor"];
      $tel=$_POST["usutel"];
      $ubi=$_POST["usuubi"];
      $con=$_POST["usucon"];
      $cli=$_POST["idcli"];
      $per=$_POST["idper"];

      if ($id=='') {
        echo "<script>
          error_01()
        </script>
        ";
        exit();
      }      

      $pass_cif=password_hash($con,PASSWORD_DEFAULT,array("cost"=>10));

      $sql="INSERT INTO USUARIO (IdUsuario,UsuIdent,UsuNombre,UsuCorreo,UsuTelefono,UsuUbicacion,UsuContra,IdCLienteUsu,IdPermisoUsu) VALUES (:1,:2,:3,:4,:5,:6,:7,:8,:9)";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":1"=>$id,":2"=>$iden,":3"=>$nom,":4"=>$corr,":5"=>$tel,":6"=>$ubi,":7"=>$pass_cif,":8"=>$cli,":9"=>$per));

      header("Location:../controler/admin_controler_3.php");

  }


?>