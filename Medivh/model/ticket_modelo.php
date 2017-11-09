<?php

	class Ticket_Modelo{

		//Propiedades del ticket.

		private $id;
		private $fecha;
		private $fechacierre;
		private $titulo;
		private $comentario;
		private $imagen;
		private $estado;
		private $areat;
		private $canal;
		private $usuariot;
		private $idasesor;
		private $asesor;
		private $hardware;
		private $software;
		private $idnota;
		private $notatext;
		private $notfecha;
		private $idusuario;
		private $usucorreo;
		private $usutel;
		private $usuubicacion;
		private $idcliente;
		private $clinombre;
		private $clitel1;
		private $clitel2;
		private $clidireccion;
		private $ciunombre;
		private $depnombre;
		private $asecorreo;
		
		//Metodos SET

		public function setId($id){

			$this->id=$id;
		}

		public function setFecha($fecha){

			$this->fecha=$fecha;
		}

		public function setFechaCierre($fechacierre){

			$this->fechacierre=$fechacierre;
		}

		public function setTitulo($titulo){

			$this->titulo=$titulo;
		}

		public function setComentario($comentario){

			$this->comentario=$comentario;
		}

		public function setImagen($imagen){

			$this->imagen=$imagen;
		}

		public function setEstado($estado){

			$this->estado=$estado;
		}

		public function setArea($areat){

			$this->areat=$areat;
		}

		public function setCanal($canal){

			$this->canal=$canal;
		}

		public function setUsuario($usuariot){

			$this->usuariot=$usuariot;
		}

		public function setAsesorId($idasesor){

			$this->idasesor=$idasesor;
		}

		public function setAsesor($asesor){

			$this->asesor=$asesor;
		}

		public function setHardware($hardware){

			$this->hardware=$hardware;
		}

		public function setSoftware($software){

			$this->software=$software;
		}

		public function setIdnota($idnota){

			$this->idnota=$idnota;
		}

		public function setNotatexto($notatext){

			$this->notatext=$notatext;
		}

		public function setNotafecha($notfecha){

			$this->notfecha=$notfecha;
		}

		public function setIdUsuario($idusuario){

			$this->idusuario=$idusuario;
		}

		public function setUsuCorreo($usucorreo){
			$this->usucorreo=$usucorreo;
		}

		public function setUsutel($usutel){
			$this->usutel=$usutel;
		}

		public function setUsuUbicacion($usuubicacion){
			$this->usuubicacion=$usuubicacion;
		}

		public function setIdCliente($idcliente){
			$this->idcliente=$idcliente;
		}

		public function setCliNombre($clinombre){
			$this->clinombre=$clinombre;
		}

		public function setClitel1($clitel1){
			$this->clitel1=$clitel1;
		}

		public function setClitel2($clitel2){
			$this->clitel2=$clitel2;
		}

		public function setCliDireccion($clidireccion){
			$this->clidireccion=$clidireccion;
		}

		public function setCiuNombre($ciunombre){
			$this->ciunombre=$ciunombre;
		}

		public function setDepNombre($depnombre){
			$this->depnombre=$depnombre;
		}

		public function setAseCorreo($asecorreo){
			$this->asecorreo=$asecorreo;
		}	

		//Metodos GET

		public function getId(){

			return $this->id;
		}

		public function getFecha(){

			return $this->fecha;
		}

		public function getFechaCierre(){

			return $this->fechacierre;
		}

		public function getTitulo(){

			return $this->titulo;
		}

		public function getComentario(){

			return $this->comentario;
		}

		public function getImagen(){

			return $this->imagen;
		}

		public function getEstado(){

			return $this->estado;
		}

		public function getArea(){

			return $this->areat;
		}

		public function getCanal(){

			return $this->canal;
		}

		public function getUsuario(){

			return $this->usuariot;
		}

		public function getAsesorId(){

			return $this->idasesor;
		}

		public function getAsesor(){

			return $this->asesor;
		}

		public function getHardware(){

			return $this->hardware;
		}

		public function getSoftware(){

			return $this->software;
		}

		public function getIdnota(){

			return $this->idnota;
		}

		public function getNotatexto(){

			return $this->notatext;
		}

		public function getNotaFecha(){

			return $this->notfecha;
		}
		public function getIdUsuario(){

			return $this->idusuario;
		}

		public function getUsuCorreo(){
			return $this->usucorreo;
		}

		public function getUsutel(){
			return $this->usutel;
		}

		public function getUsuUbicacion(){
			return $this->usuubicacion;
		}

		public function getIdCliente(){
			return $this->idcliente;
		}

		public function getCliNombre(){
			return $this->clinombre;
		}

		public function getClitel1(){
			return $this->clitel1;
		}

		public function getClitel2(){
			return $this->clitel2;
		}

		public function getCliDireccion(){
			return $this->clidireccion;
		}

		public function getCiuNombre(){
			return $this->ciunombre;
		}

		public function getDepNombre(){
			return $this->depnombre;
		}

		public function getAseCorreo(){
			return $this->asecorreo;
		}

	}

?>