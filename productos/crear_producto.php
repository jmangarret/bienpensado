<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Crear Producto</h4>
      </div>
      <div class="modal-body">
        <form id="form_crear_producto">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" title="Ingrese una descripción" required>
            </div>
            <div class="form-group">
                <label for="bodega">Bodega</label>
                <select class="form-control" name="bodega" title="Seleccione una bodega" required>
                    <option>--Seleccione--</option>
                    <?php 
                        $bodegas = Producto::getBodegas(); 
                        if ($bodegas)
                        foreach ($bodegas as $key => $value)
                        {
                            ?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->bodega ?></option>
                            <?php
                        } 
                    ?>                    
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" title="Ingrese una cantidad" required>
            </div>
            <div class="form-group">
                <label for="email">Estado</label>
                <input type="radio" name="estado" value="1" checked=""> Activo
                <input type="radio" name="estado" value="0"> Inactivo
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="guardar_producto">Guardar</button>
      </div>
    </div>
  </div>
</div>