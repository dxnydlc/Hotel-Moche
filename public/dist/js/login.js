var _servicio = 'http://localhost:8000/';
(function($){

	$(document).ready(function()
		{
			$('#loginGO').click(function(event) {
				event.preventDefault();
				var _Data = $('#frmLogin').serialize();
				$.post( _servicio+'login' , _Data , function(data, textStatus, xhr) {
					console.log(data);
				},'json');
			});
		}
	);

})(jQuery);