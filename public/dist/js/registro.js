var _servicio = 'http://localhost:8000/';
(function($){

	$(document).ready(function()
		{
			/* ----------------------------------------------------------- */
			$(document).delegate('.deaprimary','click',function(event){
				var _nHabit = $(this).attr('rel');
				var _idHabit= $(this).attr('alt');
				//
				$('#idHabitacion').val(_idHabit);
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
				$('#idUsuario').val('0');
				if( _dni.length >= 8 ){
					$.get( _servicio+'getUser/'+_dni , function(resp){
						if(resp[0] != null || resp[0] != undefined )
						{
							$('#nombre').val( resp[0].nombre );
							$('#apellidos').val( resp[0].apellidos );
							$('#idUsuario').val(resp[0].id);
						}
					},'json')
				}
			});
			/* ----------------------------------------------------------- */
			$('#inicio_servicio').datetimepicker();
			/* ----------------------------------------------------------- */
			$('#fin_servicio').datetimepicker({
			    useCurrent: false //Important! See issue #1075
			});
			/* ----------------------------------------------------------- */
			$("#inicio_servicio").on("dp.change", function (e) {
			    $('#fin_servicio').data("DateTimePicker").minDate(e.date);
			});
			/* ----------------------------------------------------------- */
			$("#fin_servicio").on("dp.change", function (e) {
			    $('#inicio_servicio').data("DateTimePicker").maxDate(e.date);
			});
			/* ----------------------------------------------------------- */
			$('#btnRegistrar').click(function(event) {
				var _Data = $('#frmDatos').serialize();
				$.post( _servicio+'registro' , _Data , function(data, textStatus, xhr) {
					console.log(data);
				},'json');
			});
			/* ----------------------------------------------------------- */
		}
	);

})(jQuery);

function limpiarCajas()
{
	$('#nombre').val( '' );
	$('#apellidos').val( '' );
	$('#dni').val( '' );
}
