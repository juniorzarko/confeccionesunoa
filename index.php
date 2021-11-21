<?php
include_once 'Controlador/controlador.php';

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

    <div class="container" id="registro" name="registro">
                        
        <div class="row ">
            <div class="col-md-12 ">
                <form class=" form-horizontal border-radius  form"  id="for_registro" method="post" >
                    <div class="welcome-form"><h2>Creaccion de Usuarios</h2></div>
                    <div class="form-row d-flex flex-row-reverse">
                        
                            <div class="px-5 bd-highlight ">
                                <input class="form-check-input" type="radio" name="Rb_inactivo" id="inactivo" value="inactivo" >
                               <label class="form-check-label" for="exampleRadios1">
                                   Inactivo
                               </label>
                            </div>
                            <div class="px-1  bd-highlight">
                                 <input class="form-check-input" type="radio" name="Rb_activo" id="activo" value="activo "checked>
                                <label class="form-check-label" for="exampleRadios2">
                                 Activo
                                  </label>
                            </div>
                        
                    </div>
                    <div class="form-row mt-2">                          
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#gear-fill"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="hidden" class="form-control" id="cod_operador" placeholder="Cod. Operador"></input>
                            
                        </div>
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#person-square"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="text" class="form-control" id="reg_usuario" placeholder="Usuario"></input>
                            
                        </div>
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#fingerprint"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="number" class="form-control" id="cedula" placeholder="Cedula"></input>
                            
                        </div>                                 
                    </div>
                    <div class="form-row mt-2">                          
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#geo-alt-fill"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="text" class="form-control" id="direccion" placeholder="Dirección"></input>
                            
                        </div>
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#phone-fill"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="number" class="form-control" id="telefono" placeholder="Telefono"></input>
                            
                        </div>
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#person-lines-fill"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="text" class="form-control" id="cargo" placeholder="Cargo"></input>
                            
                        </div>                                 
                    </div>
                    <div class="form-row mt-2">                          
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#envelope-check-fill"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="email" class="form-control" id="email" placeholder="Correo Electronico"></input>
                            
                        </div>
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#file-lock2-fill"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="password" class="form-control" id="clave" placeholder="Contraseña"></input>
                            
                        </div>
                        <div class=" input-group input-group-addon col-md-4" id="">                        
                            <div class="input-group-prepand">
                                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#file-lock2-fill"/>
                                  </svg>
                                </span> 
                            </div>				
                                <input name="" type="password" class="form-control" id="" placeholder="Confirmar Contraseña"></input>
                            
                        </div>                                 
                    </div>
                    <div class="form-row mt-4">                          
                        <div class="input-group col-md-4 ">                
                            <button type="button">Registrarse<svg class="bi text-white ml-3" width="32" onclick="registrarusuario();" height="32"     fill="currentColor">
                               <use xlink:href="iconos/bootstrap-icons.svg#folder-symlink-fill"/>
                             </svg></button>                
                        </div>       
                        <div class="input-group col-md-4 ">                
                            <button type="button">Actualizar<svg class="bi text-white ml-3" width="32" height="32"     fill="currentColor">
                               <use xlink:href="iconos/bootstrap-icons.svg#bootstrap-reboot"/>
                             </svg></button>                
                        </div>       
                        <div class="input-group col-md-4 ">                
                            <button type="button">Eliminar<svg class="bi text-white ml-3" onclick="" width="32" height="32"     fill="currentColor">
                               <use xlink:href="iconos/bootstrap-icons.svg#x-circle-fill"/>
                             </svg></button>                
                        </div>                                
                    </div>
                </form>
            </div>
         </div>
    </div>



</div>
    
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>
</body>
</html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 



 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 






