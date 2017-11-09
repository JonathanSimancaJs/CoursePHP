<?php
	
	require_once("conexion.php");
  
	$base=Conectar::conexion();

  if(isset($_POST["bot_cambiar"])){

    $Idusu=$_POST["iduser"];
    $Old=$_POST["oldpass"];
    $New=$_POST["newpass"];
    $Conf=$_POST["confpass"];
    
    $sql="SELECT UsuContra FROM USUARIO WHERE IdUsuario=:USER";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":USER"=>$Idusu));

    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

        if(password_verify($Old,$registro["UsuContra"])){

            if($New==$Conf && $New!==''){

                $pass_cif=password_hash($New,PASSWORD_DEFAULT,array("cost"=>10));

                $sqlb="UPDATE USUARIO SET UsuContra=:CONTRA";

                $resultadob=$base->prepare($sqlb);

                $resultadob->execute(array(":CONTRA"=>$pass_cif));

                echo "<h3 style='color:green;'>Se actualizo la contraseña.</h3>";

            }else{

                echo "<h3 style='color:red;'>La nueva contraseña no coinciden.</h3>";
            }
        }else{

        echo "<h3 style='color:red;'>La contraseña anterior no conincide.</h3>";
        }
    }
}



?>