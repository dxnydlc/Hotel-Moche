<div class="form-group">
	{!!Form::label('nombre','Nombre (*):')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','autofocus'=>'true'])!!}
	<p class="help-block">Nombres del cliente</p>
</div>

<div class="form-group">
	{!!Form::label('apellidos','Apellidos:')!!}
	{!!Form::text('apellidos',null,['class'=>'form-control'])!!}
	<p class="help-block">Apellidos del cliente</p>
</div>

<div class="form-group">
	{!!Form::label('dni','DNI (*):')!!}
	{!!Form::text('dni',null,['class'=>'form-control'])!!}
	<p class="help-block">DNI o carnet de extrangería</p>
</div>

<div class="form-group">
	{!!Form::label('tipo','Tipo Usuario:')!!}
	{!!Form::select('tipo', $habitaciones ,null,['placeholder'=>'Seleccione Habitacion','class'=>'form-control'])!!}
    <p class="help-block">Tipo de habitación</p>
</div>
