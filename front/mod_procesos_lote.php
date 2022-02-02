  <div class="container shadow bg-transparent rounded ">
  
    <!-- Boton modal lote -->
    <div class="container d-flex justify-content-center ">  
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
    <div class="container flex p-2 ">
      <form class="needs-validation novalidate gx-3 ">
        <div class="col-md-12"> <h2 class="text-center">Entrada de Datos</h2> </div> 
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
          <div class="col-md-4 mt-2">
              <div class="input-group">
                <div class="input-group-text">Fecha: </div>
                      <input type="date" class="form-control" id="fechaOperaciones" placeholder="">
              </div>
            </div> 
          <div class="col-md-4 mx-auto  mt-2">
                <div class="input-group">
                  <div class="input-group-text">Operacion</div>
                    <select class="form-select form-select-sm" requiered aria-label=".form-select-sm example">
                      <option selected>Seleccione la Operación</option>
                      <option value="1">Ojalar</option>    
                      <option value="2">Prender Garra</option>                      
                    </select>  
                </div>
          </div> 
             
          <div class="col-md-4 mx-auto mt-2">
              <div class="input-group">
                  <div class="input-group-text">
                   Unidades X Día
                  </div>
                  <input type="number" class="form-control " requiered  id="cantidad" placeholder="">
                  <div class="valid-feedback">Numero Aceptado</div>
              </div>
          </div>         
        </div>        
      </form>
   
      <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" type="button">Actualizar</button>
          <button class="btn btn-sm btn-outline-primary mx-3" type="button">Listar</button>
          <button class="btn btn-sm btn-outline-primary" type="button">Guardar</button>
        </form>
      </nav>
    </div>    
    <!-- Modulo de Visualizacion -->    
        <div class="accordion-flush accordion-padding-y:5rem;" id="accordionExample">         
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <strong>Información del Lote</strong>
                </button>
              </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="flush-headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <div class="row ">
                         <!-- primer cuadro del acordeon -->
                        <div class="col-6 shadow bg-transparent rounded">
                          <div class="col-auto">
                            <div class="input-group">
                             <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                              <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                             </span>                   
                               <label for="Funcionario" class="border-bottom border-info  mt-2"> Prenda: Jean Clasico </label>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                               <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                               </span>
                                  <label for="" class="border-bottom border-info mt-1">Fecha de Inicio: 12-12-2021</label>
                             </div>
                          </div>                        
                          <div class="col-auto">
                            <div class="input-group">
                              <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                <label for="" class="border-bottom border-info  mt-1">Fecha de Corte: 12-12-2021</label>                       
                            </div>                
                          </div>
                        </div>
                         <!-- Segundo cuadro del acordeon -->
                        <div class="col-6 shadow bg-transparent rounded">
                          <div class="col-auto">
                            <div class="input-group">
                             <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                              <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                             </span>                   
                               <label for="Funcionario" class="border-bottom border-info  mt-2">Total Unidades Lote: 400 unds</label>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                               <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                               </span>
                                  <label for="" class="border-bottom border-info mt-1">Presentacion: 100 unds </label>
                             </div>
                          </div>                        
                          <div class="col-auto">
                            <div class="input-group">
                              <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                <label for="" class="border-bottom border-info mt-1">Delantero: 100 unds</label>                       
                            </div>                
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                              <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                <label for="" class="border-bottom border-info mt-1">Trasero: 200 unds</label>                       
                            </div>                
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                              <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                <label for="" class="border-bottom border-info mt-1">Pretina: 100 unds</label>                       
                            </div>                
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                              <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                <label for="" class="border-bottom border-info mt-1">Pasadores: 200 unds</label>                       
                            </div>                
                          </div>
                        </div>
                      </div>       
                  </div>
                </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>Informe Produccion Lote</strong>
                  </button>
              </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="row">
                    <div class="col-6 shadow bg-transparent rounded">
                          <div class="col-auto">
                            <div class="input-group">
                             <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                              <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                             </span>                   
                               <label for="Funcionario" class="border-bottom border-info  mt-2"> Codigo #:1 </label>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                             <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                              <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                             </span>                   
                               <label for="Funcionario" class="border-bottom border-info  mt-2"> Operario: Junior </label>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                               <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                               </span>
                                  <label for="" class="border-bottom border-info mt-1">Prenda: Jean Clasico</label>
                             </div>
                          </div>                        
                          <div class="col-auto">
                            <div class="input-group">
                              <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                <label for="" class="border-bottom border-info  mt-1">Lote: AD 1815</label>                       
                            </div>                
                          </div>
                          <div class="col-auto">
                            <div class="input-group">
                              <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                <label for="" class="border-bottom border-info  mt-1">Cantidad: 400 unds</label>                       
                            </div>                
                          </div>
                    </div>
                         <!-- Segundo cuadro del acordeon -->
                    <div class="col-6 shadow bg-transparent rounded">
                        <div role="tabpanel">                           
                            <ul class="nav nav-tabs" >
                                <li class="nav-item">
                                   <a class="nav-link active" href="#seccion1" data-bs-toggle="tab" >Presentación</a>
                                 </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#seccion2"  data-bs-toggle="tab">Delantero</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#seccion3"  data-bs-toggle="tab">Trasero</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#seccion4"  data-bs-toggle="tab">Pretina</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#seccion5"  data-bs-toggle="tab">Pasadores</a>
                                 </li>
                            </ul>                           
                            <div class="tab-content">
                              <div class="tab-pane active " id="seccion1">
                                 <div class="col-auto">
                                   <div class="input-group">
                                     <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                     <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                                     </span>                   
                                      <label for="Funcionario" class="border-bottom border-info  mt-2">Unidades x Hacer: 300 unds</label>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                                   </span>
                                      <label for="" class="border-bottom border-info mt-1">Proceso:Presentación</label>
                                </div>
                                 </div>                        
                                  <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Operación:Ojalar</label>                       
                                 </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                   <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                   </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Costo x Prenda: 30 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                 <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                  <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Unidades x Día: 100 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                    <label for="" class="border-bottom border-info mt-1">Salario x día $: 3000 unds</label>                       
                                  </div>                
                                 </div>
                              </div>
                              <div class="tab-pane" id="seccion2">
                                 <div class="col-auto">
                                   <div class="input-group">
                                     <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                     <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                                     </span>                   
                                      <label for="Funcionario" class="border-bottom border-info  mt-2">Unidades x Hacer: 200 unds</label>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                                   </span>
                                      <label for="" class="border-bottom border-info mt-1">Proceso: Delantero</label>
                                </div>
                                 </div>                        
                                  <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Operación:Ojalar</label>                       
                                 </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                   <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                   </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Costo x Prenda:100 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                 <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                  <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Unidades x Día: 100 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                    <label for="" class="border-bottom border-info mt-1">Salario x día $: 10000 unds</label>                       
                                  </div>                
                                 </div>
                              </div>
                              <div class="tab-pane" id="seccion3">
                                 <div class="col-auto">
                                   <div class="input-group">
                                     <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                     <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                                     </span>                   
                                      <label for="Funcionario" class="border-bottom border-info  mt-2">Unidades x Hacer: 300 unds</label>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                                   </span>
                                      <label for="" class="border-bottom border-info mt-1">Proceso: Trasero</label>
                                </div>
                                 </div>                        
                                  <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Operación:Ojalar</label>                       
                                 </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                   <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                   </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Costo x Prenda:50 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                 <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                  <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Unidades x Día: 200 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                    <label for="" class="border-bottom border-info mt-1">Salario x día $: 10000 unds</label>                       
                                  </div>                
                                 </div>
                              </div>
                              <div class="tab-pane" id="seccion4">
                                 <div class="col-auto">
                                   <div class="input-group">
                                     <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                     <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                                     </span>                   
                                      <label for="Funcionario" class="border-bottom border-info  mt-2">Unidades x Hacer: 400 unds</label>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                                   </span>
                                      <label for="" class="border-bottom border-info mt-1">Proceso:Pretina</label>
                                </div>
                                 </div>                        
                                  <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Operación:Ojalar</label>                       
                                 </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                   <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                   </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Costo x Prenda:150 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                 <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                  <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Unidades x Día: 0 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                    <label for="" class="border-bottom border-info mt-1">Salario x día $:0 </label>                       
                                  </div>                
                                 </div>
                              </div>
                              <div class="tab-pane" id="seccion5">
                                 <div class="col-auto">
                                   <div class="input-group">
                                     <span><svg class="bi text-primary mt-2 m-2" width="16" height="16" fill="currentColor">
                                     <use xlink:href="iconos/bootstrap-icons.svg#person-badge"/></svg>
                                     </span>                   
                                      <label for="Funcionario" class="border-bottom border-info  mt-2">Unidades x Hacer: 150 unds</label>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16" height="16"  fill="currentColor">
                                    <use xlink:href="iconos/bootstrap-icons.svg#gear-wide-connected"/></svg>
                                   </span>
                                      <label for="" class="border-bottom border-info mt-1">Proceso:Pasadores</label>
                                </div>
                                 </div>                        
                                  <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Operación:Ojalar</label>                       
                                 </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                   <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                   </svg></span>
                                   <label for="" class="border-bottom border-info mt-1">Costo x Prenda:200 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                <div class="input-group">
                                 <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                  <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Unidades x Día: 100 unds</label>                       
                                </div>                
                                 </div>
                                 <div class="col-auto">
                                 <div class="input-group">
                                    <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                   <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                    </svg></span>
                                    <label for="" class="border-bottom border-info mt-1">Salario x día $: 20.000 </label>                       
                                  </div>                
                                 </div>
                              </div>       
                            </div>
                          </div>
                           
                        </div>                   
                    </div>    
                  </div>
            </div>
        </div>
        <div class="table-responsive">
                 <table class="table table-striped table-sm">
              
                        <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha Movimiento</th>
                                <th scope="col">Lote</th>
                                <th scope="col">Operario</th>
                                <th scope="col">Operación</th>
                                <th scope="col">Proceso</th>
                                <th scope="col">Unidad x Día</th>
                                <th scope="col">Observacioones</th>
                           
                                </tr>
                              </thead>
                </table>  
        </div>

                          

       
        