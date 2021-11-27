<?php
include_once "Modelo/modelo.php";
include_once "repositorio/repo_lote.php";

class ServiciosLote extends rep_lote {
    public $tb_lote;

public function getAll(){
    $conebd=$this->iniconexionbd(1);
    $respuesta=$this->lotegetAll();
    $this->cerrarbd();
    return $respuesta;



}

public function insertar($datos){
    /**creo el objeto e inserto datos en los atributos del objeto */
    $this->tb_lote= new Tb_lote();
    $this->tb_lote->tb_loteParams($datos);
   
    /** Inicio la base de datos para hacer la insersion */
    $conebd=$this->iniconexionbd(1);
    $this->insertarenbdregistro($this->tb_lote);
    $this->cerrarbd();
}



public function buscarxIdlote($id){
    $this->tb_lote= new Tb_lote();
    $conebd=$this->iniconexionbd(1);
    $resultado=$this->listarxID($id);
    $this->cerrarbd();
   // $this->tb_lote->tb_lote($resultado);
    return $resultado;

}

public function actualizarRegistro($datos,$id){
  
    //  $datos=array('id'=>$id);
      $this->tb_lote= new Tb_lote();
      //var_dump($datos);
      $this->tb_lote->tb_loteParams($datos);
      $this->tb_lote->setId($id);
      
      $conebd=$this->iniconexionbd(1);
      $this->actualizarRegistroBD($this->tb_lote);
      $this->cerrarbd();
  }

public function eliminarxid($id){
    $this->tb_lote= new Tb_lote();
 
    
    $this->tb_lote->setId($id);
    
    $conebd=$this->iniconexionbd(1);
    $this->borrarlotexId($this->tb_lote);
    $this->cerrarbd();


}


}


?>
