<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','autofocus'=>'true'])!!}
	<p class="help-block">Nombre/razón social de la empresa</p>
</div>
<!-- form-group -->
<div class="form-group">
	{!!Form::label('ruc','RUC:')!!}
	{!!Form::text('ruc',null,['class'=>'form-control'])!!}
    <p class="help-block">RUC de la empresa</p>
</div>
<!-- form-group -->

<div class="form-group">
	{!!Form::label('telefono','Teléfono (*):')!!}
	{!!Form::text('telefono',null,['class'=>'form-control'])!!}
    <p class="help-block">Teléfono de la empresa o contacto</p>
</div>
<!-- form-group -->

<div class="form-group">
	{!!Form::label('email','Correo:')!!}
	{!!Form::text('email',null,['class'=>'form-control'])!!}
    <p class="help-block">Correo de contacto</p>
</div>
<!-- form-group -->

<div class="form-group">
	{!!Form::label('contacto','Contacto (*):')!!}
	{!!Form::text('contacto',null,['class'=>'form-control'])!!}
    <p class="help-block">Persona de contacto</p>
</div>
<!-- form-group -->

<div class="form-group">
	{!!Form::label('observacion','Observaciones:')!!}
	{!!Form::text('observacion',null,['class'=>'form-control'])!!}
    <p class="help-block">.</p>
</div>
<!-- form-group -->