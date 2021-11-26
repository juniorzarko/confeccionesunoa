<div class="container flex p-2 shadow bg-transparent rounded ">
    <form class="row gx-3 gy-2  ">
        <div class="col-md-12"> <h2 class="text-center">Operador</h2></div>
        <div class="row">       
            <div class="col-md-5 mt-2">
                <div class="input-group">
                    <div class="input-group-text">Nombre</div>
                          <input type="text" class="form-control" id="nombreOperario" placeholder="Nombre">
                </div>
            </div>          
            <div class="col-md-5 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Apellido:
                    </div>
                       <input type="text" class="form-control" id="apellidOperario" placeholder="Apellido">
                </div>
            </div> 
        </div>
        <div class="row">       
            <div class="col-md-5  mt-2">
                <div class="input-group">
                    <div class="input-group-text">Dirección</div>
                          <input type="text" class="form-control" id="direccionOperario" placeholder="Dirección">
                </div>
            </div>          
            <div class="col-md-5 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Teléfono:
                    </div>
                       <input type="number" class="form-control" id="telefonOperario" placeholder="Teléfono">
                </div>
            </div> 
        </div>
        <div class="row">       
            <div class="col-md-5 mt-2">
                <div class="input-group">
                    <div class="input-group-text">Cargo</div>
                          <input type="text" class="form-control" id="cargOperario" placeholder="Cargo">
                </div>
            </div>          
            <div class="col-md-5 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Email:
                    </div>
                       <input type="email" class="form-control" id="emailOperario" placeholder="Email">
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-5  mt-2">
                 <div class="input-group">
                    <span class="input-group-text">Codigo Operario</span>
                      <input type="text" aria-label="Codigo Operador" class="form-control">
                     
                 </div>
            </div>
        </div>
      
    </form>
    <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" type="button">Editar</button>

          <button class="btn btn-sm btn-outline-primary mx-3" type="button">Eliminar</button>
          <button class="btn btn-sm btn-outline-primary" onClick="guardarOperador();" type="button">Guardar</button>

         
       </form>
    </nav>
  
</div>