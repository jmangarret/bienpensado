<?php 
require_once "../conexion.php";
require_once "producto.php";
$data = array(
	'id'			=> $_POST['id'],
	'estado'		=>  $_POST['estado'],
);
$save = Producto::setEstado($data);
if ($save)
{
	echo json_encode(array('success'=>true, 'message'=>'Registro guardado con exito'));
}
else
{
	echo json_encode(array('success'=>false, 'message'=>'Error al guardar registro'));
}

?>