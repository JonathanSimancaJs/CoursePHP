<?php

  include ("../model/maneja_ticket.php");

  try{

  	$miconexion=new PDO('mysql:host=sql301.epizy.com; dbname=epiz_20037598_MEDIVH', 'epiz_20037598', 'xfvdn6p7');

  	$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  	$miconexion->exec("SET CHARACTER SET UTF8");

  	$Manejo_Ticketsa=new Manejo_Tickets($miconexion);

  	$registrosa=$Manejo_Ticketsa->muestraTicket($iduser,$idticket);

  	$Manejo_Ticketsb=new Manejo_Tickets($miconexion);

  	$registrosb=$Manejo_Ticketsb->muestraNotas($idticket);


  }catch(Exception $e){

  	die("Error: " . $e->getMessage());

  }


?>