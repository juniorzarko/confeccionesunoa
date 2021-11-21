<div class="container flex p-2">
        <div class=""> <h4 class="text-center">Creación de Operaciones</h4></div> 
        <form class=" gx-3 gy-2 shadow bg-transparent rounded">
        <div class="row"> 
             <div class="col-4 offset-2">
                <div class="input-group-sm">
                 <div class="input-group-text">Fecha:
                 </div>
                  <input type="date" class="form-control" id="fecha" placeholder="">
                </div>
              </div>
                 <div class="col-4 ">
                <div class="input-group-sm">
                  <div class="input-group-text">Nombre</div>
                     <input type="text" class="form-control" id="nombre_lote" placeholder="Nombre">
                </div>
            </div> 
        </div> 
        <div class="row">   
          <div class="col-4 offset-2 mt-2">
              <div class="input-group-sm">
                  <div class="input-group-text">
                    Cantidad
                  </div>
                  <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
              </div>
          </div>          
          <div class="col-4 mt-2">
            <div class="input-group-sm">
              <div class="input-group-text">Costo:
              </div>
                  <input type="number" class="form-control" id="" placeholder="Costo">
            </div>
          </div>
        </div>    
        <div class="col-3 offset-2 mt-2">
                <button type="button" class="btn btn-primary btn-block" onclick="controlweb.  registrarlote()">Registrar</button>
          </div>
     
        </form>

    <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center">
          <button class="btn btn-sm btn-outline-primary" type="button">Crear</button>
          <button class="btn btn-sm btn-outline-primary" type="button">Editar</button>
          <button class="btn btn-sm btn-outline-primary" type="button">Eliminar</button>
       </form>
    </nav>
</div>