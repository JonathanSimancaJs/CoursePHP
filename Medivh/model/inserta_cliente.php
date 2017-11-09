<?php

  require_once("conexion.php");

  $base=Conectar::conexion();

  
  if(isset($_POST["cr"])){

      $IdCli=$_POST["IdCli"];
      $CliNom=$_POST["CliNom"];
      $CliTel1=$_POST["CliTel1"];
      $CliTel2=$_POST["CliTel2"];
      $CliDir=$_POST["CliDir"];
      $IdCiu=$_POST["IdCiu"];
      $IdDepar=$_POST["IdDepar"];

      if ($IdCli=='') {
        echo "<script>
          error_01()
        </script>
        ";
        exit();
      }

      $sql="INSERT INTO CLIENTE (IdCliente,CliNombre,CliTelefono1,CliTelefono2,CliDireccion,IdCiudadCli,IdDepartCli) VALUES (:1,:2,:3,:4,:5,:6,:7)";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":1"=>$IdCli,":2"=>$CliNom,":3"=>$CliTel1,":4"=>$CliTel2,":5"=>$CliDir,":6"=>$IdCiu,":7"=>$IdDepar));

      header("Location:../controler/admin_controler_2.php");

  }


?>