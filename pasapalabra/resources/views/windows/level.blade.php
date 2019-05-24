@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
      <div class="card-body">
    <div class="col text-center">
      <h1>Bienvenidos al Pasapalabra</h1>
      <h3>Escoge dificultad para poder empezar</h3>
    </div>
  </div>
  <div class="row">
    <div class="col text-center">
      <!-- <a class="btn btn-primary" href="{{route('Ranking_index')}}">{{__('Rangkings')}}</a> -->
    </div>
  </div>
<br>
    <div class="row">
      <div class="col text-center">
        <a class="btn btn-success" href="{{route('Game_index')}}?dif=0">FACIL</a>
        <div class="col dificultad">
          <p class="descDif">Tiempo 180s 3 min </p>
        </div>
      </div>
      <div class="col text-center">
        <a class="btn btn-warning" href="{{route('Game_index')}}?dif=1" >NORMAL</a>
        <div class="col dificultad">
          <p class="descDif"> Tiempo 150s 2,5 min </p>
        </div>
      </div>
      <div class="col text-center">
        <a class="btn btn-danger disabled"  href="{{route('Game_index')}}?dif=2" >DIFICIL</a>
        <div class="col dificultad">
          <p class="descDif"> Tiempo 90s 1,5 min </p> 
        </div>
     
      </div>
    </div>
  </div>
</div>
  </div>
</div>
  </div>
@endsection
