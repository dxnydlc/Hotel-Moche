@extends('layouts.admin')


@section('losCSS')
    <!-- Datepicker -->
    {!!Html::style('bower_components/datetimepicker/bootstrap-datetimepicker.min.css')!!}

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Registro de huesped</h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

    <ol class="breadcrumb">
        <li><a href="/home">Inicio</a></li>
        <li class="active">Registro</li>
    </ol>
    
    <!--<div class="panel">
        <a href="/registro/create" class="btn btn-primary" >Nuevo Registro</a>
    </div>-->
    
    @include('alertas.success')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Habitaciones:
            </div>
            <div class="panel-body">
<?php
$clase = ''; $btn_text = ''; $icos = '';
?>
                <div class="row">
                    @foreach($habitaciones as $habita)
                        @if( $habita->estado == 'libre' )
                            <?php $clase = 'primary'; $btn_text = 'Asignar'; $icos = 'glyphicon-user'; ?>
                        @elseif ( $habita->estado == 'ocupada' )
                            <?php $clase = 'success'; $btn_text = 'Preparar'; $icos = 'glyphicon-lock'; ?>
                        @else
                            <?php $clase = 'warning'; $btn_text = 'Liberar'; $icos = 'glyphicon-ok'; ?>
                        @endif
                        <div class="col-lg-2">
                            <div class="panel panel-{{$clase}}">
                                <div class="panel-heading text-center ttb_Bold ">{{$habita->tipo}}</div>
                                <div class="panel-body">
                                    <p class="text-center" >Habitación<br/>
                                    <span class="ttb_Bold" >{{$habita->numero}}</span><br/>
                                    {{$habita->piso}}<br/>
                                    {{$habita->estado}}</p>
                                    <p class="text-center ttb_Bold " ><a alt="{{ $habita->idHabitacion }}" class="text-{{$clase}} dea{{$clase}}" href="#" rel="{{$habita->numero.' - '.$habita->piso.', '.$habita->tipo}}" >{{$btn_text}} <span class="glyphicon {{$icos}}" ></span></a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Habitacion -->
                    @endforeach
                </div>
                <!-- /.row -->

                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->



 @include('registro.forms.persona')

@section('scripts')
    <!-- Datepicker -->
    {!!Html::script('bower_components/datetimepicker/moment.min.js')!!}
    {!!Html::script('bower_components/datetimepicker/es.js')!!}
    {!!Html::script('bower_components/datetimepicker/bootstrap-datetimepicker.min.js')!!}
    {!!Html::script('bower_components/validate/jquery.validate.min.js')!!}

    <!-- JS de registro -->
    {!!Html::script('dist/js/registro.js')!!}
@endsection
    

@stop