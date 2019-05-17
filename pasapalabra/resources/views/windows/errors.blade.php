@if(count($errors))
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
  <div class="card-body">
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert"></button>
		<u>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</u>
	</div>
</div>
</div>

@endif