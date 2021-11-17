<?php
include_once "Modelo/modelo.php";
include_once "repositorio/repo_user.php";

class servicios extends rep_user {
    public $tb_user;


public function getAll(){




}

public function insertarnuevo($datos){
   // print_r($datos);
    $this->tb_user= new UserModel();
    $this->tb_user->UserModelParam($datos);
   
    $conebd=$this->iniconexionbd(1);
   
    $this->insertarenbdregistro($this->tb_user);
    $this->cerrarbd();
}

public function ingresarunoA($usuario){
    $this->tb_user= new UserModel();
    $conebd=$this->iniconexionbd(1);
    $resultado=$this->consulta_registro($usuario);
    return $resultado;
  //  var_dump($resultado);
}



}


?>
