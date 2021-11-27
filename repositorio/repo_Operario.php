<?php

class repo_Operario extends conexionDB{

public function listarAll(){

    try{
     
      $sentencia = " SELECT * FROM tb_operario";
    
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
           
        $statement = $this->conexion->prepare("INSERT INTO tb_operario (id,nombre,apellido,direccion,telefono,cargo,email) VALUES (:id,:nombre, :apellido ,:direccion,:telefono ,:cargo ,:email)");
        var_dump($registroperario);
        $result=$statement->execute((array)$registroperario);
        //$resultado = $statement->fetchall();
        
       
        
        if ($result)
          return true;
    
    
      }
    
      public function editarxID($id){
        $consulta = 'SELECT * FROM tb_operario WHERE id = :id LIMIT 1';
    
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
        $consulta = "UPDATE `tb_operario` SET `nombre` = :nombre, `apellido` = :apellido, `direccion` = :direccion, `telefono` = :telefono,`cargo` = :cargo, `email` = :email WHERE `tb_operario`.`id` = :id"; 
    
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
        $consulta = "DELETE FROM `tb_operario` WHERE `tb_operario`.`id` =".$id3;
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