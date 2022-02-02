<div class="container flex p-2 shadow bg-transparent rounded">
      <form class="  gx-3 gy-2 ">
        <div class="col-md-12"> <h2 class="text-center">Procesos</h2></div> 
        <div class="row"> 
            <div class="col-md-6 mt-2">
              <div class="input-group">
                <div class="input-group-text">Fecha: </div>
                      <input type="date" class="form-control" id="fechaOperaciones" placeholder="">
              </div>
            </div>
            <div class="col-md-6 mt-2">
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
            
        </div>
        <div class="row"> 
             <div class="col-md-6 mt-2">
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombreOperaciones" placeholder="">
                </div>
            </div> 
            <div class="col-md-6 mt-2">
              <div class="input-group">
                  <div class="input-group-text">
                   Costo X Prenda $
                  </div>
                  <input type="number" class="form-control" id="costoxprenda" placeholder="">
                  <input type="hidden" class="form-control" id="idoperaciones" placeholder="">

              </div>
           </div> 
        </div> 
        <div class="row">
        <div class="col-md-6 mt-2">
                <div class="input-group">
                  <div class="input-group-text">id Procesos</div>
                     <input type="number" class="form-control" id="" disabled >
                </div>
            </div> 
        </div>
        
   
         
      </form>

      <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" onclick="actualizarmodoperaciones();" type="button">Actualizar</button>
          <button class="btn btn-sm btn-outline-primary mx-3" onclick="listarmodoperaciones();" type="button">Listar</button>
          <button class="btn btn-sm btn-outline-primary" onclick="guardarmodoperaciones();" type="button">Guardar</button>
       </form>
    </nav>
</div>