<?php

class repo_operacion extends conexionDB{


    public function listarAll(){

        try{
         
          $sentencia = " SELECT * FROM tb_operacion";
        
          $statement = $this->conexion->prepare($sentencia);
          $result=$statement->execute();   
          
        }catch(PDOException $prueba_error){
          
          echo "Error: " . $prueba_error->getMessage();
        
        }
        
        $contenido=  $statement->fetchall(); 
        
         return $contenido;
        
        }
    
        public function insertarenbdregistro($registroperario){
            //$place_holders = implode(',', array_fill(0, count($registrousuario), '?')); // convierte una cadena en texto para la consulta con la funcion implode
               
            $statement = $this->conexion->prepare("INSERT INTO tb_operacion (id,fecha,nombre) VALUES (:id,:fecha,:nombre)");
           // var_dump($registroperario);
            $result=$statement->execute((array)$registroperario);
            //$resultado = $statement->fetchall();
            
           
            
            if ($result)
              return true;
        
        
          }
        
          public function editarxID($id){
            $consulta = 'SELECT * FROM tb_operacion WHERE id = :id LIMIT 1';
        
             $statement = $this->conexion->prepare($consulta);
    
             $statement->execute(array(
              ':id' => $id,
              ));
               
              $resultado = $statement->fetch();
              $this->cerrarbd();        
              return $resultado;
    
    
          }
    
          public function actualizarRegistroBD($datos){
          
           
            try{
            //print_r($datos);
            $consulta = "UPDATE `tb_operacion` SET `fecha` = :fecha, `nombre` = :nombre WHERE `tb_operacion`.`id` = :id"; 
        
             $statement = $this->conexion->prepare($consulta);
    
             $resultado= $statement->execute((array)$datos);
               
            }catch(PDOException $e){
    
             print_r ("Error: " . $e->getMessage());
           }
              $this->cerrarbd();        
              return $resultado;
    
          }
          
          public function eliminarregistro($id){
            $id3 = $id->getId();
            
            try{
           // print_r($id3); 
           // $id=json_decode($id);
            //print_r($id); 
            $consulta = "DELETE FROM `tb_operacion` WHERE `tb_operacion`.`id` =".$id3;
            $statement = $this->conexion->prepare($consulta);
    
            $resultado= $statement->execute();
           // $resultado = $statement->fetch();
           }catch(PDOException $e){
    
            print_r ("Error: " . $e->getMessage());
          }
             $this->cerrarbd();        
             return $resultado;
    
          }


}



?>