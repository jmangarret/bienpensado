<?php
class Producto
{
    public function getProductos()
    {
    	$link 	= new Conexion();
    	$db 	= $link->conectar();
		$sql 	= "SELECT *, p.id as producto_id FROM productos p ";
		$sql   .= "INNER JOIN bodegas b ON p.bodega_id = b.id ";
		$sql   .= "ORDER BY p.id DESC ";
		$query 	= $db->query($sql);
		if ($query)
		{
			while ($result=$query->fetch_object()) 
			{
				$data[] = $result;
			}
			return $data;
		}
		else
		{
			return false;
		}
    }
    public function getBodegas()
    {
    	$link 	= new Conexion();
    	$db 	= $link->conectar();
		$sql 	= "SELECT * FROM bodegas";
		$query 	= $db->query($sql);
		if ($query)
		{
			while ($result=$query->fetch_object()) 
			{
				$data[] = $result;
			}
			return $data;
		}
		else
		{
			return false;
		}
    }
    public function setProducto($data)
    {
    	$link 	= new Conexion();
    	$db 	= $link->conectar();
		$sql 	= "INSERT INTO productos values(".implode(',', $data).")";
		$query 	= $db->query($sql);
		if ($query)
		{
			return true;
		}
		else
		{
			return false;
		}
    }
    public function setEstado($data)
    {
    	$link 	= new Conexion();
    	$db 	= $link->conectar();
    	$id 	= $data['id'];
    	$estado = $data['estado'];
		$sql 	= "UPDATE productos SET estado= ".$estado." WHERE id = ".$id;
		$query 	= $db->query($sql);
		if ($query)
		{
			return true;
		}
		else
		{
			return false;
		}
    }
}