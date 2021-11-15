<?php
include_once "Modelo/modelo.php";
include_once "Controlador/RestUtils.php";

class controlador extends RestUtils{

protected $tb_user;
public $url;
protected $rest;
function __construct(){

    $this->tb_user= new UserModel();
    $this->url ="";
   // $this->rest = RestUtils::processRequest();

}

public function recibirdatos($url){

    $url_pet =$url[1] . '/' . $url[3] ;
    var_dump($url_pet);    

    switch ($url_pet){

        case 'confeccionesunoa/user':
            $this_rest = RestUtils::processRequest();
            print_r($this_rest->getData());
            
            //var_dump($this_rest);   
            break;
        case 'confecciones/registro':
            break;    

    }

}
public function setrest(){
    return $this->rest;
}

}
?>