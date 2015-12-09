var _servicio = 'http://localhost:8000/';
(function($){

	$(document).ready(function()
		{
			/* ----------------------------------------------------------- */
			$(document).delegate('.deaprimary','click',function(event){
				var _nHabit = $(this).attr('rel');
				$('#nHabit').html(_nHabit);
				$('#modalPersona').modal('show');
				limpiarCajas();
				event.preventDefault();
			});
			/* ----------------------------------------------------------- */
			$(document).delegate('.deasuccess','click',function(event){
				//Preparar la habitacion
				alert('Hola');
				event.preventDefault();
			});
			/* ----------------------------------------------------------- */
			$(document).delegate('.deawarning','click',function(event){
				//Liberar la habitacion para cuando los huesped salgan.
				alert('Hola');
				event.preventDefault();
			});
			/* ----------------------------------------------------------- */
			$('#dni').keyup(function(event){
				var _dni = $(this).val();
				if( _dni.length == 8 ){
					$.get( _servicio+'getUser/'+_dni , function(resp){
						if(resp != null || resp != undefined )
						{
							$('#nombre').val( resp[0].nombre );
							$('#apellidos').val( resp[0].apellidos );
						}
					},'json')
				}
			});
		}
	);

})(jQuery);

function limpiarCajas()
{
	$('#nombre').val( '' );
	$('#apellidos').val( '' );
	$('#dni').val( '' );
}
