<div class="container flex p-2 shadow bg-transparent rounded ">
    <form class="gx-3 gy-2" id="formulario" >
        <div class="col-md-12"> <h2 class="text-center">Nuevo Operador</h2></div>
        <div class="row">       
            <div class="col-md-6 mt-2">
                <div class="input-group">
                    <div class="input-group-text" id="grupo__nombre">Nombre</div>
                          <input name="nombre" type="text" class="form-control formulario__input" id="nombreOperario" placeholder="Nombre">
                   </div>
                </div>          
            <div class="col-md-6 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Apellido:
                    </div>
                       <input name="apellido" type="text" class="form-control" id="apellidOperario" placeholder="Apellido">
                      
                </div>
            </div> 
        </div>
        <div class="row">       
            <div class="col-md-6  mt-2">
                <div class="input-group">
                    <div class="input-group-text">Dirección</div>
                          <input type="text" class="form-control" id="direccionOperario" placeholder="Dirección">
                </div>
            </div>          
            <div class="col-md-6 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Teléfono:
                    </div>
                       <input type="number" class="form-control" id="telefonOperario" placeholder="Teléfono">
                </div>
            </div> 
        </div>
        <div class="row">       
            <div class="col-md-6 mt-2">
                <div class="input-group">
                    <div class="input-group-text">Cargo</div>
                          <input type="text" class="form-control" id="cargOperario" placeholder="Cargo">
                </div>
            </div>          
            <div class="col-md-6 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Email:
                    </div>
                       <input type="email" class="form-control" id="emailOperario" placeholder="Email">
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-3  mt-2">
                 <div class="input-group">
                    
                      <input type="hidden" aria-label="Codigo Operador" id="codigoId" class="form-control" disabled>
                 </div>
            </div>
        </div>
      
    </form>
    <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center">
         
          <button class="btn btn-sm btn-outline-primary" onClick="actualizaOperario()" type="button">Actualizar</button>
          <button class="btn btn-sm btn-outline-primary" onClick="listarRespuesta()" type="button">Listar</button>
          <button class="btn btn-sm btn-outline-primary" onClick="guardarOperador();" type="button">Guardar</button>

       </form>
    </nav>
  
</div>