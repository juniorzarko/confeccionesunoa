<?php
include_once "Controlador/RestUtils.php";
include_once "confecciones/api/servicios.php";
include_once "confecciones/api/serviciosOperario.php";
include_once "confecciones/api/servicioslote.php";
include_once "confecciones/api/ServiciosOperaciones.php";
include_once "confecciones/api/ServiciosOperacion.php";

class controlador extends RestUtils{


public $url;
protected $rest;
protected $servUser;
public $sessionuser;
public $servlote;
public $servOperario;
public $servOperacion;
public $servOperaciones;
public $msj;

function __construct(){
    $this->msj="";
    $this->servUser=new servicios();
    $this->servOperario= new serviciosOperario();
    $this->servlote = new ServiciosLote();
    $this->servOperacion = new ServiciosOperacion();
    $this->servOperaciones = new ServiciosOperaciones();
    $this->url ="";
   

}

public function recibirdatos($url){
    $id='';
   
    $status = http_response_code();
    
    if ($url=="")
     return null;
     
    $tam=count($url);
    $url_pet="";

     switch ($tam){
         case '5':
             $url_pet =$url[$tam-2].'/';
             $url_pet .=$url[$tam-1].'/';
             
             break;
         
         case '6':
             $id=$url[$tam-1]; 
             $url_pet =$url[$tam-3].'/';
             $url_pet .=$url[$tam-2].'/';
             
             break;
     }
    
 
    switch ($url_pet){
                case 'confeccionesunoa//':
                    
                break;
                
                case 'confeccionesunoa/principal.php/':
                    
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
                    $resultado=$this->servUser->ingresarunoA($datos['usuario']);
                    
                    if ($resultado){
                        session_start();
                        $_SESSION['usuario']=$resultado['usuario'];
                        $_SESSION['estado']=$resultado['estado'];
                        $_SESSION['nombre']=$resultado['nombre'];
                        RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                        
                    }else{
                     
                        RestUtils::sendResponse(205, json_encode("Usuario no existe"), 'application/json');

                    }
                    break; 
                    
                case 'lote/registrar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                  //  print_r($datos);
                    $this->servlote->insertar($datos);
                 break;  
                 
                 case 'lote/listar/':
                    
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servlote->getAll();
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                 break; 
                
                 case 'lote/buscarxid/':
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servlote->buscarxIdlote($id);
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                 break;
                 case 'lote/actualizar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $resultado=$this->servlote->actualizarRegistro($datos,$id);
                    RestUtils::sendResponse(http_response_code(202), json_encode($resultado), 'application/json');
                 break;   
                 
                 case 'lote/eliminar/':
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servlote->eliminarxid($id);
                   // var_dump($resultado);
                      RestUtils::sendResponse(http_response_code(204), json_encode($resultado), 'application/json');
                 break; 
                 case 'Operario/registrar/': 
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $this->servOperario->insertar($datos);
                    RestUtils::sendResponse(204, json_encode($datos), 'application/json');
                 break;  

                 case 'Operario/listar/':
                    $this->setMsj($url_pet);
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servOperario->getAll();
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                 break; 

                 case 'Operario/buscarxid/':
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servOperario->buscarId($id);
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                 break; 

                 case 'Operario/actualizar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $resultado=$this->servOperario->actualizarRegistro($datos,$id);
                    RestUtils::sendResponse(http_response_code(202), json_encode($resultado), 'application/json');
                 break; 
                 case 'Operario/eliminar/':
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servOperario->eliminar($id);
                   // var_dump($resultado);
                      RestUtils::sendResponse(http_response_code(204), json_encode($resultado), 'application/json');
                 break;
                  
                 /**MODULOS OPERACIONES */

                 
                 case 'operaciones/registrar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $this->servOperaciones->insertar($datos);
                    RestUtils::sendResponse(204, json_encode("exitoso"), 'application/json');
                 break;  
                 
                 case 'operaciones/listar/':
                    
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servOperaciones->getAll();
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                 break; 
                
                 case 'operaciones/buscarxid/':
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servOperaciones->buscarxId($id);
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                 break;
                 case 'operaciones/actualizar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $resultado=$this->servOperaciones->actualizarRegistro($datos,$id);
                    RestUtils::sendResponse(http_response_code(202), json_encode($resultado), 'application/json');
                 break;   
                 
                 case 'operaciones/eliminar/':
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servOperaciones->eliminarxid($id);
                   // var_dump($resultado);
                      RestUtils::sendResponse(http_response_code(204), json_encode($resultado), 'application/json');
                 break; 

                 /*** API-CRUD PARA CONTROLAR OPERACION */
                 case 'operacion/registrar/':
                    $this_rest = RestUtils::processRequest();
                    $datos=$this_rest->getData();
                    $resultado=$this->servOperacion->insertar($datos);
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                 break;  
                 case 'operacion/listar/':
                   
                    $this->setMsj($url_pet);
                    $this_rest = RestUtils::processRequest();
                    $resultado=$this->servOperacion->getAll();
                    RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                    
                 break; 

                 case 'operacion/editar':
                  $this_rest = RestUtils::processRequest();
                  $resultado=$this->servOperacion->buscarId($id);
                  RestUtils::sendResponse(http_response_code(), json_encode($resultado), 'application/json');
                  break;




                default:{
                 
                  $this->setMsj($url_pet);
                   
                }
            }
        
  
            }

            public function formarurl($url){
                $resp=[];
                $tam=count($url);
                $url_pet="";

                switch ($tam){
                    case '5':
                        $url_pet =$url[$tam-2].'/';
                        $url_pet .=$url[$tam-1].'/';
                        
                        break;
                    
                    case '6':
                        $id=$url[$tam-1]; 
                        $url_pet =$url[$tam-3].'/';
                        $url_pet .=$url[$tam-2].'/';
                        
                        break;


                }
                
                return ($url_pet);
            }
            /**
             * Get the value of msj
             */
            public function getMsj()
            {
            return $this->msj;
            }

            /**
             * Set the value of msj
             *
             * @return self
             */
            public function setMsj($msj)
            {
            $this->msj = $msj;

           // return $this->msj;
            }
}
?>