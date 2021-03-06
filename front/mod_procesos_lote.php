<div class="container shadow bg-transparent rounded ">
  
  <!-- formulario de entrada de datos proceso lotes -->
  <div class="container flex p-2 ">
    <form class="needs-validation novalidate gx-3 ">
      <div class="col-md-12"> <h2 class="text-center">Entrada de Datos</h2> </div> 
      <div class="row"> 
        <div class="col-md-4 mt-2">
            <div class="input-group">
              <div class="input-group-text">Fecha: </div>
                    <input type="date" class="form-control" id="fechaOperaciones" placeholder="">
            </div>
        </div> 
          <div class="col-md-4 mx-auto mt-2 ">
              <div class="input-group">
              <div class="input-group-text">Operador</div>
                  <select id="operadorSelect" class="form-select form-select-sm"  aria-label=".form-select-sm example">
                  <option selected>Seleccione el Operador</option>
                                         
                  </select>  
              </div> 
              
          </div>
          <div class="col-md-4 mx-auto  mt-2">
              <div class="input-group">
              <div class="input-group-text">Lote:</div>
                <select id="operacion-general" class="form-select form-select-sm"  aria-label=".form-select-sm example">
                    <option selected>Seleccione el Lote</option>
               
                </select>
              </div>
          </div> 
      </div>            
      <div class="row">           
        <div class="col-md-4 mx-auto  mt-2">
              <div class="input-group">
                <div class="input-group-text">Operacion</div>
                  <select id="selectOperacion-mod" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione La Operacion</option>                   
                  </select>  
              </div>
         </div> 
        <div class="col-md-4 mx-auto  mt-2">
              <div class="input-group">
                <div class="input-group-text">Procesos</div>
                  <select class="form-select form-select-sm" id="selectorProceso" requiered aria-label=".form-select-sm example">
                    <option selected>Seleccione el Proceso</option>

                                     
                  </select>  
              </div>
          </div>             
        <div class="col-md-4 mx-auto mt-2">
            <div class="input-group">
                <div class="input-group-text">
                 Unidades X D??a
                </div>
                <input type="number" class="form-control " requiered  id="cantidad">    
            </div>
          </div>         
         </div>
      <div class="row">
          <div class="col-md-0  mt-2">
            <div class="input-group">
            <input type="hidden" class="form-control " id="cantidad" disabled>        
            </div>
          </div>
          <div class="col-md-12 mt-2" >
             <div class="input-group">
                <span class="input-group-text">Observaciones</span>
                <textarea class="form-control" id="observaciones" aria-label="With textarea"></textarea>
             </div>     
          </div>    
      </div>        
    </form>
 
    <nav class="navbar navbar-light bg-light">
      <form class="container-fluid justify-content-center">
       
        <button class="btn btn-sm btn-outline-primary" type="button">Actualizar</button>
        <button class="btn btn-sm btn-outline-primary mx-3" Onclick="listarasignaciones()" type="button">Listar</button>
        <button class="btn btn-sm btn-outline-primary" Onclick="asignaroperacion()" type="button">Guardar</button>
      </form>
    </nav>
  </div>    
  <!-- Modulo de Visualizacion -->    
      <div class="accordion-flush accordion-padding-y:5rem;" id="accordionExample">         
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <strong>Informaci??n del Lote</strong>
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
                                 <a class="nav-link active" href="#seccion1" data-bs-toggle="tab" >Presentaci??n</a>
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
                                    <label for="" class="border-bottom border-info mt-1">Proceso:Presentaci??n</label>
                              </div>
                               </div>                        
                                <div class="col-auto">
                               <div class="input-group">
                                  <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                </svg></span>
                                 <label for="" class="border-bottom border-info mt-1">Operaci??n:Ojalar</label>                       
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
                                <label for="" class="border-bottom border-info mt-1">Unidades x D??a: 100 unds</label>                       
                              </div>                
                               </div>
                               <div class="col-auto">
                               <div class="input-group">
                                  <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Salario x d??a $: 3000 unds</label>                       
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
                                 <label for="" class="border-bottom border-info mt-1">Operaci??n:Ojalar</label>                       
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
                                <label for="" class="border-bottom border-info mt-1">Unidades x D??a: 100 unds</label>                       
                              </div>                
                               </div>
                               <div class="col-auto">
                               <div class="input-group">
                                  <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Salario x d??a $: 10000 unds</label>                       
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
                                 <label for="" class="border-bottom border-info mt-1">Operaci??n:Ojalar</label>                       
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
                                <label for="" class="border-bottom border-info mt-1">Unidades x D??a: 200 unds</label>                       
                              </div>                
                               </div>
                               <div class="col-auto">
                               <div class="input-group">
                                  <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Salario x d??a $: 10000 unds</label>                       
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
                                 <label for="" class="border-bottom border-info mt-1">Operaci??n:Ojalar</label>                       
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
                                <label for="" class="border-bottom border-info mt-1">Unidades x D??a: 0 unds</label>                       
                              </div>                
                               </div>
                               <div class="col-auto">
                               <div class="input-group">
                                  <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Salario x d??a $:0 </label>                       
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
                                 <label for="" class="border-bottom border-info mt-1">Operaci??n:Ojalar</label>                       
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
                                <label for="" class="border-bottom border-info mt-1">Unidades x D??a: 100 unds</label>                       
                              </div>                
                               </div>
                               <div class="col-auto">
                               <div class="input-group">
                                  <span><svg class="bi text-primary mt-2 m-2" width="16"      height="16" fill="currentColor">
                                 <use xlink:href="iconos/bootstrap-icons.svg#journal-richtext"/>
                                  </svg></span>
                                  <label for="" class="border-bottom border-info mt-1">Salario x d??a $: 20.000 </label>                       
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
               <table class="table table-striped table-sm" id="tabladatos">
            
                      <thead class="thead-dark">
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Fecha Movimiento</th>
                              <th scope="col">Lote</th>
                              <th scope="col">Operario</th>
                              <th scope="col">Operaci??n</th>
                              <th scope="col">Proceso</th>
                              <th scope="col">Unidad x D??a</th>
                              <th scope="col">Observacioones</th>
                         
                              </tr>
                            </thead>
              </table>  
      </div>

                        

     
      