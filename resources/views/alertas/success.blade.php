<div class="col-lg-12">
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          {{Session::get('message')}}
        </div>
    @endif
</div>