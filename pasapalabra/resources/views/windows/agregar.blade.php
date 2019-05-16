@extends('layouts.app')

@section('content')


<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Añadir Palabra</h5>
            </div>
            <div class="panel-footer">
            	<form method="post" id="formAgregar" action="{{ route('agregar_store') }}">
                <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Palabra agregada correctamente.</strong>
</div>
                {{ csrf_field() }}
            		<input type="hidden" name="_token"  id="token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label">Palabra</label>
                     <div class="col-sm-10">
                      <input class="form-control" type="text" id="palabra" name="palabra">
                     </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-6 col-form-label">Descripcion</label>
                     <div class="col-sm-10">
                      <input class="form-control" type="text" id="descripcion" name="descripcion">
                     </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-6 col-form-label">Dificultad</label>
                     <div class="col-sm-10">
                      <input class="form-control" type="text" id="dificultad" name="dificultad">
                     </div>
                    </div>
                    <input type="submit" id="agregarS" class="btn btn-success btn-xs btn-block" value="Enviar"></input>
            		
            	</form>
            </div>
        </div>
</div>
@endsection