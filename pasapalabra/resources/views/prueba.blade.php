@extends('layouts.app')

@section('content')

<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login {{ auth()->user()-name}}</h5>
            </div>
            <div class="panel-body">
            	<strong>Email: </strong> {{ auth()->user()->email}}
            </div>
            <div class="panel-footer">
            	<form method="post" action="{{ route('logout") }}>
            		{{ csrf_field() }}
            		<button class="btn btn-danger btn-xs btn-block">Cerrar sesión</button>
            	</form>
            </div>
        </div>
</div>

@endsection