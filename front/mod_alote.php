<div class="container flex p-2">
    <form class="row gx-3 gy-2 shadow bg-transparent rounded">
      <div class=""> <h4 class="text-center">Creación de Lotes</h4></div>            
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
          <div class="col-3 offset-2 mb-2">
                <button type="button" class="btn btn-primary btn-block" onclick="controlweb.  registrarlote()">Registrar</button>
          </div>
      </div>
    </form>
</div>
