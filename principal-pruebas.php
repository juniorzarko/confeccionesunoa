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

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center    pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Procedimientos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <div class="btn-group" role="group">
                 <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                   Dropdown
                 </button>
                 <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                   <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                   <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                 </ul>
              </div>
        </div>
      </div>  
       
      <div class="container  ">
         <form class="row gx-3 gy-2 align-items-end">
           <h4>Creacion de Lotes</h4>
              <div class="col-sm-6">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-text">Codigo Lote</div>
                         <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="# Lote">
                   </div>
                 </div>
              <div class="col-sm-6">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                  <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Nombre">
                </div>
              </div>


              <div class="col-sm-6">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-text">Cantidad</div>
                  <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Cantidad">
                </div>
            </div>

              <div class="col-sm-6">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-text">Fecha: </div>
                  <input type="date" class="form-control" id="specificSizeInputGroupUsername" placeholder="">
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
         </form>
      </div>
      <div class="container mt-3 ">
        <form class="row gx-3 gy-2 align-items-end">
          <h4>Creacion de Operación</h4>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">Fecha de Operación</div>
         <input type="date" class="form-control" id="specificSizeInputGroupUsername" placeholder="">
       </div>
     </div>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">Nombre</div>
         <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Nombre">
       </div>
     </div>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">Costo</div>
         <input type="number" class="form-control" id="specificSizeInputGroupUsername" placeholder="Costo de Operación">
       </div>
     </div>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">Unidades: </div>
         <input type="number" class="form-control" id="specificSizeInputGroupUsername" placeholder="Unidades">
       </div>
     </div>
     <div class="col-sm-6">
      <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-text">modulo</div>
        <input type="text" class="form-control" id="specificSizeInputGroupUsername" >
      </div>
    </div>
    <div class="col-sm-6">
      <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-text">Tiempo: </div>
        <input type="time" class="form-control" id="specificSizeInputGroupUsername" placeholder="Unidades">
      </div>
    </div>
     <div class="col-auto">
       <button type="submit" class="btn btn-primary">Submit</button>
     </div>
        </form>
     </div>
      <div class="container mt-3 ">
        <form class="row gx-3 gy-2 align-items-end">
          <h4>Creacion de Operadores</h4>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">Nombre</div>
         <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Nombre">
       </div>
     </div>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">Apellido</div>
         <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Apellido">
       </div>
     </div>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">Dirección</div>
         <input type="Dirección" class="form-control" id="specificSizeInputGroupUsername" placeholder="Dirección">
       </div>
     </div>
     <div class="col-sm-6">
       <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
       <div class="input-group">
         <div class="input-group-text">telefono: </div>
         <input type="number" class="form-control" id="specificSizeInputGroupUsername" placeholder="Telefono">
       </div>
     </div>
     <div class="col-sm-6">
      <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-text">Cargo</div>
        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Cargo">
      </div>
    </div>
    <div class="col-sm-6">
      <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-text">Email: </div>
        <input type="email" class="form-control" id="specificSizeInputGroupUsername" placeholder="Email">
      </div>
    </div>
     <div class="col-auto">
       <button type="submit" class="btn btn-primary">Submit</button>
     </div>
        </form>
     </div>
       <br>
      <h2>Informes</h2>
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

