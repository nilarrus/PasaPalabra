@extends('layouts.app')

@section('content')

@include('windows.errors')

<script type="text/javascript">
  
</script>

<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 align="center">Modificar Palabra</h5>
      <div class="modal-body">
        
       
                     
              {!! Form::open(['url'=>'edit','method'=>'post','id'=>'frm']) !!}
              {!! Form::hidden('id',null,['id'=>'id']) !!}
                
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