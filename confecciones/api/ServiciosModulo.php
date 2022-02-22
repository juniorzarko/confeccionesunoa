<?php
include_once "Modelo/modelo.php";
include_once "repositorio/repo_modulosoper.php";

class ServiciosModulo extends repo_Modulosoper {
    public $tb_mod_prendas;

public function getAll(){
    $conebd=$this->iniconexionbd(1);
    $respuesta=$this->listarAll();
    $this->cerrarbd();
    return $respuesta;



}

public function insertar($datos){
    /**creo el objeto e inserto datos en los atributos del objeto */
    $this->tb_mod_prendas= new tb_mod_prendas();
    $this->tb_mod_prendas->ParamModulos($datos);  
    /** Inicio la base de datos para hacer la insersion */
    $conebd=$this->iniconexionbd(1);
    $this->insertarenbdregistro($this->tb_mod_prendas);
    $this->cerrarbd();
}



public function buscarxId($id){
    $this->tb_mod_prendas= new tb_mod_prendas();
    $conebd=$this->iniconexionbd(1);
    $resultado=$this->editarxID($id);
    $this->cerrarbd();
   // $this->tb_lote->tb_lote($resultado);
    return $resultado;

}

public function actualizarRegistro($datos,$id){
  
    //  $datos=array('id'=>$id);
      $this->tb_modulos= new tb_mod_prendas();

      $this->tb_mod_prendas->ParamModulos($datos);
      $this->tb_mod_prendas->setId($id);
      
      $conebd=$this->iniconexionbd(1);
      $this->actualizarRegistroBD($this->tb_mod_prendas);
      $this->cerrarbd();
  }

public function eliminarxid($id){
    $this->tb_mod_prendas= new tb_mod_prendas();
 
    
    $this->tb_mod_prendas->setId($id);
    
    $conebd=$this->iniconexionbd(1);
    $this->eliminarregistro($this->tb_mod_prendas);
    $this->cerrarbd();


}


}


?>
