<div class="row">
	<div class="form-group col-lg-4">
		{!!Form::label('dni','DNI (*):')!!}
		{!!Form::text('dni',null,['class'=>'form-control'])!!}
		<p class="help-block">Escriba el número para cargar los datos del Huesped</p>
	</div>

	<div class="form-group col-lg-4">
		{!!Form::label('nombre','Nombre (*):')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','autofocus'=>'true'])!!}
		<p class="help-block">Nombres del cliente</p>
	</div>

	<div class="form-group col-lg-4">
		{!!Form::label('apellidos','Apellidos:')!!}
		{!!Form::text('apellidos',null,['class'=>'form-control'])!!}
		<p class="help-block">Apellidos del cliente</p>
	</div>

	
</div>
