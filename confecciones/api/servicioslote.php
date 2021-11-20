<?php
include_once "Modelo/modelo.php";
include_once "repositorio/repo_lote.php";

class servicios extends rep_user {
    public $tb_lote;


public function getAll(){




}

public function insertarnuevo($datos){
 
    $this->tb_lote= new Tb_lote();
   // $this->tb_lote->UserModelParam($datos);
   
    $conebd=$this->iniconexionbd(1);
    $this->insertarenbdregistro($this->tb_user);
    $this->cerrarbd();
}

public function ingresarunoA($usuario){
    $this->tb_user= new UserModel();
    $conebd=$this->iniconexionbd(1);
    $resultado=$this->consulta_registro($usuario);
    
    return $resultado;
 
}


}


?>
