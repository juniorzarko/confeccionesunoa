<?php

include_once "Controlador/RestUtils.php";
include_once "confecciones/api/servicios.php";
class controlador extends RestUtils{


public $url;
protected $rest;
protected $servUser;
function __construct(){

    $this->servUser=new servicios();
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
                    $resultado=$this->servUser->ingresarunoA($datos['usuario']);
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                   // print_r($datos['usuario']);
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