@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Habitaciones</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

    <ol class="breadcrumb">
        <li><a href="/home">Inicio</a></li>
        <li><a href="/habitacion">Habitaciones</a></li>
        <li class="active">Editar Habitacion</li>
    </ol>

    @include('alertas.userRequest')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar/crear un nueva Habitacion
            </div>
            <div class="panel-body">

                

                <div class="row">
                    
                    <div class="col-lg-6 col-lg-offset-3 ">

                        {!!Form::model( $habitacion , [ 'route' => ['habitacion.update' , $habitacion->idHabitacion ] , 'method'=>'PUT','autocomplete'=>'off'])!!}
                            
                            @include('habitacion.forms.habitacionForm')

                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="/habitacion" class="btn btn-default" >Regresar</a>
                        {!!Form::close()!!}

                        <form role="form" method="post" autocomplete="off" >
                            
                            
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    
                </div>
                <!-- /.row (nested) -->

                <hr/>

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 ">
                        <p>Eliminar el habitacion</p>
                        {!!Form::open(['route'=>['habitacion.destroy',$habitacion->int_IdHabitacion],'method'=>'DELETE'])!!}
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