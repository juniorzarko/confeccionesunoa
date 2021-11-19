v<?php
include_once "confecciones/sessionuser.php";
session_start();
if(isset($_SESSION['usuario']) == null) {
  header('location: index.php');
 }else if($_SERVER['REQUEST_URI']){

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $url = explode( '/', $url ); 
    
    //$control->recibirdatos($url);
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
    <link rel="stylesheet" href="css/bootstrap.min.css" >
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
         <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search" value="<?php print_r($resultado);?>">
          <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                     <a class="nav-link px-3" href="#">Salir</a>
            </div>
          </div>
  </header>
  <div class="container">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="row shadow  m-1 bg-transparent rounded">
                  <h4 class="text-primary text-center "> Modulo Nomina</h4>	
                  <div class="input-group">
                      <span><svg class="bi text-primary mt-2 m-3" width="16" height="16" fill="currentColor">
                          <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                      </span>                   
                      <label for="Funcionario" class="border-bottom border-info  mt-2" value=""><?php print_r($usuario);?></label>
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
                <div class="position-sticky  pt-3">
                   <ul class="nav flex-column">
                      <li class="nav-item">
                      <a class="nav-link active text-center" aria-current="page" href="#">
                       <h4> Administracion Nomina</h4>
                      </a>
                      </li>
                      <li class="nav-item">
                      <div class="input-group">
                       <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"         fill="currentColor"><use xlink:href="iconos/bootstrap-icons.svg#people"/>
                             </svg>
                       </span>Creacion Usuarios: 
             
                       <div class="input-group">
              <div class=""><span><svg class="bi text-primary mt-2 m-2" width="16" height="16"      fill="currentColor">
                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                 </svg></span>Creación de lotes 
              </div>
                  
            </div>
                      </li>
                      <li class="nav-item">
                         <div class="input-group">
                            <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"      fill="currentColor">
                             <use xlink:href="iconos/bootstrap-icons.svg#tools"/></svg>
                            </span>Creacion de Operación               
                         </div>
                      </li>
                      <li class="nav-item">
                        <div class="input-group">
                          <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"      fill="currentColor">
                           <use xlink:href="iconos/bootstrap-icons.svg#upc-scan"/>
                          </svg>
                          </span>Modulo de Operaciones
                        </div>
                      </li>
                   </ul>
                </div>    

                 <h4 class="text-primary text-center px-3 mt-2 mb-1 ">Procesos</h4>
                  <ul class="nav flex-column mb-2">
                  <li class="nav-item">
                    <div class="input-group">
                       <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"      fill="currentColor">
                       <use xlink:href="iconos/bootstrap-icons.svg#toggle2-on"/>
                        </svg>
                       </span>Inicio de Proceso                
                   </div>
                  </li>
        
                  <li class="nav-item">
            <div class="input-group">
              <div class=""><span><svg class="bi text-primary mt-2 m-2" width="16" height="16"      fill="currentColor">
                <use xlink:href="iconos/bootstrap-icons.svg#vector-pen"/>
                 </svg></span>Liquidaciones
              </div>
                 
            </div>
                  </li>
                  <li class="nav-item">
            <div class="input-group">
              <div class=""><span><svg class="bi text-primary mt-2 m-2" width="16" height="16"      fill="currentColor">
                <use xlink:href="iconos/bootstrap-icons.svg#vinyl-fill"/>
                 </svg></span>Trazabilidad
              </div>
                 
            </div>
                  </li>
                  </ul>
      </nav>
  </div>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2        mb-3       border-bottom">
        <h1 class="h2">Procedimientos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"      fill="currentColor">
              <use xlink:href="iconos/bootstrap-icons.svg#stack-overflow"/>
               </svg></span>
            Informes Quincenales
          </button>
        </div>
      </div>
      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
  </main>
  

  <script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/funciones.js"></script>
<script src="js/oper_principal.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
