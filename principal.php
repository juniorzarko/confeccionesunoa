<?php
include_once 'Controlador/controlador.php';

/***
 * 
 * CORS
 * 
 */

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

/**** */

$control = new controlador();

if(isset($_SESSION['usuario'])) {
  header('location: principal.php');
 }

 if($_SERVER['REQUEST_URI']){

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $url = explode( '/', $url ); 
    
    if (!$control->recibirdatos($url))
         $msj=$control->formarurl($url);
    
    //$msj=$control->formarurl($url);
   // print_r($url);
 }else{
   

 }
 
 function isAjax(){
  return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Confeccioes Uno A</title>    
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">     
    <!-- Custom styles for this template -->
    <link href="dashboard/dashboard.css" rel="stylesheet">
    <link href="css/estilos1.css" rel="stylesheet"> 
    <link href="css/gsap.css" rel="stylesheet">
  </head>
  <body>
      <!-- Cabecera principal de Informacion -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
     <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Confecciones Uno A</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" id="mensaje" value="<?php print_r($msj); ?>" aria-label="Search">
       <div class="navbar-nav">
       <div class="nav-item text-nowrap">
       <a class="nav-link px-3" href="#">Salir</a>
       </div>
       </div>
    </header>
    <div class="container-fluid"> 
      <div class="row">
        <!-- Cuadro de Informacion Barra Lateral y menu vertical -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light sidebar collapse">
          <div class="container">
            <!-- contenedor de imagen y informacion -->
            <div class="position-sticky pt-3">
              <div class="row shadow  m-1 bg-transparent rounded">
               <h4 class="text-primary text-center "> Confecciones Uno A</h4>	
                  <div class="d-flex justify-content-center ">
                    <div class="logo-title">
                        <img src="img/confeccion.jpg" class="img-fluid img-thumbnail rounded-circle ima-1" alt="Confecciones Uno A">                        
                    </div>
                  </div>
                  <!-- Label de informacion usuario  -->
                  <div class="input-group">
                    <span><svg class="bi text-primary mt-2 m-3" width="16" height="16" fill="currentColor">
                    <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                    </span>                   
                    <label for="Funcionario" class="border-bottom border-info  mt-2"> Hector Ivan Holguin Urrego</label>
                  </div>
                  <div class="input-group">
                     <span><svg class="bi text-primary mt-2 m-3" width="16" height="16"  fill="currentColor">
                     <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                     </span> 
                     <label for="" class="border-bottom border-info  m-2 mt-1">Jefe de Bodega</label>
                  </div>
              </div>
            </div> 
              <!-- Menu Administrativo y salida -->
             <div class="container shadow bg-transparent rounded  mt-3">
             <div class="d-grid">
                <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary" onClick="inicio-general();">Inicio General

                </button>
             </div> 
              <div class="btn-group d-grid gap-2 mt-2" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Administración
                  </button>
                  <ul class=" dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" onClick="desplegarusuarios1();"  href="#">Creación de Usuarios</a></li>
                    <li><a class="btn btn-link dropdown-item" onClick="" href="#">Salir</a></li>
                  </ul>
               </div>
              <div class="btn-group d-grid gap-2 mt-3" role="group">
                   <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
               Modulos del Sistema
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                     <li><a class="dropdown-item" href="#" onClick=" ir_a_pagnomina();">Nomina</a></li>
                     <li><a class="dropdown-item" href="#" onClick="ir_a_pageinventarios();">Inventarios</a></li>
                    <li><a class="dropdown-item" href="#" onClick="ir_a_pagefacturacion();">Facturación</a></li>              
                </ul>
               </div> 
             </div>
          </div>                  
        </nav>  
        <div class="" id="consolaphp">
      

      </div>     
        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4"> 
          <div class="container">
            <!-- Menu Horizontal de Trabajo en Principal -->
            <nav class="navbar navbar-light bg-light">
              <form class="container-fluid justify-content-center d-grid-flex gap-2 d-md-block">
                <a><button class="btn btn-sm btn-outline-primary btn-1 active" aria-current="page" type="button" href="" role="button" onClick="inicializarmod();">Inicio</button></a>
                  <button class="btn btn-sm btn-outline-primary btn-2" type="button" onClick="desplegarusuarios2();">Operador</button>
                  <button class="btn btn-sm btn-outline-primary btn-3" type="button" onClick="desplegarlote2();">Lotes</button>
                  <button class="btn btn-sm btn-outline-primary btn-4" type="button" onClick="desplegaroperacion2();">Operación</button>
                  <button class="btn btn-sm btn-outline-primary btn-5" type="button" onClick="desplegaroperaciones2();">Procesos</button>
                  <button class="btn btn-sm btn-outline-primary btn-6" type="button" onClick="procesosLotes1();">Procesos de Lotes</button>
                  <button class="btn btn-sm btn-outline-primary btn-7" type="button">Liquidaciones</button>
                  <button class="btn btn-sm btn-outline-primary btn-8" type="button">Trazabilidad</button>            
              </form>
            </nav>    
         
                <div class="row justify-content-md-center">
                  <!-- <div class="col col-lg-2" id="idInformacion1">
                    
                  </div> -->
                  <div class="col-auto" id="idPrincipal">
                   <div class="container">

                          
                   
                     Div de Trabajo
                   </div>
                  </div>
                  <!-- <div class="col col-lg-2" id="idInformacion2">
                
                  </div> -->
                </div>
                <div class="" id="listar_contenidos"></div>
          </div>
        </main>
      </div>       
    </div> 

      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"       integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src ="gsap-public/minified/gsap.min.js" > </script>    
      <script src="js/funcionesOperario.js"></script>  
      <script src="js/funcionesLotes.js"></script>
      <script src="js/oper_principal.js"></script>
      <script src="js/gsap.js"></script>      
      <script src="bootstrap/js/bootstrap.js"></script>

  </body>
</html>