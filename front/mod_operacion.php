<div class="container flex p-2 shadow bg-transparent rounded">
      <form class=" gx-1 gy-2 ">
        <div class="col-md-12"> <h2 class="text-center"> Operaciones Generales</h2></div> 
        <div class="row"> 
            <div class="col-md-6 mt-2">
              <div class="input-group">
                <div class="input-group-text">Fecha:
                 </div>
                  <input type="date" class="form-control" id="fechaOperacion" >
              </div>
            </div>
            <div class="col-md-6 mt-2 ">
                <div class="input-group">
                  <div class="input-group-text">Operación</div>
                     <input type="text" class="form-control" id="nombreOperacion" placeholder="Digite Nombre">
                  </div>
            </div>          
        </div>  
        <div class="row mt-1" >            
            <div class="col-md-6 mt-2 ">
                <div class="input-group">
                <input type="hidden" class="form-control " id="idOperacion" disabled >
            </div>
            <!-- <div class="col-md-6 mt-2 ">
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombreOperacion" placeholder="Nombre">
                  </div>
            </div>            -->
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
  

  

 

