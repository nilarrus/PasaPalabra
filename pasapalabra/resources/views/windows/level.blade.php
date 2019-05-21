@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
      <div class="card-body">
    <div class="col text-center">
      <h1>Bienvenidos al Pasapalabra</h1>
      <h3>Escoge dificultad</h3>
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
        <div>Tiempo 180s 3 min</div>
      </div>
      <div class="col text-center">
        <a class="btn btn-warning" href="{{route('Game_index')}}?dif=1" >NORMAL</a>
        <div>Tiempo 150s 2,5 min</div>
      </div>
      <div class="col text-center">
        <a class="btn btn-danger" href="{{route('Game_index')}}?dif=2" >DIFICIL</a>
        <div>Tiempo 90s 1,5 min</div>
     
      </div>
    </div>
  </div>
</div>
  </div>
</div>
  </div>
@endsection
