@extends('layouts.login')

@section('content')
<div class="row">
	
	@include('alertas.errors')
	@include('alertas.userRequest')

    <div class="col-lg-4 col-lg-offset-3 ">

        <h1 class="page-header">Hotel Moche - Login</h1>

        {!!Form::open(['route'=>'login.store','method'=>'POST','autocomplete'=>'off','id'=>'frmLogin'])!!}

        	<div class="form-group">
				{!!Form::label('email','Correo (*):')!!}
				{!!Form::text('email',null,['class'=>'form-control','autofocus'=>'true'])!!}
				<p class="help-block">Correo electrónico</p>
			</div>

			<div class="form-group">
				{!!Form::label('password','Password:')!!}
				{!!Form::password('password',['class'=>'form-control'])!!}
				<p class="help-block">Contraseña de ingreso al sistema</p>
			</div>

        	<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button id="loginGO" type="submit" class="btn btn-default">Ingresar</button>
				</div>
			</div>

        {!!Form::close()!!}

        
			


    </div>
    <!-- /.col-lg-12 -->
</div>

@stop

