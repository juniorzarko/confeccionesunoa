<?php
include_once "Modelo/modelo.php";
include_once "repositorio/repo_Operaciones.php";

class ServiciosOperaciones extends repo_operaciones {
    public $tb_modulos;

public function getAll(){
    $conebd=$this->iniconexionbd(1);
    $respuesta=$this->listarAll();
    $this->cerrarbd();
    return $respuesta;



}

public function insertar($datos){
    /**creo el objeto e inserto datos en los atributos del objeto */
    $this->tb_modulos= new Tb_modulos();
    $this->tb_modulos->ParamModulos($datos);  
    /** Inicio la base de datos para hacer la insersion */
    $conebd=$this->iniconexionbd(1);
    $this->insertarenbdregistro($this->tb_modulos);
    $this->cerrarbd();
}



public function buscarxId($id){
    $this->tb_modulos= new Tb_modulos();
    $conebd=$this->iniconexionbd(1);
    $resultado=$this->editarxID($id);
    $this->cerrarbd();
   // $this->tb_lote->tb_lote($resultado);
    return $resultado;

}

public function actualizarRegistro($datos,$id){
  
    //  $datos=array('id'=>$id);
      $this->tb_modulos= new Tb_modulos();

      $this->tb_modulos->ParamModulos($datos);
      $this->tb_modulos->setId($id);
      
      $conebd=$this->iniconexionbd(1);
      $this->actualizarRegistroBD($this->tb_modulos);
      $this->cerrarbd();
  }

public function eliminarxid($id){
    $this->tb_modulos= new Tb_modulos();
 
    
    $this->tb_modulos->setId($id);
    
    $conebd=$this->iniconexionbd(1);
    $this->eliminarregistro($this->tb_modulos);
    $this->cerrarbd();


}


}


?>
