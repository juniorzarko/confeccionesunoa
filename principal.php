<?php
include_once "confecciones/sessionuser.php";
include_once "Controlador/controlador.php";
session_start();
$control = new controlador();
if(isset($_SESSION['usuario']) == null) {
  header('location: index.php');
 }else if($_SERVER['REQUEST_URI']){

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $url = explode( '/', $url ); 
    
    $control->recibirdatos($url);
 }else{
    $error = '';
 }
$usuario=$_SESSION['usuario'];
$resultado = $_SESSION;

?>


<!doctype html>
<html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Confecciones Uno A</title>   
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.css" >
        <link rel="stylesheet" href="iconos/bootstrap-icons.css">   
        <!-- Custom styles for this template -->
          <link href="css/dashboard.css" rel="stylesheet">
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
        <nav id="sidebarMenu" class="col-md-3  col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="container">
            <div class="position-sticky pt-3">
              <div class="row shadow  m-1 bg-transparent rounded">
                <h4 class="text-primary text-center "> Modulo Nomina</h4>	
                  <div class="input-group">
                      <span><svg class="bi text-primary mt-2 m-3" width="16" height="16" fill="currentColor">
                          <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                      </span>                   
                      <label for="Funcionario" class="border-bottom border-info  mt-2"> <?php print_r($usuario); ?></label>
                  </div>
                  <div class="input-group">
                    <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
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
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="#">Creación de Usuarios</a></li>
                      <li><a class="dropdown-item" href="#">Creacion de Lotes</a></li>
                      <li><a class="dropdown-item" href="#">Creacion de Operación</a></li>
                      <li><a class="dropdown-item" href="#">Modulo de Operaciones</a></li>
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
          </div>      
        </nav>
        <main class="flex col-md-9  col-lg-10 ms-sm-auto px-md-4">
          <section class="col bg-primary" id="visualizar_form">


          </section>


        
      
      
      
        </main>



        
      </div>    
    </div>


            <script src="js/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="js/bootstrap.js"></script>          
           
            <script src="js/funciones.js"></script>
            <script src="js/oper_principal.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
           como hago l copiaseleccione todo y lo pega en una carpeta pero ya cono alcanzo dame 10 min, lo espero entonces si ya le escrubo biec
    </body>
</html>
