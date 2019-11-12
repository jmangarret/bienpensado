//load init
$(document).ready(function(){
	/*function para aplciar datatable a lista d eproductos*/
	var table = $('#tablaProductos').DataTable({
		  "ordering": false,
		"dom" : 'tlp',
		"language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
	});
	/*function para buscar dentro del datatable*/
	$('#txtBuscar').keyup(function () {
         table.search($(this).val()).draw();
    });
    var validForm = $('#form_crear_producto').validate();
    /*function para guardar producto desde modal*/
    $('#guardar_producto').click(function(e){
    	if (!validForm)
    	{
    		return false;	
    	}
    	$.ajax({
    		url: 'productos/guardar_producto.php',
    		data: $('#form_crear_producto').serialize(),
    		type: 'post',
    		dataType: 'json',
    		success: function(response){
    			if (response.success)
    			{
    				Swal.fire('Exito',response.message,'success');
    				setTimeout(function(){
						location.reload()
    				},1500);
    			}
    			else
    			{
    				Swal.fire('Error',response.message,'error');
    			}    			
    		}
    	})    	
    });
    /*function para cambiar estado*/
    $('.cambiar_estado').click(function(e){
    	var id 		= $(this).data('id');
    	var estado 	= $(this).data('estado');
    	if (estado==1)
    	{
    		new_estado = 0;
    	}
    	else
    	{
			new_estado = 1;
    	}
    	Swal.fire({
		  title: 'Confirmación',
		  text: "Confirma cambiar estado?",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, confirmar!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
			  	url: 'productos/cambiar_estado.php',
	    		data: {id: id, estado: new_estado},
	    		type: 'post',
	    		dataType: 'json',
	    		success: function(response){
	    			if (response.success)
	    			{
	    				Swal.fire('Exito',response.message,'success');
	    				setTimeout(function(){
							location.reload()
	    				},1500);
	    			}
	    			else
	    			{
	    				Swal.fire('Error',response.message,'error');
	    			}    			
	    		}	
		  	})
		  }
		})
    });
});

