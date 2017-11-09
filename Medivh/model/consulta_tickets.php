<?php

  include ("../model/maneja_ticket.php");

  try{

  	$miconexion=new PDO('mysql:host=localhost; dbname=MEDIVH', 'root', 'tatan');

  	$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	$Manejo_Tickets=new Manejo_Tickets($miconexion);

  	$registros=$Manejo_Tickets->consultaTicketsUsuario($ususess);


  }catch(Exception $e){

  	die("Error: " . $e->getMessage());

  }


?>