

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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

