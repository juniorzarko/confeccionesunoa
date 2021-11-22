    <div class="container flex shadow bg-transparent rounded">
      <form class="row g-3 ">
        <div class="welcome-form col-12  text-center "><h2> Usuarios</h2></div>
            <div class="form-row d-flex flex-row offset-4">                        
               <div class="px-5 bd-highlight ">
               <input class="form-check-input" type="radio" name="Rb_inactivo" id="inactivo" value="inactivo" >
               <label class="form-check-label" for="exampleRadios1">Inactivo</label>
            </div>
            <div class="px-1  bd-highlight">
                <input class="form-check-input" type="radio" name="Rb_activo" id="activo" value="activo "checked>
                 <label class="form-check-label" for="exampleRadios2">Activo</label>
            </div>
        </div>
        <div class="col-md-3  ">
           <label for="nombre" class="form-label">Nombre Completo</label>
           <input type="text" class="form-control" id="">
        </div>
        <div class="col-md-3">
            <label for="usuario" class="form-label">Usuario</label>
           <input type="text" class="form-control" id="">
        </div>
        <div class="col-md-3 ">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="">
        </div>
        <div class="col-md-3">
           <label for="password2" class="form-label">Confirmar Passwor</label>
          <input type="password" class="form-control" id="">
        </div>
        <div class="col-md-6  ">
              <label for="Email" class="form-label">Email</label>
              <input type="email" class="form-control" id="">
        </div>
  
      </form>
      <nav class="navbar navbar-light bg-light">
       <form class="container-fluid justify-content-center  ">         
          <button class="btn btn-sm btn-outline-primary" type="button">Editar</button>
          <button class="btn btn-sm btn-outline-primary  mx-3" type="button">Eliminar</button>
          <button class="btn btn-sm btn-outline-primary" type="button">Guardar</button>
       </form>
      </nav>
    </div>
