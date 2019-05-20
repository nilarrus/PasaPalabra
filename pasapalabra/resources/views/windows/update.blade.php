<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div id="modalUpdate" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
       
            <h5 class="card-title text-center">Editar Palabra</h5>
            </div>
              <div class="card-body">
                                       
              {!! Form::open(['url'=>'#','method'=>'POST','id'=>'frm-update']) !!}
               <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Palabra agregada correctamente.</strong>
                <br>
                <a href="{{route('adm_index')}}">volver al Listado</a>
                </div>
                

                  {!!Form::label('Palabra','Palabra')!!}

                  {!!Form::text('Palabra',null,['id'=>'Palabra','class'=>'form-control'])!!}

                  {!!Form::label('Descripcion','Descripcion')!!}

                  {!!Form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control'])!!}    

                  {!!Form::label('Dificultad','Dificultad:')!!}

                  <!-- {!!Form::text('Dificultad',null,['id'=>'Dificultad','class'=>'form-control'])!!}   -->

                  {!!Form::select('Dificultad',['Facil','Normal','Dificil'],['id'=>'Dificultad'],['class'=>'form-control'])!!}  

                {!!Form::submit('Enviar',['class'=>'btn btn-block btn-success'])!!}
              {!!Form::close()!!}
            </div>
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

