<div class="container flex p-2 shadow bg-transparent rounded">
    <form class="row gx-3 gy-2 ">
      <div class="col-md-12"> <h2 class="text-center">Creación de Lotes</h2></div>
      <div class="row">          
          <div class="col-md-5 ">
                <div class="input-group">
                  <div class="input-group-text">
                    Codigo Lote
                  </div>
                         <input type="text" class="form-control" id="codigoLote" placeholder="# Lote">
                </div>
          </div> 
          <div class="col-md-5 ">
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombreLote" placeholder="Nombre">
                </div>
          </div> 
      </div> 
      <div class="row">       
          <div class="col-md-5 mt-2">
              <div class="input-group">
                  <div class="input-group-text">
                    Cantidad
                  </div>
                  <input type="text" class="form-control" id="cantidadLote" placeholder="Cantidad">
              </div>
          </div>          
          <div class="col-md-5 mt-2">
            <div class="input-group">
              <div class="input-group-text">Fecha:
               </div>
                  <input type="date" class="form-control" id="fecha" placeholder="">
            </div>
          </div> 
          <div class="col-md-5 mt-2">
            <div class="input-group">
              <div class="input-group-text">Id:
               </div>
                  <input type="text" class="form-control" id="idlote" placeholder="">
            </div>
          </div> 
      </div>
      
      
    </form>
    <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" onclick="actualizarlote();" type="button">Actualizar</button>
          <button class="btn btn-sm btn-outline-primary mx-3" onclick="listarlotes();" type="button">Listar</button>
          <button class="btn btn-sm btn-outline-primary" onclick="registrarlote();" type="button">Guardar</button>
       </form>
    </nav>
</div>
