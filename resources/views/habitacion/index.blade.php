@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Habitacion</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

    <ol class="breadcrumb">
        <li><a href="/home">Inicio</a></li>
        <li class="active">Habitacion</li>
    </ol>
    
    <div class="panel">
        <a href="/habitacion/create" class="btn btn-primary" >Nueva habitacion</a>
    </div>

    @include('alertas.success')
    @include('alertas.errors')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Habitaciones registradas
            </div>
            <div class="panel-body">
                <div class="row">
                    
                    <div class="col-lg-10 col-lg-offset-1 ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Número</th>
                                    <th>Piso</th>
                                    <th>Tipo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($habitaciones as $habitacion)
                            <tbody>
                                <tr>
                                    <td>{{$habitacion->idHabitacion}}</td>
                                    <td>{{$habitacion->numero}}</td>
                                    <td>{{$habitacion->piso}}</td>
                                    <td>{{$habitacion->tipo}}</td>
                                    <td>
                                        {!!link_to_route('habitacion.edit', $title  = 'editar', $parameters =$habitacion->idHabitacion, $attributes = ['class'=>'btn btn-link'] )!!}
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {!!$habitaciones->render()!!}
                    </div>
                    <!-- /.col-lg-10 (nested) -->
                    
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