$(function(){
	$("#enviar").on("click", function(){
		$.ajax({
			url: url,
			method: 'PUT',
			data: {
				

				descripcion: $('#descripcion').val(),
				observacion: $('#observacion').val(),
				id_tipo: $('#id_tipo').val(),
				precio_venta: $('#precio_venta').val(),
				cantidad: $('#cantidad').val(),
				fecha_inicial: $('#fecha_inicial').val(),
				fecha_final: $('#fecha_final').val()

				

			}

			

		}).done(function(){

			location.href= "/productos/";
		}).fail(function(err){
			alert("Ocurrio un error: "+err);
		});
	});
});