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

<?php $count = 0;?>
@foreach($images as $key => $value)
	<div class="image-wrap col-md-4">
		<img style="max-width: 100%;" src="{{ asset('uploads/' . $value->filename ); }}" alt="">
		<br>
		<br>

	{{ Form::open(array('url' => 'images/' . $value->id)) }}
	{{ Form::hidden('_method', 'DELETE') }}
	{{ Form::submit('Delete', array('class' => 'btn btn-small btn-danger')) }}
	</div>
	@if ($count == 2)
		<div style="clear: both;"></div>
	@endif
<?php $count++;?>
 @endforeach
 <div style="clear: both;"></div>
 <h2>Add another</h2>
<a href="/images/create" class="btn btn-primary btn-lg btn-success">Add Image</a>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>