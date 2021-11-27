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
<<<<<<< HEAD
          <div class="row">
            <div class="col-md-5  mt-2">
                 <div class="input-group">
                    <span class="input-group-text">Codigoid</span>
                      <input type="text" aria-label="Codigo Operador" id="codigoIdlote" class="form-control">
                 </div>
            </div>
        </div>
=======
          <div class="col-md-5 mt-2">
            <div class="input-group">
              <div class="input-group-text">Id:
               </div>
                  <input type="text" class="form-control" id="idlote" placeholder="">
            </div>
          </div> 
>>>>>>> 983e4212c4a41df23934416a16c4727bcfb3c754
      </div>
      
      
    </form>
    <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center">
         
<<<<<<< HEAD
       <button class="btn btn-sm btn-outline-primary" onClick="actualizaOperario()" type="button">Actualizar</button>
          <button class="btn btn-sm btn-outline-primary" onClick="listarRespuestalote()" type="button">Listar</button>
          <button class="btn btn-sm btn-outline-primary" onClick="guardarlote();" type="button">Guardar</button>

=======
          <button class="btn btn-sm btn-outline-primary" onclick="actualizarlote();" type="button">Actualizar</button>
          <button class="btn btn-sm btn-outline-primary mx-3" onclick="listarlotes();" type="button">Listar</button>
          <button class="btn btn-sm btn-outline-primary" onclick="registrarlote();" type="button">Guardar</button>
>>>>>>> 983e4212c4a41df23934416a16c4727bcfb3c754
       </form>
    </nav>
</div>
