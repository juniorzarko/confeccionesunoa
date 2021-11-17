<?php
include_once 'Modelo/conexionBD.php';

class UserModel {

  public $id;
  public $nombre;
  public $usuario;
  public $clave;
  public $email;
  public $estado;

  function __construct (){

	$this->id=null;//$id;

}


function UserModelParam($objUserModel){

	$this->id=null;//$id;
	$this->nombre=$objUserModel['nombre'];
	$this->usuario=$objUserModel['usuario'];
	$this->clave=$objUserModel['clave'];
	$this->email=$objUserModel['email'];
	$this->estado=$objUserModel['estado'];
//	var_dump($this->nombre);
}


  public function setId($id){
		$this->id = $id;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
  public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

  public function setClave($clave){
		$this->clave = $clave;
	}
  public function setEmail($email){
		$this->email = $email;
	}

  public function setEstado($estado){
		$this->nombre = $estado;
	}
  
  public function getNombre(){
		return $this->nombre;
	}

  public function getUsuario(){
		//print_r($this->usuario);
		return $this->usuario;
	}

  public function getClave(){
		return $this->clave;
	}
  public function getEmail(){
		return $this->email;
	}

  public function getEstado(){
		return $this->estado;
	}

}

class Tb_lote {




}


?>