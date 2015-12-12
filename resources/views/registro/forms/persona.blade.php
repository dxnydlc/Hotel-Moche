<!-- Modal Persona -->
<div class="modal fade" id="modalPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-primary " id="myModalLabel">Registro de Persona, habitación <span id="nHabit" class="ttf_Bold" >#</span></h4>
      </div>
      <div class="modal-body">
        
        {!!Form::open(['route'=>'registro.store','method'=>'POST','autocomplete'=>'off'])!!}

          @include('registro.forms.newPersona')

        {!!Form::close()!!}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>