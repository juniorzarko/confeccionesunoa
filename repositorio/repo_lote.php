<?php

class rep_lote extends conexionDB {

    function lotegetAll(){

        try{
         
          $sentencia = " SELECT * FROM tb_lote";
        
          $statement = $this->conexion->prepare($sentencia);
          $result=$statement->execute();   
          
        }catch(PDOException $prueba_error){
          
          echo "Error: " . $prueba_error->getMessage();
        
        }
        
        $contenido=  $statement->fetchall(); 
        
         return $contenido;
        
        }
    
    
    public function insertarenbdregistro($registrolote){
            //$place_holders = implode(',', array_fill(0, count($registrousuario), '?')); // convierte una cadena en texto para la consulta con la funcion implode
               
            $statement = $this->conexion->prepare("INSERT INTO tb_lote (id,codigoLote,nombre,cantidad,fechaCreacion) VALUES (:id,:codigoLote, :nombre,:cantidad,:fechaCreacion)");
           
            $result=$statement->execute((array)$registrolote);
            //$resultado = $statement->fetchall();
            
           
            
            if ($result)
              return true;
        
        
          }

 

    function listarxID($id){
        $consulta = 'SELECT * FROM tb_lote WHERE id = :id LIMIT 1';
    
         $statement = $this->conexion->prepare($consulta);

         $statement->execute(array(
          ':id' => $id,
          ));
           
          $resultado = $statement->fetch();
          $this->cerrarbd();        
          return $resultado;


    }

    function actualizarRegistroBD($datos){

        try{
            //print_r($datos);
            $consulta = "UPDATE `tb_lote` SET `codigoLote` = :codigoLote, `nombre` = :nombre, `cantidad` = :cantidad, `fechaCreacion` = :fechaCreacion WHERE `tb_lote`.`id` = :id"; 
        
             $statement = $this->conexion->prepare($consulta);
    
             $resultado= $statement->execute((array)$datos);
               
            }catch(PDOException $e){
    
             print_r ("Error: " . $e->getMessage());
           }
              $this->cerrarbd();        
              return $resultado;
    


    }


    function borrarlotexId($id){
        $id3 = $id->getId();
        
        try{
       // print_r($id3); 
       // $id=json_decode($id);
        //print_r($id); 
        $consulta = "DELETE FROM `tb_lote` WHERE `tb_lote`.`id` =".$id3;
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