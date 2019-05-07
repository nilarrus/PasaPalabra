<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-image: url('../images/fondo.jpg');
		}
	</style>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<hr>
		@if (session()->has('flash'))
 		<div class="alert alert-info">{{ session('flash') }}</div>
		@endif
	
		@yield('content')
	</div>


</body>
</html>