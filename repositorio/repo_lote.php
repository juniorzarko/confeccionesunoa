<?php

class rep_lote extends conexionDB {

    function getAll(){



    }

    function insertar($registrolote){   
     print_r($registrolote);     
     /*
     $statement = $this->conexion->prepare("INSERT INTO tb_lote (id,codigoLote,nombre,cantidad,fechaCreacion) VALUES (:id,:codigoLote,:nombre,:cantidad,:fechaCreacion)");
     //var_dump($registrolote);
     $result=$statement->execute((array)$registrolote);
     //$resultado = $statement->fetchall();
          
     if ($result)
       return true;
 */

    }

    public function editarxID($id){
        $consulta = 'SELECT * FROM tb_lote WHERE id = :id LIMIT 1';
    
         $statement = $this->conexion->prepare($consulta);

         $statement->execute(array(
          ':id' => $id,
          ));
           
          $resultado = $statement->fetch();
          $this->cerrarbd();        
          return $resultado;


      }

    function actualizarId(){


    }

    function borrarId(){



    }


}

?>