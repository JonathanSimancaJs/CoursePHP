<?php

  require_once("conexion.php");

  $base=Conectar::conexion();

  
  if(isset($_POST["cr"])){

      $Nom=$_POST["nomact"];
      $Cat=$_POST["cat"];
      $Sn=$_POST["sn"];
      $IdHard=$_POST["idhard"];
      $IdPro=$_POST["idpro"];
      $IdMem=$_POST["idmem"];
      $IdSoft=$_POST["idsoft"];
      $Lic=$_POST["lic"];
      $Est=$_POST["est"];
      $Idusu=$_POST["idusu"];

      if ($Nom=='' || $Sn=='') {
        echo "<script>
          error_01()
        </script>
        ";
        exit();
      }

      $sql="INSERT INTO ACTIVO (ActSerial,ActNombreModelo,ActLicencia,ActEstado,ActCategoria,IdUsuarioAct,IdProcesadorAct,IdMemoriaAct,IdHardwareAct,IdSoftwareAct) VALUES (:1,:2,:3,:4,:5,:6,:7,:8,:9,:10)";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":1"=>$Sn,":2"=>$Nom,":3"=>$Lic,":4"=>$Est,":5"=>$Cat,":6"=>$Idusu,":7"=>$IdPro,":8"=>$IdMem,":9"=>$IdHard,":10"=>$IdSoft));
  }


?>