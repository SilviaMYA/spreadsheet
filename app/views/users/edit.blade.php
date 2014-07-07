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
				<a class="navbar-brand" href="{{ URL::to('users') }}">Users</a>
			</div>

			<li><a href="{{ URL::to('users') }}">View All Users</a></li>
			<li><a href="{{ URL::to('users/create') }}">Create a User</a>
		</ul>
	</div>
</nav>

<div class="container">

<h1>Edit {{ $user->firstname }}</h1>



{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('firstname', 'First Name') }}
		{{ Form::text('firstname', null, array('placeholder' => 'First Name', 'class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('lastname', 'Last Name') }}
		{{ Form::text('lastname', null, array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('username', 'Username') }}
		{{ Form::text('username', null, array('placeholder' => 'Username', 'class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', Input::old('email'), array('placeholder' => 'example@example.com', 'class' => 'form-control')) }}
	</div>


	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

	<a class="btn btn-default" href="/users">Cancel</a>

{{ Form::close() }}




</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>