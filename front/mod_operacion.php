<div class="container flex p-2 shadow bg-transparent rounded">
      <form class=" gx-1 gy-2 ">
        <div class="col-md-12"> <h2 class="text-center">Creación de Operaciones</h2></div> 
        <div class="row"> 
            <div class="col-md-3 ">
              <div class="input-group">
                <div class="input-group-text">Fecha:
                 </div>
                  <input type="date" class="form-control" id="fechaOperacion" placeholder="">
              </div>
            </div>
            
            <div class="col-md-3 ">
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombreOperacion" placeholder="Nombre">
                  </div>
                </div>
            <div class="col-md-3">
               <div class="input-group">
                   <div class="input-group-text">Costo:</div>
                       <input type="number" class="form-control" id="costoOperacion" placeholder="Costo">
                    </div>  
                    <div class="input-group-text">Unidades:</div>
                       <input type="number" class="form-control" id="unidadesOperacion" placeholder="Unidades">
                    </div>          
                </div>          
            </div> 
            <div class="col-md-3">
               <div class="input-group">
                   <div class="input-group-text">Tiempo Proceso:</div>
                       <input type="time" class="form-control" id="tiempoOperacion" placeholder="">
                    </div>  
                    
                    
                    </div> 
          <!--Forenky a la tabla modulo de operaciones-->   
             <div class="col-md-5 mx-auto mt-2 " id="fkModulos">
                <div class="input-group">
                 <div class="input-group-text">Procesos:</div>
                  <select class="form-select form-select-sm" requiered aria-label=".form-select-sm example">
                      <option selected>Seleccione los Procesos</option>
                      <option value="1">Presentación</option>
                      <option value="2">Delantero<e/option>
                      <option value="3">Trasero</option>
                      <option value="4">Pretinas</option>
                      <option value="5">Pasadores</option>
                  </select>
                  <div class="invalid-feedback">Ingrese un mensaje de texto</div>
                </div>
            </div>   
          <!--   -->  
            
            <div class="col-md-3">
               <div class="input-group">
                   <div class="input-group-text">Tiempo Proceso:</div>
                       <input type="time" class="form-control" id="tiempoOperacion" placeholder="">
                    </div> 

                </div>   
                       
            </div> 

            
        </div>    
      </form>
      <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" onclick="actualizarOperacion();" type="button">Actualizar</button>
          <button class="btn btn-sm btn-outline-primary mx-3" onclick="listarOperacion();" type="button">Listar</button>
          <button class="btn btn-sm btn-outline-primary" onclick="guardarOperacion();" type="button">Guardar</button>
        </form>
      </nav>
</div>
  

  

 

