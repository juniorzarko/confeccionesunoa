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
    <!-- Custom styles for this template -->
    <link href="dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
     <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Confecciones Uno A</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
       <div class="navbar-nav">
       <div class="nav-item text-nowrap">
       <a class="nav-link px-3" href="#">Salir</a>
       </div>
       </div>
    </header>

    <div class="container-fluid"> 
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light sidebar collapse">
          <div class="container">
            <div class="position-sticky pt-3">
             <div class="row shadow  m-1 bg-transparent rounded">
             <h4 class="text-primary text-center "> Modulo Nomina</h4>	
              <div class="input-group">
                <span><svg class="bi text-primary mt-2 m-3" width="16" height="16" fill="currentColor">
                    <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                </span>                   
                <label for="Funcionario" class="border-bottom border-info  mt-2"> Hector Ivan Holguin Urrego</label>
               </div>
              <div class="input-group">
                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                  <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                </span>Operación: 
                  <label for="" class="border-bottom border-info  m-3 mt-1">Jeans</label>
                </div>
               <div class="input-group">
                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                  </svg></span>Nombre Lote: 
                <label for="" class="border-bottom border-info  m-3 mt-1">Lote  AO320</label>
                </div>
              <div class="input-group">
                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                <use xlink:href="iconos/bootstrap-icons.svg#calculator-fill"/>
               </svg></span>Cantidad Lote: 
               <label for="" class="border-bottom border-info  m-3 mt-1">400 Uds</label>
               </div>
              <div class="input-group">
                <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                <use xlink:href="iconos/bootstrap-icons.svg#calendar-date-fill"/>
                </svg>
                </span>Fecha inicio: 
                <label for="" class="border-bottom border-info  m-3 mt-1">15-12-2021</label>
               </div>
               <div class="input-group">
               <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                <use xlink:href="iconos/bootstrap-icons.svg#calendar-date-fill"/>
               </svg>
                </span>Fecha Corte: 
                <label for="" class="border-bottom border-info m-3 mt-1">15-12-2021</label>
                </div>
                </div>
               <div class="container shadow bg-transparent rounded  mt-3">
              <div class="btn-group d-grid gap-2 mt-2" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Administrador de Nomina
                  </button>
                  <ul class=" dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" onClick="desplegarusuarios1();"  href="#">Creación de Usuarios</a></li>
                    <li><a class="btn btn-link dropdown-item" onClick="desplegarlote1();" href="#">Creacion de Lotes</a></li>
                    <li><a class="btn btn-link dropdown-item" onClick="desplegaroperacion1();" href="#">Creacion de Operación</a></li>
                    <li><a class="btn btn-link dropdown-item" onClick="desplegaroperaciones1();" href="#">Modulo de Operaciones</a></li>
                  </ul>
               </div>
              <div class="btn-group d-grid gap-2 mt-3" role="group">
                   <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
               Procesos
                </button>
                  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
               <li><a class="dropdown-item" href="#">Inicio de Operacion</a></li>
               <li><a class="dropdown-item" href="#">Liquidaciones</a></li>
                <li><a class="dropdown-item" href="#">Trazabilidad</a></li>
              
               </ul>
               </div> 
            </div>
          </div>                  
        </nav>       
        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4"> 
          <div class="container">
            <nav class="navbar navbar-light bg-light">
              <form class="container-fluid justify-content-center d-grid-flex gap-2 d-md-block">
                <a><button class="btn btn-sm btn-outline-primary active" aria-current="page" type="button" href="" role="button" onClick="inicializarmod();">Inicio</button></a>
<<<<<<< HEAD
                <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-usuarios" aria-expanded="false" aria-controls="collapse-usuarios" onClick="desplegarusuarios2();">Operador</button>
                <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="collapse"  data-bs-target="#collapse-lotes" aria-expanded="false" aria-controls="collapse-lotes"  onClick="desplegarlote2();">Lotes</button>
                <button class="btn btn-sm btn-outline-primary" type="button">Operación</button>
                <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="collapse"  data-bs-target="#collapse-operaciones" aria-expanded="false" aria-controls="collapse-operaciones"  onClick="desplegaroperaciones2();">Modulo Operaciones</button>
                <button class="btn btn-sm btn-outline-primary" type="button">Inicio Operacion</button>
                <button class="btn btn-sm btn-outline-primary" type="button">Liquidaciones</button>
                <button class="btn btn-sm btn-outline-primary" type="button">Trazabilidad</button>
                </p>
                <div class="collapse" id="collapse-usuarios">
                   <div class="container">
                     <div  id="usuarios"></div>
                   </div>
                </div>
                <div class="collapse" id="collapse-lotes">
                   <div class="container">
                     <div  id="lotes"></div>
                   </div>
                </div>
                <div class="collapse" id="collapse-operaciones">
                   <div class="container" id="operaciones"></div>
                </div>

              </div>
            </div>
          </div>      
        </nav>
        <main class="col-md-9 col-lg-10 ms-sm-auto px-md-4">
          <section class="flex bg-primary" id="visualizar_form">



=======
                  <button class="btn btn-sm btn-outline-primary" type="button" onClick="desplegarusuarios2();">Operador</button>
                  <button class="btn btn-sm btn-outline-primary" type="button" onClick="desplegarlote2();">Lotes</button>
                  <button class="btn btn-sm btn-outline-primary" type="button" onClick="desplegaroperacion2();">Operación</button>
                  <button class="btn btn-sm btn-outline-primary" type="button" onClick="desplegaroperaciones2();">Modulo Operaciones</button>
                  <button class="btn btn-sm btn-outline-primary" type="button">Inicio Operacion</button>
                  <button class="btn btn-sm btn-outline-primary" type="button">Liquidaciones</button>
                  <button class="btn btn-sm btn-outline-primary" type="button">Trazabilidad</button>            
>>>>>>> e44719c5d0d9acd8b3953ba58a834d0e29674480
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
                <div class="" id="listar_contenidos">
                  
                </div>
          </div>
        </main>
      </div> 
      
    </div> 


            <script src="js/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="bootstrap/js/bootstrap.js"></script>          
           
            <script src="js/funciones.js"></script>
            <script src="js/oper_principal.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
          </body>
</html>
