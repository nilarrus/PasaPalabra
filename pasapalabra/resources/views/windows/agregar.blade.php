@extends('layouts.app')

@section('content')

@include('windows.errors')

<script type="text/javascript">
  
  //insertar palabras
  $(document).ready(function(){
  $.ajaxSetup({
    headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
  })

$('#frm-insert').on('submit',function(e){
  e.preventDefault();
  var url=$(this).attr('action');
  var post=$(this).attr('method');
  var data=$(this).serialize();

  $.ajax({
    type: post,
    url: url,
    data: data,
    success:function(data){
      $("#msj-success").fadeIn();
    }
  })
  
})
})
</script>

<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="row">
              <div class="col-12">
              @include('windows.bread')
                  <h1 class="display-20" id="modificar"></h1>
              </div>
          </div>
          <div class="card-body">
                <h5 class="card-title text-center">Añadir Palabra</h5>
              </div>
              <div class="panel-footer">
              <div class="card-body">
              <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Palabra agregada correctamente.</strong>
                <br>
                <a href="{{route('adm_index')}}">volver al Listado</a>
                </div>              
              {!! Form::open(['url'=>'insertar','method'=>'POST','id'=>'frm-insert']) !!}
                

                  {!!Form::label('Letra','Letra')!!}

                  {!!Form::text('Letra',null,['id'=>'Letra','class'=>'form-control'])!!}

                  {!!Form::label('Palabra','Palabra')!!}

                  {!!Form::text('Palabra',null,['id'=>'Palabra','class'=>'form-control'])!!}

                  {!!Form::label('Tipo','Tipo')!!}

                  {!!Form::text('Tipo',null,['id'=>'Tipo','class'=>'form-control'])!!}

                  {!!Form::label('Descripcion','Descripcion')!!}

                  {!!Form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control'])!!}    

                  {!!Form::label('Dificultad','Dificultad:')!!}

                  <!-- {!!Form::text('Dificultad',null,['id'=>'Dificultad','class'=>'form-control'])!!}   -->

                  {!!Form::select('Dificultad',['Facil','Normal','Dificil'],['id'=>'Dificultad'],['class'=>'form-control'])!!}  

                {!!Form::submit('Enviar',['class'=>'btn btn-block btn-success'])!!}
              {!!Form::close()!!}
            </div>
            </div>
        </div>
</div>
@endsection