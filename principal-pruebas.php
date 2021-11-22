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

    <div class="container" id="registro" name="registro">
                     
                     <form class=" form border-radius"  id="for_registro" method="post" >
                                     <div class="row">
                                     <div class="welcome-form col-12 text-center"><h2>Creaccion de Usuarios</h2></div>
                                     </div>
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
                                     <div class="row mt-2">                          
                                         <div class=" input-group input-group-addon col-6" id="">                        
                                             <div class="input-group-prepand">
                                                 <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                                     <use xlink:href="iconos/bootstrap-icons.svg#person-square"/>
                                                   </svg>
                                                 </span> 
                                             </div>				
                                                 <input name="" type="text" class="form-control" id="reg_usuario" placeholder="Usuario"></input>
                                             
                                         </div>
                                         <div class=" input-group input-group-addon col-6" id="">                        
                                             <div class="input-group-prepand">
                                                 <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                                     <use xlink:href="iconos/bootstrap-icons.svg#fingerprint"/>
                                                   </svg>
                                                 </span> 
                                             </div>				
                                                 <input name="" type="number" class="form-control" id="cedula" placeholder="Cedula"></input>
                                             
                                         </div>                                 
                                     </div>
                                     <div class="row mt-2">                          
                                         <div class=" input-group input-group-addon col-4" id="">                        
                                             <div class="input-group-prepand">
                                                 <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                                     <use xlink:href="iconos/bootstrap-icons.svg#geo-alt-fill"/>
                                                   </svg>
                                                 </span> 
                                             </div>				
                                                 <input name="" type="text" class="form-control" id="direccion" placeholder="Dirección"></input>
                                             
                                         </div>
                                         <div class=" input-group input-group-addon col-4" id="">                        
                                             <div class="input-group-prepand">
                                                 <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                                     <use xlink:href="iconos/bootstrap-icons.svg#phone-fill"/>
                                                   </svg>
                                                 </span> 
                                             </div>				
                                                 <input name="" type="number" class="form-control" id="telefono" placeholder="Telefono"></input>
                                             
                                         </div>
                                         <div class=" input-group input-group-addon col-4" id="">                        
                                             <div class="input-group-prepand">
                                                 <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                                     <use xlink:href="iconos/bootstrap-icons.svg#person-lines-fill"/>
                                                   </svg>
                                                 </span> 
                                             </div>				
                                                 <input name="" type="text" class="form-control" id="cargo" placeholder="Cargo"></input>
                                             
                                         </div>                                 
                                     </div>
                                     <div class="row mt-2">                          
                                         <div class=" input-group input-group-addon col-4" id="">                        
                                             <div class="input-group-prepand">
                                                 <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                                     <use xlink:href="iconos/bootstrap-icons.svg#envelope-check-fill"/>
                                                   </svg>
                                                 </span> 
                                             </div>				
                                                 <input name="" type="email" class="form-control" id="email" placeholder="Correo Electronico"></input>
                                             
                                         </div>
                                         <div class=" input-group input-group-addon col-4" id="">                        
                                             <div class="input-group-prepand">
                                                 <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                                     <use xlink:href="iconos/bootstrap-icons.svg#file-lock2-fill"/>
                                                   </svg>
                                                 </span> 
                                             </div>				
                                                 <input name="" type="password" class="form-control" id="clave" placeholder="Contraseña"></input>
                                             
                                         </div>
                                         <div class=" input-group input-group-addon col-4" id="">                        
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
                                         <div class="input-group col-4 ">                
                                             <button type="button">Registrarse<svg class="bi text-white ml-3" width="32" onclick="registrarusuario();" height="32"     fill="currentColor">
                                                <use xlink:href="iconos/bootstrap-icons.svg#folder-symlink-fill"/>
                                              </svg></button>                
                                         </div>       
                                         <div class="input-group col-4 ">                
                                             <button type="button">Actualizar<svg class="bi text-white ml-3" width="32" height="32"     fill="currentColor">
                                                <use xlink:href="iconos/bootstrap-icons.svg#bootstrap-reboot"/>
                                              </svg></button>                
                                         </div>       
                                         <div class="input-group col-4 ">                
                                             <button type="button">Eliminar<svg class="bi text-white ml-3" onclick="" width="32" height="32"     fill="currentColor">
                                                <use xlink:href="iconos/bootstrap-icons.svg#x-circle-fill"/>
                                              </svg></button>                
                                         </div>                                
                                     </div>
                                 </form>
                          </div>
                    
                 
                 </div>