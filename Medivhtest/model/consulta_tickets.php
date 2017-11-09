<?php

  include ("../model/maneja_ticket.php");

  try{

  	$miconexion=new PDO('mysql:host=sql301.epizy.com; dbname=epiz_20037598_MEDIVH', 'epiz_20037598', 'xfvdn6p7');

  	$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	$Manejo_Tickets=new Manejo_Tickets($miconexion);

  	$registros=$Manejo_Tickets->consultaTicketsUsuario($ususess);


  }catch(Exception $e){

  	die("Error: " . $e->getMessage());

  }


?>