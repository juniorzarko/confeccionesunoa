<?php

include_once "Modelo/modelo.php";
include_once "repositorio/repo_Operario.php";

class serviciosOperario extends repo_Operario {
    public $tb_Operario;


public function getAll(){
    $conebd=$this->iniconexionbd(1);
    $this->listarAll();
    $this->cerrarbd();



}

public function insertar($datos){
    
    $this->tb_operario= new Tb_Operario();
    //var_dump($datos);
    $this->tb_operario->tb_operario($datos);
    
    $conebd=$this->iniconexionbd(1);
    $this->insertarenbdregistro($this->tb_operario);
    $this->cerrarbd();
    
}


}


?>