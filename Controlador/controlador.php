<?php
include_once "Controlador/RestUtils.php";
include_once "confecciones/api/servicios.php";


class controlador extends RestUtils{


public $url;
protected $rest;
protected $servUser;
public $sessionuser;
public $servlote;

function __construct(){

    $this->servUser=new servicios();
   // $this->sessionuser=new Sessionuser();
    $this->url ="";
   // $this->rest = RestUtils::processRequest();

}

public function recibirdatos($url){
    $url_pet='';
   
    $status = http_response_code();
    
    $tam= count($url);
           
    for ($i=3;$i<$tam;$i++){
      $url_pet .=$url[$i] . '/'  ;
     }
    
     /***
      * Evaluamos la API y llamamos el servicio correspondiente en nuestra clase servicios de cada tabla
      */
    
    switch ($url_pet){
                case 'confeccionesunoa':
                    
                    break;
                case 'user/registrar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                   
                    $this->servUser->insertarnuevo($datos);
                    RestUtils::sendResponse(204, json_encode("exitoso"), 'application/json');
                   
                    break;
                case 'user/ingresar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                   
                    // echo(RestUtils::getStatusCodeMessage($status));
                   
                   // $usuario = $datos->getUser();
                   // $contrasena = $datos->getClave();
                   // $contrasena = hash('sha512', $contrasena);

                    $resultado=$this->servUser->ingresarunoA($datos['usuario']);
                    
                    if ($resultado){
                        session_start();
                        $_SESSION['usuario']=$resultado['usuario'];
                        $_SESSION['estado']=$resultado['estado'];
                        $_SESSION['nombre']=$resultado['nombre'];
                        RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                        
                    }else{
                        //var_dump($resultado);
                        RestUtils::sendResponse(205, json_encode("Usuario no existe"), 'application/json');

                    }
                  
                   // print_r($datos['usuario']);
                    break; 
                    
                case 'lote/ingresar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $this->servlote->insertar($datos);
                 break;  

                 case 'lote/ingresar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $this->servlote->insertar($datos);
                 break;  
   



                default:{
                   // RestUtils::sendResponse(200,'', 'application/json');
                }
            }
  
}
public function setrest(){
    return $this->rest;
}

}
?>