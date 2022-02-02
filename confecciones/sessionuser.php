<?php

class Sessionuser{

    function __constructor(){


    }
public function crearsessionuser(){

    if ($resultado){
       // session_start();
        $_SESSION['usuario']=$usuario;
        print_r($_SESSION['usuario']);
        session_name($usuario);
       
  
  
  
      }



}


}




?>