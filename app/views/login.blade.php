<!doctype html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>

	<div class="container">
		<div class="login-wrapper .col-md-10">
		{{ Form::open(array('url' => 'login')) }}
			<h1>Login</h1>

			<!-- if there are login errors, show them here -->
				@if($errors->has())
					@foreach ($errors->all() as $error)
      					<div class="alert alert-danger">{{ $error }}</div>
  					@endforeach
				@endif

				@if(Session::has('message'))
            		<p class="alert alert-info">{{ Session::get('message') }}</p>
        		@endif


			<p>
				{{ Form::label('email', 'Email Address') }}
				{{ Form::text('email', Input::old('email'), array('placeholder' => 'example@example.com', 'class' => 'form-control')) }}
			</p>

			<p>
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', array('class' => 'form-control')) }}
			</p>

			{{ Form::submit('Submit!', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}


		</div>
	</div>
</body>
</html>
