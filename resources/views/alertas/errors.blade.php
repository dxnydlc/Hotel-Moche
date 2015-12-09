<div class="col-lg-12">
    @if(Session::has('message-error'))
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
          {{Session::get('message-error')}}
        </div>
    @endif
</div>