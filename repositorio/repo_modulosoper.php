<?php

class repo_Modulosoper extends conexionDB{

    public function listarAll(){

        try{
         
          $sentencia = " SELECT * FROM tb_mod_prendas";
        
          $statement = $this->conexion->prepare($sentencia);
          $result=$statement->execute();   
          
        }catch(PDOException $prueba_error){
          
          echo "Error: " . $prueba_error->getMessage();
        
        }
        
        $contenido=  $statement->fetchall(); 
        
         return $contenido;
        
        }
    
        public function insertarenbdregistro($registro){
            //$place_holders = implode(',', array_fill(0, count($registrousuario), '?')); // convierte una cadena en texto para la consulta con la funcion implode
               
            $statement = $this->conexion->prepare("INSERT INTO tb_mod_prendas (id,fecha_mvto,id_lote,id_operario,id_operaciones,unidad_hora,unidadTotalDia,salarioDia,total,observaciones) VALUES (:id,:fecha_mvto,:id_lote,:id_operario,:id_operaciones,:unidad_hora,:unidadTotalDia,:salarioDia,:total,:observaciones)");
            //var_dump($registro);
            $result=$statement->execute((array)$registro);
            //$resultado = $statement->fetchall();
            
           
            
            if ($result)
              return true;
        
        
          }
        
          public function editarxID($id){
            $consulta = 'SELECT * FROM tb_mod_prendas WHERE id = :id LIMIT 1';
        
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
           
            $consulta = "UPDATE `tb_mod_prendas` SET `fecha` = :fecha, `descripcion` = :descripcion, `costoxprenda` = :costoxprenda  WHERE `tb_mod_prendas`.`id` = :id"; 
        
             $statement = $this->conexion->prepare($consulta);
            // print_r($consulta);
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
       
            $consulta = "DELETE FROM `tb_mod_prendas` WHERE `tb_mod_prendas`.`id` =".$id3;
            $statement = $this->conexion->prepare($consulta);
    
            $resultado= $statement->execute();
    
           }catch(PDOException $e){
    
            print_r ("Error: " . $e->getMessage());
          }
             $this->cerrarbd();        
             return $resultado;
    
          }
    





}



?>