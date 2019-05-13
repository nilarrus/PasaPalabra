@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body"><h5 class="card-title text-center">Administracion de palabras</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Palabra</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Dificultad</th>
                          
                        </tr>
                      </thead>
                    @foreach($palabras as $dato)
                    
                      <tbody>
                        <tr>
                          <td>{{ $dato->id }}</td>
                          <td>{{ $dato->Palabra }}</td>
                          <td>{{ $dato->Descripcion }}</td>
                          <td>{{ $dato->Dificultad }}</td>
                          
                        </tr>
                        
                      </tbody>
                   
                    @endforeach
                     </table>   
                    <div id="PalabrasTabla">{!!$palabras->render()!!}</div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
