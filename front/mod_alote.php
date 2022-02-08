<div class="container flex p-2 shadow bg-transparent rounded">
    <form class="gx-3 gy-2 ">
      <div class="col-md-12"> <h2 class="text-center">Creación de Nuevos Lotes</h2></div>
      <div class="row">          
          <div class="col-md-6 ">
                <div class="input-group">
                  <div class="input-group-text">
                    Codigo Lote
                  </div>
                         <input type="text" class="form-control" id="codigoLote" placeholder="Nombre Lote">
                </div>
          </div> 
          <div class="col-md-6 ">
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombreLote" placeholder="Digite el Nombre">
                </div>
          </div> 
      </div> 
      <div class="row">       
          <div class="col-md-6 mt-2">
              <div class="input-group">
                  <div class="input-group-text">
                    Cantidad
                  </div>
                  <input type="text" class="form-control" id="cantidadLote" placeholder="Digite la Cantidad">
              </div>
          </div>          
          <div class="col-md-6 mt-2">
            <div class="input-group">
              <div class="input-group-text">Fecha:
               </div>
                  <input type="date" class="form-control" id="fechalote" >
            </div>
          </div> 
          <div class="col-md-6 mt-2">
            <div class="input-group">
                  <input type="hidden" class="form-control" id="idlote" disabled>
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
