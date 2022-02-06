<?php
include_once 'Controlador/controlador.php';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}



$control = new controlador();

if(isset($_SESSION['usuario'])) {
  header('location: principal.php');
 }else if($_SERVER['REQUEST_URI']){

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $url = explode( '/', $url ); 
    
    $control->recibirdatos($url);
 }else{
    $error = '';

    

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingreso-Nomina-UNOA</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="iconos/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style1.css">
    
    
</head>
<body>
    
<div class="contenedor-form">
    <div class="header ">
        <div id="mensajes"></div>
        <div class="logo-title">
            <img src="img/confeccion.jpg" class="img-fluid img-thumbnail rounded-circle" alt="">
            <h2>Confecciones Uno A</h2>
        </div>
        <div class="menu">
            <a href=""><li class="line-li ">Entrar</li></a>
            <a href="#" onclick="registrar();" ><li class="line-li active">Registrarse</li></a>
        </div>
    </div>
    <div class="container" id="logueo" name="logueo" method="post">        
        <form class="form">
            <div class="welcome-form"><h2>Entrar al Sistema</h2></div>
            <div class="form-row mt-2">                          
                 <div class="input-group col-md-4 offset-4 ">
                    <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                        <use xlink:href="iconos/bootstrap-icons.svg#person-square"/>
                      </svg>
                    </span>
                    <div class="input-group-prepend  ">
                        <input type="text" class="form-control" id="log_usuario" -describedby="UsuarioHelp" placeholder="Usuario">
                    </div>
                 </div>             
            </div>
            <div class="form-row mt-2">
                <div class="input-group col-md-4 offset-4 ">
                        <svg class="bi text-primary mt-2 m-2  " width="16" height="16" fill="currentColor">
                            <use xlink:href="iconos/bootstrap-icons.svg#file-lock2-fill"/>
                        </svg>
                        <div class="input-group-prepend  ">
                                 <input type="password" class="form-control" id="log_password" -describedby="UsuarioHelp"   placeholder="Contraseña">                             
                        </div>
                </div>                   
            </div>  
            <div class="input-group col-md-12 ">                
                <button type="button" onclick="iniciarsesion();"  >Ingresar<svg class="bi text-white ml-3" width="32" height="32" fill="currentColor">
                   <use xlink:href="iconos/bootstrap-icons.svg#arrow-right-circle-fill"/>
                 </svg></button>                
            </div>       
            <div id="mensajes"></div>
        </form>
    </div>

    
    
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>
</body>
</html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 



 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 






