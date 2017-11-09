<?php

try{

  $login=htmlentities(addslashes($_POST["usuario"]));

  $password=htmlentities(addslashes($_POST["contra"]));

  $contador=0;

  $base=new PDO ('mysql:host=localhost; dbname=MEDIVH', 'root','tatan');

  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $base->exec("SET CHARACTER SET UTF8");

  $sql="SELECT * FROM USUARIO WHERE IdUsuario=:login";

  $resultado=$base->prepare($sql);

  $resultado->execute(array(":login"=>$login));

    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
      
      if(password_verify($password,$registro["UsuContra"])){

        $ususes=$registro["IdUsuario"];
        $permiso=$registro["IdPermisoUsu"];
        $contador++;
    }
  }

  if($contador>0 && $permiso==3){

    session_start();

    $_SESSION["usu_sesion"]=$ususes;

    header("location:../controler/usuario_controler_1.php");


  }else{

    $sql="SELECT * FROM ASESOR WHERE IdAsesor=:login";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":login"=>$login));

    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
      
      if(password_verify($password,$registro["AseContra"])){

        $ususes=$registro["IdAsesor"];
        $permiso=$registro["IdPermisoAse"];
        $contador++;
      }
    }

    if($contador>0 && $permiso==1){

    session_start();

    $_SESSION["usu_sesion"]=$ususes;

    header("location:../controler/admin_controler_1.php");

  }else if($contador>0 && $permiso==2){

    session_start();

    $_SESSION["usu_sesion"]=$ususes;

    header("location:../controler/asesor_controler_1.php");

  }else{

    header("location:../controler/controler_index_1.php");

  }
    
  }


  }catch(Exception $e){

        die ('Error: ' . $e->GetMessage());

  }

?>