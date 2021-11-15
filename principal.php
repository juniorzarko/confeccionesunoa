<?php
  

// Decodificamos la informacion que llega por javascript

  $json = file_get_contents('php://input',true); // Con este funcion recibimos los datos enviados de javascript
  $datos = json_decode($json,true);  // como los datos vienen en json se deben de codificar
 
  // Evaluamos la variable que  llega por POST
 
  if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST) || isset($datos) ) {
     
    // ingreso datos por html

     if (isset($_POST)){
         $conector->nombre_evento($_POST);
         
         
     }	

     // ingreso datos por javascript 

     if (isset($datos)){
         $conector->nombre_evento($datos);
         $vect=$conector->control_modulos();
      //  $vect=$conector->devolver_array_pag();
         var_dump($datos);
          $opcion=$vect;
         }
 
     $_POST = array ("");
 
 }
 
     // verifica si la variable opcion existe y si tiene datos sino los llena
 if (!isset($opcion)){
 
     $opcion=$conector->devolver_array_pag();
   //
 }	
 
 // Recibir informacion para mostar informes en la pagina principal. 
/*
session_start();


    if(isset($_SESSION['usuario'])){
        require 'frontend/rjprincipal-bootstrap.php';
    }else{
        header ('location: login.php');
    }
    
   */ 

?>