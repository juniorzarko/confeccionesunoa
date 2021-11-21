<?php 

Abstract class conexionDB{
  protected $usuariobd;
  protected $contrasena;
  protected $basedatos=[];
  protected $servidor;
  protected  $conexion;
  public static $cont;
  
      function __construct()
        {
          $this->usuariobd='userunoa';
          $this->contrasena='kikitanflo';
          $this->basedatos[1]='bd_confeccionesunoa';  //$_POST["db"];
        
        }
       
        function conexionDB($usuario,$contrasena,$basedatos)
        {
          $this->usuariobd=$usuario;
          $this->contrasena=$contrasena;
          $this->basedatos[1]=$basedatos;  //$_POST["db"];
        
        }

  
    protected function conectandobd($numbd){
    
     
    $dsn = 'mysql:host=localhost;dbname='.$this->basedatos[$numbd];
   
    try{
      $this->conexion = new PDO($dsn,$this->usuariobd,$this->contrasena);
      $this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      }catch(PDOException $prueba_error){
          echo "Error: " . $prueba_error->getMessage();
          return  false;
      }
   
      return true;

      
      
     }


     
    public function iniconexionbd($numbd){

       $result=$this->conectandobd($numbd);
       return $result; 
    }



     public function seleccionbd($numbd){

       if($numbd=='1')
         $this->conexion->query("use ".$this->basedatos[$numbd]);
       if ($numbd=='2') {
        $this->conexion->query("use ".$this->basedatos[$numbd]);
      
           
      } 

      //return $this->conexion->
     }

     public function cerrarbd(){

        $this->conexion = null;

     }

     function getUsuario(){
       return $this->usuariobd;

     }
     
     function setUsuario($usuario){
      $this->usuariobd=$usuario;

    }




/*    *****METODOS PARA MANEJO DE LLENADO DE TABLAS BASE PARA EL  USO DE LA PLATAFORA

     Consultar campos de las tablas

*/
 


     
}


?>
