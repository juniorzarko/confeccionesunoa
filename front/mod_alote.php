<div class="container flex p-2">
         <form class="row gx-3 gy-2 justify-content-center align-items-end">
           <h4>Creacion de Lotes</h4>
              <div class="col-auto">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Codigo Interno</label>
                <div class="input-group">
                  <div class="input-group-text">Codigo Lote</div>
                         <input type="text" class="form-control" id="codigoLote" placeholder="# Lote">
                   </div>
                 </div>
              <div class="col-auto">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Descripcion / nombre</label>
                <div class="input-group">
                  <div class="input-group-text">Nombre</div>
                  <input type="text" class="form-control" id="nombre_lote" placeholder="Nombre">
                </div>
              </div>


              <div class="col-auto">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Cantidad total del lote</label>
                <div class="input-group">
                  <div class="input-group-text">Cantidad</div>
                  <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
                </div>
            </div>

              <div class="col-auto">
                <label class="visually-hidden" for="specificSizeInputGroupUsername">Fecha de produccion</label>
                <div class="input-group">
                  <div class="input-group-text">Fecha: </div>
                  <input type="date" class="form-control" id="fecha" placeholder="">
                </div>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="controlweb.registrarlote()">Registrar</button>
              </div>
         </form>
      </div>