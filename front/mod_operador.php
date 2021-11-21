<div class="container flex p-2">
    <form class="form-row gx-3 gy-2 shadow bg-transparent rounded">
      <div class=""> <h4 class="text-center">Creación de Lotes</h4></div>
      <div class="row">          
          <div class="col-4 offset-2 ">
                <div class="input-group">
                  <div class="input-group-text">
                    Codigo Lote
                  </div>
                         <input type="text" class="form-control" id="codigoLote" placeholder="# Lote">
                </div>
          </div> 
          <div class="col-4 ">
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombre_lote" placeholder="Nombre">
                </div>
          </div> 
      </div> 
      <div class="row">       
          <div class="col-4 offset-2 mt-2">
              <div class="input-group">
                  <div class="input-group-text">
                    Cantidad
                  </div>
                  <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
              </div>
          </div>          
          <div class="col-4 mt-2">
            <div class="input-group">
              <div class="input-group-text">Fecha:
               </div>
                  <input type="date" class="form-control" id="fecha" placeholder="">
            </div>
          </div> 
      </div>
      <div class="col-3 offset-2 mb-2">
      <div class="input-group">
     <span class="input-group-text">First and last name</span>
  <input type="text" aria-label="First name" class="form-control">
  <input type="text" aria-label="Last name" class="form-control">
</div>
      </div>
      
    </form>
    <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" type="button">Editar</button>
          <button class="btn btn-sm btn-outline-primary" type="button">Eliminar</button>
          <button class="btn btn-sm btn-outline-primary" type="button">Guardar</button>
       </form>
    </nav>
</div>