<!-- Modal Persona -->
<div class="modal fade" id="modalPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-primary " id="myModalLabel">Registro de Persona, habitación <span id="nHabit" class="ttf_Bold" >#</span></h4>
      </div>
      <!-- /modal-header -->

      <div class="modal-body">
        {!!Form::open(['route'=>'registro.store','method'=>'POST','autocomplete'=>'off','id'=>'frmDatos'])!!}

          {!! Form::hidden('idUsuario','0',['id'=>'idUsuario']) !!}
          {!! Form::hidden('idHabitacion','0',['id'=>'idHabitacion']) !!}
          {!! Form::hidden('idEmpresa','0',['id'=>'idEmpresa']) !!}
          {!! Form::hidden('idReserva','0',['id'=>'idReserva']) !!}

          @include('registro.forms.newPersona')

        {!!Form::close()!!}
      </div>
      <!-- /modal-body -->

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="btnRegistrar" type="button" class="btn btn-primary">Registrar</button>
      </div>
      <!-- /modal-footer -->

    </div>
  </div>
</div>