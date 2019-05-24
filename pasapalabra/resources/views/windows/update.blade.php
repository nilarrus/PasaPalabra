@extends('layouts.app')

@section('content')



<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

        <div class="card card-signin my-5">
          <div class="row">
              <div class="col-12">
              @include('windows.bread')
                  <h1 class="display-20" id="modificar"></h1>
              </div>
          </div>
          <div class="card-body">
            
            @foreach($pal as $dato)
            <h5 class="card-title text-center">Modificar Palabra {{ $dato->Palabra }}</h5>
            </div>
            <div class="panel-footer">
              <div class="card-body">
                            
               <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Palabra agregada correctamente.</strong>
                <br>
                <a href="{{route('adm_index')}}">volver al Listado</a>
                </div>



              {!! Form::open(['url'=>'edit','method'=>'post','id'=>'frm']) !!}
              {!! Form::hidden('id',$dato->id,['id'=>'id']) !!}
                
                  {!!Form::label('Letra','Letra')!!}

                  {!!Form::text('Letra',$dato->Letra,['id'=>'Letra','class'=>'form-control'])!!}

                  {!!Form::label('Palabra','Palabra')!!}

                  {!!Form::text('Palabra',$dato->Palabra,['id'=>'Palabra','class'=>'form-control'])!!}

                  {!!Form::label('Tipo','Tipo')!!}

                  {!!Form::text('Tipo',$dato->Tipo,['id'=>'Tipo','class'=>'form-control'])!!}

                  {!!Form::label('Descripcion','Descripcion')!!}

                  {!!Form::text('Descripcion',$dato->Descripcion,['id'=>'Descripcion','class'=>'form-control'])!!}    

                  {!!Form::label('Dificultad','Dificultad:')!!}
                  

                  <!--{!!Form::text('Dificultad',null,['id'=>'Dificultad','class'=>'form-control'])!!}  
                   -->

                  {!!Form::select('Dificultad',['Facil','Normal','Dificil'],['id'=>'Dificultad'],['class'=>'form-control'])!!}  

                  {!!Form::submit('Enviar',['id'=>'Enviar','class'=>'btn btn-block btn-success'])!!}


                  {!!Form::close()!!} 
                  @endforeach

                  <?php

                  echo "<script type='text/javascript'>
                  
                  console.log('".$dato->Dificultad."');

                  $('#Dificultad option[value=".$dato->Dificultad."]').attr('selected','selected');

                  </script>";

                  ?>


</div>
            </div>
        </div>
</div>
<script type="text/javascript">
   //Modificar palabras
  $(document).ready(function(){
  $.ajaxSetup({
    headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
  })

$('#frm').on('submit',function(e){
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
            


@endsection