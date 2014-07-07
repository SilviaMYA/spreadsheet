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
			<li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
			<li><a href="{{ URL::to('logout') }}">Logout</a></li>
		</ul>

	</div>
</nav>

<div class="container">



	<h1>Users</h1>

	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	@if($errors->has())
		@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
		@endforeach
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td><strong>ID</strong></td>
				<td><strong>Name</strong></td>
				<td><strong>Email</strong></td>
				<td><strong>Username</strong></td>
				<td><strong>Updated At</strong></td>
				<td><strong>Actions</strong></td>
			</tr>
		</thead>
		<tbody>

			@foreach($users as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->firstname }} {{ $value->lastname }}</td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->username }}</td>
				<td>{{ $value->updated_at }}</td>
				<td>

					<button title="Show" class="btn btn-small btn-success" data-toggle="modal" data-target="#modal-show-{{ $value->id }}" >
						<span class="glyphicon glyphicon-th-large"></span>
					</button>

					<button title="Edit" class="btn btn-small btn-info" data-toggle="modal" data-target="#modal-edit-{{ $value->id }}" >
						<span class="glyphicon glyphicon-pencil"></span>
					</button>

					<button title="Delete" class="btn btn-small btn-danger" data-toggle="modal" data-target="#modal-confirm-{{ $value->id }}">
						<span class="glyphicon glyphicon-remove"></span>
					</button>

				</td>
			</tr>

			<!-- Confirmation modal -->
			<div id="modal-confirm-{{ $value->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-sm">
			    <div class="modal-content">

			    	 <div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        				<h4 class="modal-title">Delete {{ $value->firstname }}?</h4>
  					</div>
      				<div class="modal-body">
        				<p>This action is not reverseable.</p>
      				</div>

      				<div class="modal-footer">
			    	{{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-small btn-danger')) }}
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
					{{ Form::close() }}
					</div>

			    </div>
			  </div>
			</div>

			<!-- Edit Modal -->

			<div id="modal-edit-{{ $value->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog">
			    <div class="modal-content">

			    	 <div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        				<h4 class="modal-title">Edit {{ $value->firstname }}</h4>
  					</div>
      				<div class="modal-body">
						{{ Form::open(array('url' => 'users/' . $value->id)) }}
						{{ Form::hidden('_method', 'PUT') }}

						<p>
							{{ Form::label('firstname', 'First Name') }}
							{{ Form::text('firstname', $value->firstname, array('placeholder' => 'First Name', 'class' => 'form-control')) }}
						</p>

						<p>
							{{ Form::label('firstname', 'Last Name') }}
							{{ Form::text('lastname', $value->lastname, array('placeholder' => 'First Name', 'class' => 'form-control')) }}
						</p>
							{{ Form::label('username', 'Username') }}
							{{ Form::text('username', $value->username, array('placeholder' => 'Username', 'class' => 'form-control')) }}
						</p>

						<p>
							{{ Form::label('email', 'Email Address') }}
							{{ Form::text('email', $value->email, array('placeholder' => 'example@example.com', 'class' => 'form-control')) }}
						</p>

						<p>
							{{ Form::label('password', 'Change Password (Optional)') }}
							{{ Form::password('password', array(
								'class' => 'form-control'
							)) }}
						</p>

						<div class="modal-footer">

							{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

						</div>

						{{ Form::close() }}

      				</div>



			    </div>
			  </div>
			</div>


			<!-- Show modal -->
			<div id="modal-show-{{ $value->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">

			    	 <div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        				<h4 class="modal-title">Info for {{ $value->firstname }}</h4>
  					</div>
      				<div class="modal-body">

						<p><strong>First Name: </strong>{{ $value->firstname }}</p>
						<p><strong>Last Name: </strong>{{ $value->lastname }}</p>
						<p><strong>Username: </strong>{{ $value->username }}</p>
						<p><strong>Email: </strong><a href="mailto:{{ $value->email }}">{{ $value->email }}</a></p>
						<p><strong>Street Address: </strong>{{ $value->street_address }}</p>
						<p><strong>Hashed Password: </strong>{{ $value->password }}</p>
						<p><strong>Created At: </strong>{{ $value->created_at }}</p>
						<p><strong>Updated At: </strong>{{ $value->updated_at }}</p>




      				</div>

			    </div>
			  </div>
			</div>


			@endforeach
		</tbody>

	</table>




</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>