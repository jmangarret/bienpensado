<?php require_once "producto.php"; ?>
<div class="container">
    <div class="row">
        <div class="text-left">
            <div class="col-md-4">
                <div class="form-group">
                    <input class="form-control" id="txtBuscar" placeholder="Buscar">
                </div>            
            </div>              
        </div>

        <div class="text-right">
            <div class="form-group">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-plus"></i>Crear Producto
                </button>    
            </div>            
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
        	<div class="table-responsive">
        		<table class="table" id="tablaProductos">
        			<thead>
        				<tr>
        					<th>Producto</th>
        					<th>Bodega</th>
        					<th>Cantidad</th>
        					<th>Estado</th>
        					<th>Gestión</th>
        				</tr>
        			</thead>
        			<tbody> 
                        <?php 
                        $productos = Producto::getProductos(); 
                        if ($productos)
                        {
                            foreach ($productos as $key => $value) 
                            {
                                ?>
                                <tr>
                                    <td><?php echo $value->descripcion; ?></td>
                                    <td><?php echo $value->bodega; ?></td>
                                    <td><?php echo $value->cantidad; ?></td>
                                    <td>
                                        <?php 
                                        if ($value->estado==1)
                                        { 
                                            ?>
                                            <div class="label label-success">Activo</div>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <div class="label label-danger">Inactivo</div>
                                            <?php
                                        } 
                                        ?>                                    
                                    </td>
                                    <td>
                                        <button class="btn btn-primary cambiar_estado" data-id="<?php echo $value->producto_id; ?>" data-estado = "<?php echo $value->estado ?>">
                                            <i class="fa fa-edit"></i> Cambiar Estado
                                        </button>
                                    </td>
                                </tr>
                                <?php
                            }    
                        }
                        ?>
        			</tbody>
        		</table>
        	</div>
        </div>
    </div>
</div>

<?php include('crear_producto.php') ?>

<script type="text/javascript" src="js/productos.js"></script>