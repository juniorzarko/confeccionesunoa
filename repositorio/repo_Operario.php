<?php

class repo_Operario extends conexionDB{

public function listarAll(){

    try{
     
      $sentencia = " SELECT * FROM tb_Operador";
    
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
    


}



?>