@extends('layouts.app')
@section('content')
<div class="container-fluid caja">
  <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-8 mx-auto">
            <div class="card card-signin my-5">
      
        <div class="card-body">
          <div class="col text-center">
            <h1>Bienvenidos al Pasapalabra</h1>
            <h3>Escoge dificultad para poder empezar</h3>
            <h2>1 Jugador</h2>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <!-- <a class="btn btn-primary" href="{{route('Ranking_index')}}">{{__('Rangkings')}}</a> -->
          </div>
        </div>
        <br>
        <!-- dificultades con mini descripcion -->
        <div class="row">
          <div class="col text-center">
            <a class="btn btn-success" href="{{route('Game_index1')}}?dif=0">FACIL</a>
            <div class="col dificultad">
              <p class="descDif">Tiempo 300s 5 min </p>
            </div>
          </div>
          <div class="col text-center">
            <a class="btn btn-warning" href="{{route('Game_index1')}}?dif=1" >NORMAL</a>
            <div class="col dificultad">
              <p class="descDif"> Tiempo 240s 4 min </p>
            </div>
          </div>
          <div class="col text-center">
            <a class="btn btn-danger disabled"  href="{{route('Game_index1')}}?dif=2" >DIFICIL</a>
            <div class="col dificultad">
              <p class="descDif"> Tiempo 180s 3 min </p> 
            </div>
          </div>
        </div>
        <div class="card-body">
            <div class="col text-center">
              <h2>2 Jugadores</h2>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <!-- <a class="btn btn-primary" href="{{route('Ranking_index')}}">{{__('Rangkings')}}</a> -->
            </div>
          </div>
          <br>
          <!-- dificultades con mini descripcion -->
          <div class="row">
            <div class="col text-center">
              <a class="btn btn-success" href="{{route('Game_index2')}}?dif=0">FACIL</a>
              <div class="col dificultad">
                <p class="descDif">Tiempo 300s 5 min </p>
              </div>
            </div>
            <div class="col text-center">
              <a class="btn btn-warning" href="{{route('Game_index2')}}?dif=1" >NORMAL</a>
              <div class="col dificultad">
                <p class="descDif"> Tiempo 240s 4 min </p>
              </div>
            </div>
            <div class="col text-center">
              <a class="btn btn-danger disabled"  href="{{route('Game_index2')}}?dif=2" >DIFICIL</a>
              <div class="col dificultad">
                <p class="descDif"> Tiempo 180s 3 min </p> 
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
