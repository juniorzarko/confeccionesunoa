  <div class="container">
  
    <!-- Boton modal lote -->
    <div class="">  
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Selecciones el lote a trabajar</button>
          <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                   <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Procesamiento de Lotes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                   <div class="modal-body">
                        <div class="form-floating">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Seleccionar Lote</option>
                            <option value="1">1815</option>
                          </select>
                          <label for="floatingSelect">Selecciona el lote a Trabajar</label>
                        </div>
                    </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                     <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>     
        </div>
    </div>

    <!-- formulario de entrada de datos proceso lotes -->
    <div class="container flex p-2 shadow bg-transparent rounded">
      <form class="needs-validation novalidate gx-3 ">
        <div class="col-md-12"> <h2 class="text-center">Entrada de Datos</h2></div> 
        <div class="row"> 
            <div class="col-md-5 mx-auto mt-2 ">
                <div class="input-group">
                 <div class="input-group-text">Proceso:</div>
                  <select class="form-select form-select-sm" requiered aria-label=".form-select-sm example">
                      <option selected>Seleccione el Proceso</option>
                      <option value="1">Presentación</option>
                      <option value="2">Delantero<e/option>
                      <option value="3">Trasero</option>
                      <option value="4">Pretinas</option>
                      <option value="5">Pasadores</option>
                  </select>
                  <div class="invalid-feedback">Ingrese un mensaje de texto</div>
                </div>
            </div>
            <div class="col-md-5 mx-auto  mt-2">
                <div class="input-group">
                  <div class="input-group-text">Operacion</div>
                    <select class="form-select form-select-sm" requiered aria-label=".form-select-sm example">
                      <option selected>Seleccione la Operación</option>
                      <option value="1">Ojalar</option>    
                      <option value="2">Prender Garra</option>                      
                    </select>  
                </div>
              </div> 
            </div> 
        <div class="row">   
          <div class="col-md-5 mx-auto mt-2">
            <div class="input-group">
              <div class="input-group-text">Cod. Operador:
              </div>
                  <input type="number" class="form-control is-valid" requiered id="" placeholder="">
                  <div class="valid-feedback">Codigo Aceptado!</div>
            </div>
          </div>         
          <div class="col-md-5 mx-auto mt-2">
              <div class="input-group">
                  <div class="input-group-text">
                   Unidades X Día
                  </div>
                  <input type="number" class="form-control" id="cantidad" placeholder="">
                  <div class="valid-feedback">
                     Numero Aceptado
                  </div>
              </div>
          </div>         
        </div>        
      </form>
      <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" type="button">Editar</button>
          <button class="btn btn-sm btn-outline-primary mx-3" type="button">Eliminar</button>
          <button class="btn btn-sm btn-outline-primary" type="button">Guardar</button>
        </form>
      </nav>
    </div>
    <!-- Modulo de Visualizacion -->
    <div class="container">
      <div class="row ">
        <div class="col-auto">
          <div class="input-group">
              <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
              <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
              </span>                   
              <label for="Funcionario" class="border-bottom border-info  mt-2"> Hector Ivan Holguin Urrego </label>
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group">
            <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
            <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
            </span>
            <label for="" class="border-bottom border-info  m-3 mt-1">Jeans</label>
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group">
            <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
            <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
            </svg></span>
            <label for="" class="border-bottom border-info  m-3 mt-1">Lote  AO320</label>                       
          </div>                
        </div>
      </div>               
      <div class="row">
        <div class="col-auto">
          <div class="input-group">
            <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
            <use xlink:href="iconos/bootstrap-icons.svg#calculator-fill"/>
            </svg></span>
            <label for="" class="border-bottom border-info  m-3 mt-1">400 Uds</label>
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group">
             <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
             <use xlink:href="iconos/bootstrap-icons.svg#calendar-date-fill"/>
             </svg>
             </span>Inicio:
             <label for="" class="border-bottom border-info  m-3 mt-1">15-12-2021</label>
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group">
            <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
            <use xlink:href="iconos/bootstrap-icons.svg#calendar-date-fill"/>
            </svg>
            </span>Corte: 
            <label for="" class="border-bottom border-info m-3 mt-1">15-12-2021</label>
          </div>
        </div>
      </div>                
             
    </div>   
        <!-- Tabla de Informes -->
    <div class="table-responsive">                 
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Proceso</th>
            <th scope="col">Operación</th>
            <th scope="col">Costo por Prenda</th>
            <th scope="col">Cod. Operador</th>
             <th scope="col">Operario</th>
            <th scope="col">Und Total x Día</th>
            <th scope="col">Salario Día $</th>
            <th scope="col">Total $</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Presentación</td>
            <td>Ojalar</td>
            <td>$ 30</td>
            <td>24</td>
            <td>Hector Holguin</td>
            <td>100</td>
            <td>3000</td>
            <td>30000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

 