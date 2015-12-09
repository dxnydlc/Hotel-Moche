@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Empresa</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

    <ol class="breadcrumb">
        <li><a href="/home">Inicio</a></li>
        <li><a href="/empresa">Empresa</a></li>
        <li class="active">Editar Empresa</li>
    </ol>

    @include('alertas.userRequest')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar un nueva Empresa
            </div>
            <div class="panel-body">

                

                <div class="row">
                    
                    <div class="col-lg-6 col-lg-offset-3 ">

                    	{!!Form::model($empresa,['route'=>['empresa.update',$empresa->idEmpresa], 'method' => 'PUT' ,'autocomplete'=>'off'])!!}
                    		
                            @include('empresa.forms.empresaForm')

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-default">Limpiar</button>
                    	{!!Form::close()!!}

                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    
                </div>
                <!-- /.row (nested) -->

                <hr/>

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 ">
                        <p>Eliminar el Empresa</p>
                        {!!Form::open(['route'=>['empresa.destroy',$empresa->int_IdEmpresa],'method'=>'DELETE'])!!}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        {!!Form::close()!!}
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@stop