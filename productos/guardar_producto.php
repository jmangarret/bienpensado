<?php 
require_once "../conexion.php";
require_once "producto.php";
$data = array(
	'id'			=> 0,
	'descripcion'	=>  "'".$_POST['descripcion']."'",
	'bodega_id'		=>  $_POST['bodega'],
	'cantidad'		=>  $_POST['cantidad'],
	'estado'		=>  $_POST['estado'],
);
$save = Producto::setProducto($data);
if ($save)
{
	echo json_encode(array('success'=>true, 'message'=>'Registro guardado con exito'));
}
else
{
	echo json_encode(array('success'=>false, 'message'=>'Error al guardar registro'));
}

?>