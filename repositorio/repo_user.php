<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

class rep_user extends conexionDB{

public function consulta_login($usuario,$contrasena){
    $consulta = 'SELECT * FROM tb_usuarios WHERE usuario = :usuario AND contrasena = :contrasena';
    
    $statement = $this->conexion->prepare($consulta);

    $statement->execute(array(
        ':usuario' => $usuario,
        ':contrasena' => $contrasena
    
    ));
        
    $resultado = $statement->fetch();
    $this->cerrarbd();    
    return $resultado;

  }

  public function consulta_registro($usuario){
    $consulta = 'SELECT * FROM tb_usuarios WHERE usuario = :usuario LIMIT 1';
    
    $statement = $this->conexion->prepare($consulta);

    $statement->execute(array(
        ':usuario' => $usuario,
    ));
        
    $resultado = $statement->fetch();
    $this->cerrarbd();        
    return $resultado;

  }

  public function insertarenbdregistro($registrousuario){
    //$place_holders = implode(',', array_fill(0, count($registrousuario), '?')); // convierte una cadena en texto para la consulta con la funcion implode
       
    $statement = $this->conexion->prepare("INSERT INTO tb_usuarios (id,nombre,usuario,clave,email,estado) VALUES (:id,:nombre, :usuario ,:clave, :email, :estado)");
   
    $result=$statement->execute((array)$registrousuario);
    //$resultado = $statement->fetchall();
    
   
    
    if ($result)
      return true;


  }

  public function consul_ac_campos(){

    $statement = $this->conexion->prepare("SELECT table_name AS nombre
    FROM information_schema.tables WHERE table_schema = 'bd_ProcesosRJ';");
    $statement->execute();
    $contenido= $statement->fetchall();        
    return $contenido;

   }

   public function consultas_por_tablas($nombretabla){
    
    $sentencia="SELECT COLUMN_NAME as campos from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME = "."'".$nombretabla."'" ;
    $campos= $this->conexion->prepare($sentencia);
  //  var_dump( $campos); 
    $resultado=$campos->execute();     
    $contenido=  $campos->fetchall(); 
  //  var_dump( $contenido);
    $vec_colu=array();
    foreach ($contenido as $columna){
            $vec_colu[$columna['campos']]=" ";
     
          }

   array_splice($vec_colu,0,1);

    return $vec_colu;
 
   }


function insertardatosentablas($nombretabla,$datos,$camposbd){

$campos_preparados=" ";
$valores_preparados="";

$campos_preparados.=implode(",",array_keys($camposbd));
$cantcamposnull=count($camposbd) - count($datos);

foreach ($datos as &$dato) {
 
  if ($dato === '')
    $dato = 0; 
  }

$valores_preparados.="'".implode("','",$datos)."'"; 


if ($cantcamposnull != 0)
{
    for ($i=1; $i<=$cantcamposnull;$i++)
        $valores_preparados .= ',NULL'; 

 
}

try{
  //$place_holders = implode(',', array_fill(0, count($registrousuario), '?'));
  $sentencia = " INSERT INTO $nombretabla ($campos_preparados) VALUES ( $valores_preparados)";
 
  $statement = $this->conexion->prepare($sentencia);
  $result=$statement->execute($datos);   
  
}catch(PDOException $prueba_error){

  echo "Error: " . $prueba_error->getMessage();
 
}

 return $result;
}


function consulta_selector($nombretabla){

try{
 
  $sentencia = " SELECT * FROM ".$nombretabla;

  $statement = $this->conexion->prepare($sentencia);
  $result=$statement->execute();   
  
}catch(PDOException $prueba_error){
  
  echo "Error: " . $prueba_error->getMessage();

}

$contenido=  $statement->fetchall(); 

 return $contenido;

}


function informeac($nombretabla="tb_aconstitucionales"){

try{
 
  $sentencia = " SELECT tipo_proceso,accionante,accionado,fecha_ingreso,fecha_remision FROM ".$nombretabla;

  $statement = $this->conexion->prepare($sentencia);
  $result=$statement->execute();   
  
}catch(PDOException $prueba_error){
  
  echo "Error: " . $prueba_error->getMessage();

}

$contenido=  $statement->fetchall(); 

 return $contenido;


}

}


?>