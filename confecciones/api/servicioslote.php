<?php
include_once "Modelo/modelo.php";
include_once "repositorio/repo_lote.php";

class servicioslote extends rep_lote {
    public $tb_lote;

public function getAll(){
        $conebd=$this->iniconexionbd(1);
        $respuesta=$this->listarAll();
        $this->cerrarbd();
        return $respuesta;
    
}

public function insertar($datos){
 
    $this->tb_lote= new Tb_lote();
    $this->tb_lote->tb_loteParams($datos);
//print_r($this->tb_lote);
    $conebd=$this->iniconexionbd(1);
    $this->insertar($this->tb_lote);
    $this->cerrarbd();
}

public function buscarId($id){
   
    $this->tb_lote= new Tb_lote();
    $conebd=$this->iniconexionbd(1);
    $resultado=$this->editarxID($id);
    $this->cerrarbd();
    $this->tb_lote->tb_lote($resultado);
    return $resultado;

}


}


?>
