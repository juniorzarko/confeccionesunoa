<?php
include_once "Modelo/modelo.php";
include_once "repositorio/repo_operacion.php";
//include_once "repositorio/repo_Operacion.php";

class serviciosOperacion extends repo_operacion{

    public $tb_operacion;

    public function getAll(){
        $conebd=$this->iniconexionbd(1);
        $respuesta=$this->listarAll();
        $this->cerrarbd();
        return $respuesta;
    
    
    }
    
    public function insertar($datos){
        
        $this->tb_operacion = new tb_operacion();
        //var_dump($datos);
        $this->tb_operacion->tb_operacion($datos);
        
        $conebd=$this->iniconexionbd(1);
        $this->insertarenbdregistro($this->tb_operacion);
        $this->cerrarbd();
        
    }
   
    public function buscarId($id){
       
        $this->tb_operacion= new tb_operacion();
        $conebd=$this->iniconexionbd(1);
        $resultado=$this->editarxID($id);
        $this->cerrarbd();
        $this->tb_operacion->tb_operacion($resultado);
        return $resultado;
    
    }
    
    public function actualizarRegistro($datos,$id){
      
      //  $datos=array('id'=>$id);
        $this->tb_operacion= new tb_operacion();
        //var_dump($datos);
        $this->tb_operacion->tb_operacion($datos);
        $this->tb_operacion->setId($id);
        
        $conebd=$this->iniconexionbd(1);
        $this->actualizarRegistroBD($this->tb_operacion);
        $this->cerrarbd();
    }
    
    
    public function eliminarxid($id){
        $this->tb_operacion= new tb_operacion();
        //var_dump($id);
        
        $this->tb_operacion->setId($id);
        
        $conebd=$this->iniconexionbd(1);
        $this->eliminarregistro($this->tb_operacion);
        $this->cerrarbd();
        
    
    }


}





?>