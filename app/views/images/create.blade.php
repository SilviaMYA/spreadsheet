<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
</head>
<body>

<nav class="navbar navbar-default">
	<div class="container">
		<ul class="nav navbar-nav">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('images') }}">Images</a>
			</div>
			<li><a href="{{ URL::to('images') }}">View All Images</a></li>
			<li><a href="{{ URL::to('images/create') }}">Add an Image</a></li>
			<li><a href="{{ URL::to('logout') }}">Logout</a></li>
		</ul>
	</div>
</nav>

<div class="container">



	<h1>Images</h1>

	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	@if($errors->has())
		@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
		@endforeach
	@endif


{{ Form::open(array('url' => 'images', 'files' => true)) }}



{{ Form::file('image'); }}
<br>
{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>