@extends('layouts.app')
@section('content')
<script type="text/javascript">
  $(document).ready(function(){
  agregar();
})
var agregar=function(){
  $.ajax({
    type:"get",
    url:"{{ url('an')}}",
    success:function(data){
      $("#nPalabra").empty().html(data);
    }
  });
};
</script>
<div class="container">
    <div class="row justify-content-center">
        <div id="caja" class="col-md-8">
            <div class="card">
                <div class="card-body"><h5 class="card-title text-center">Administracion de palabras</h5></div>



                <div class="card-body">
                                       
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="nPalabra"></div>
                    <form method="get" action="{{ route('agregar_index') }}">
                        {{ csrf_field() }}

                        <input type="submit" id="agregarAdm" class="btn btn-success" value="Añadir palabra"></input>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


