<?php
include_once "Modelo/modelo.php";
//include_once "repositorio/repo_Operacion.php";

class serviciosOperacion{


    public function getAll(){
        $conebd=$this->iniconexionbd(1);
        $respuesta=$this->listarAll();
        $this->cerrarbd();
        return $respuesta;
    
    
    }
    
    public function insertar($datos){
        
        $this->tb_operacion= new Tb_Operacion();
        //var_dump($datos);
        $this->tb_operario->tb_operario($datos);
        
        $conebd=$this->iniconexionbd(1);
        $this->insertarenbdregistro($this->tb_operario);
        $this->cerrarbd();
        
    }
    
  /*
  
    public function buscarId($id){
       
        $this->tb_operario= new Tb_Operario();
        $conebd=$this->iniconexionbd(1);
        $resultado=$this->editarxID($id);
        $this->cerrarbd();
        $this->tb_operario->tb_operario($resultado);
        return $resultado;
    
    }
    
    public function actualizarRegistro($datos,$id){
      
      //  $datos=array('id'=>$id);
        $this->tb_operario= new Tb_Operario();
        //var_dump($datos);
        $this->tb_operario->tb_operario($datos);
        $this->tb_operario->setId($id);
        
        $conebd=$this->iniconexionbd(1);
        $this->actualizarRegistroBD($this->tb_operario);
        $this->cerrarbd();
    }
    
    
    public function eliminar($id){
        $this->tb_operario= new Tb_Operario();
        //var_dump($id);
        
        $this->tb_operario->setId($id);
        
        $conebd=$this->iniconexionbd(1);
        $this->eliminarregistro($this->tb_operario);
        $this->cerrarbd();
        
    
    }

*/
}





?>