@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col text-center">
      <h1>Bienvenidos al Pasapalabra</h1>
      <h2>Escoge dificultad</h2>
    </div>
  </div>
  <div class="row">
    <div class="col text-center">
      <a class="btn btn-primary" href="{{route('Ranking_index')}}">{{__('Rangkings')}}</a>
    </div>
  </div>
<br>
    <div class="row">
      <div class="col text-center">
        <a class="btn btn-success" href="{{route('Game_index')}}?dif=facil">FACIL</a>
        <div>hola</div>
      </div>
      <div class="col text-center">
        <a class="btn btn-warning" href="{{route('Game_index')}}?dif=normal" >NORMAL</a>
        <div>hola</div>
      </div>
      <div class="col text-center">
        <a class="btn btn-danger" href="{{route('Game_index')}}?dif=dificil" >DIFICIL</a>
        <div>hola</div>
      </div>
    </div>
  </div>
@endsection