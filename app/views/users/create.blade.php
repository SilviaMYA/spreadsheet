<!doctype html>
<html>
<head>
	<title>Register New User</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->

		<style>

		</style>

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
		<div class="login-wrapper .col-md-10">
		{{ Form::open(array('url' => 'users')) }}
			<h1>Register user</h1>

			<!-- if there are errors, show them here -->
				@if($errors->has())
					@foreach ($errors->all() as $error)
      					<div class="alert alert-danger">{{ $error }}</div>
  					@endforeach
				@endif

				@if(Session::has('message'))
            		<p class="alert alert-danger">{{ Session::get('message') }}</p>
        		@endif

    		<p>
				{{ Form::label('firstname', 'First Name') }}
				{{ Form::text('firstname', null, array('placeholder' => 'First Name', 'class' => 'form-control')) }}
			</p>

			<p>
				{{ Form::label('lastname', 'Last Name') }}
				{{ Form::text('lastname', null, array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
			</p>

			<p>
				{{ Form::label('username', 'Username') }}
				{{ Form::text('username', null, array('placeholder' => 'Username', 'class' => 'form-control')) }}
			</p>


			<p>
				{{ Form::label('email', 'Email Address') }}
				{{ Form::text('email', Input::old('email'), array('placeholder' => 'example@example.com', 'class' => 'form-control')) }}
			</p>

			<p>
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', array(
					'class' => 'form-control',
					'placeholder' => '&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;'
				)) }}
			</p>

			<p>{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}</p>
		{{ Form::close() }}
		</div>
	</div>
</body>
</html>
