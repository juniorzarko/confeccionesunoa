<?php
include_once 'Modelo/conexionBD.php';

class UserModel extends conexionDB{

  private $id;
  private $nombre;
  private $usuario;
  private $clave;
  private $email;
  private $estado;
  
function __constructor($id,$nombre,$usuario,$clave,$email,$estado){
  $this->id=$id;
  $this->nombre=$nombre;
  $this->usuario=$usuario;
  $this->clave=$clave;
  $this->email=$email;
  $this->estado=$estado;
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

  public function setclave($clave){
		$this->clave = $clave;
	}
  public function setEmail($email){
		$this->email = $email;
	}

  public function setEstado($estado){
		$this->nombre = $estado;
	}
  
  public function getNombre(){
		$this->nombre = $nombre;
	}

  public function getUsuario(){
		return $this->usuario;
	}

  public function getclave(){
		return $this->clave;
	}
  public function getEmail(){
		return $this->email;
	}

  public function getEstado(){
		return $this->estado;
	}

}

?>