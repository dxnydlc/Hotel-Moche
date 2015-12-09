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
        <li class="active">Empresa</li>
    </ol>
    
    <div class="panel">
        <a href="empresa/create" class="btn btn-primary" >Nueva Empresa</a>
    </div>
    
    @include('alertas.success')
    @include('alertas.errors')
    
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Empresas registradas
            </div>
            <div class="panel-body">
                <div class="row">
                    
                    <div class="col-lg-10 col-lg-offset-1 ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Ruc</th>
                                    <th>Teléfonos</th>
                                    <th>Contacto</th>
                                    <th>Correo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($empresas as $empresa)
                            <tbody>
                                <tr>
                                    <td>{{$empresa->idEmpresa}}</td>
                                    <td>{{$empresa->nombre}}</td>
                                    <td>{{$empresa->ruc}}</td>
                                    <td>{{$empresa->telefono}}</td>
                                    <td>{{$empresa->contacto}}</td>
                                    <td>{{$empresa->email}}</td>
                                    <td>
                                        {!!link_to_route('empresa.edit', $title  = 'editar', $parameters =$empresa->idEmpresa, $attributes = ['class'=>'btn btn-link'] )!!}
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {!!$empresas->render()!!}
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