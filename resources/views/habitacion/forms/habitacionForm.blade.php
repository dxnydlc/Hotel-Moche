<div class="form-group">
	{!!Form::label('numero','Número (*):')!!}
	{!!Form::text('numero',null,['class'=>'form-control','autofocus'=>'true'])!!}
    <p class="help-block">Número de la habitación en puerta</p>
</div>
<!-- form-group -->
<div class="form-group">
	{!!Form::label('piso','Piso (*):')!!}
	{!!Form::text('piso',null,['class'=>'form-control'])!!}
    <p class="help-block">Número del piso donde está Ubicada</p>
</div>
<!-- form-group -->
<div class="form-group">
	{!!Form::label('tipo','Tipo Habitacion:')!!}
	{!!Form::select('tipo',[ 'Estandar'=>'Estándar' , 'EstandarTV'=>'Estándar con TV' , 'Matrimonial'=>'Matrimonial' ],null,['placeholder'=>'Seleccione tipo','class'=>'form-control'])!!}
    <p class="help-block">Tipo de habitación</p>
</div>
<!-- form-group -->