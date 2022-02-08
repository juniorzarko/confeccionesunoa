<div class="container flex p-2 shadow bg-transparent rounded ">
    <form class="gx-3 gy-2" id="formulario" >
        <div class="col-md-12"> <h2 class="text-center">Creación de Operador</h2></div>
        <div class="row">       
            <div class="col-md-6 mt-2">
                <div class="input-group formulario__grupo" id="grupo__nombre">
                    <label for="nombreOperario" class="formulario__label input-group-text">Nombre:</label>
                    <input name="nombre" type="text" class="form-control" id="nombreOperario" placeholder="Digite el nombre">
                    <i class="formulario__validacion-estado bi bi-file-excel-fill"></i>                      
                </div>
                <p class="formulario__input-error">El Nombre tiene que ser de 4 a 40 dígitos y solo puede contener, letras Mayusculas,minusculas y espacios.</p>  
            </div>         
            <div class="col-md-6 mt-2">
               <div class="input-group formulario__grupo" id="grupo__apellido">
                    <label for="apellidOperario" class="formulario__label input-group-text">Apellido:</label>
                    <input name="apellido" type="text" class="form-control" id="apellidOperario" placeholder="Digite su Apellido">
                    <i class="formulario__validacion-estado bi bi-file-excel-fill"></i>                      
                </div>
                <p class="formulario__input-error">El Apellido tiene que ser de 4 a 40 dígitos y solo puede contener, letras Mayusculas,minusculas y espacios.</p> 
            </div> 
        </div>
        <div class="row">       
            <div class="col-md-6  mt-2">
                <div class="input-group">
                    <div class="input-group-text">Dirección</div>
                          <input type="text" name="direccion" class="form-control" id="direccionOperario" placeholder="Escriba su Dirección">
                </div>
            </div>          
            <div class="col-md-6 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Teléfono:
                    </div>
                       <input type="number" name="telefono"class="form-control" id="telefonOperario" placeholder="Digite su Teléfono">
                </div>
            </div> 
        </div>
        <div class="row">       
            <div class="col-md-6 mt-2">
                <div class="input-group">
                    <div class="input-group-text">Cargo</div>
                          <input type="text" name="cargo" class="form-control" id="cargOperario" placeholder="Digite el Cargo">
                </div>
            </div>          
            <div class="col-md-6 mt-2">
               <div class="input-group">
                    <div class="input-group-text">Email:
                    </div>
                       <input type="email" name="correo"class="form-control" id="emailOperario" placeholder="Digite su Email">
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-3  mt-2">
            <input type="hidden" aria-label="Codigo Operador" id="codigoId" class="form-control" disabled>
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