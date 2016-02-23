<div class="row">
	<div class="form-group col-lg-4">
		{!!Form::label('dni','DNI (*):')!!}
		{!!Form::text('dni',null,['class'=>'form-control','maxlength'=>8])!!}
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
<!-- /row -->

<div class="row">
	<div class=' col-lg-6 col-md-6 col-sm-6 col-xs-12 '>
        <div class="form-group">
        	{!!Form::label('inicio_servicio','Inicio:')!!}
            <div class='input-group date' >
                <input type='text' class="form-control" id='inicio_servicio' name='inicio_servicio' />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class=' col-lg-6 col-md-6 col-sm-6 col-xs-12 '>
        <div class="form-group">
        {!!Form::label('fin_servicio','Fin:')!!}
            <div class='input-group date'  >
                <input type='text' class="form-control" id='fin_servicio' name='fin_servicio' />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- /row -->

<div class="row">
	<div class="form-group col-lg-2">
		{!!Form::label('precio','Precio:')!!}
		{!!Form::text('precio',null,['class'=>'form-control'])!!}
		<p class="help-block">Día/noche.</p>
	</div>
	<div class="form-group col-lg-5">
		{!!Form::label('obs','Observaciones:')!!}
		{!!Form::textarea('obs',null,['class'=>'form-control','size'=>'1x1'])!!}
		<p class="help-block">Precio de habitación por día.</p>
	</div>
</div>
<!-- /row -->
