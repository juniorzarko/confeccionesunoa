<div class="container flex p-2 shadow bg-transparent rounded">
      <form class=" gx-3 gy-2 ">
        <div class="col-md-12"> <h2 class="text-center">Creación de Operaciones</h2></div> 
        <div class="row"> 
             <div class="col-md-5 ">
                <div class="input-group">
                 <div class="input-group-text">Fecha:
                 </div>
                  <input type="date" class="form-control" id="fecha" placeholder="">
                </div>
              </div>
                 <div class="col-md-5 ">
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombre_lote" placeholder="Nombre">
                </div>
            </div> 
        </div> 
        <div class="row">   
        <div class="col-md-5 mt-2">
            <div class="input-group">
              <div class="input-group-text">Costo:
              </div>
                  <input type="number" class="form-control" id="" placeholder="Costo">
            </div>
          </div>         
        <div class="col-md-5 mt-2">
              <div class="input-group">
                  <div class="input-group-text">
                   Unidades
                  </div>
                  <input type="number" class="form-control" id="cantidad" placeholder="Cantidad">
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