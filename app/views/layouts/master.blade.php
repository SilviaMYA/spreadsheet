<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transactions</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>

<div class="container">
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


@yield('content')
</div>
<footer>
<div class="container">
	<p>&copy <?php echo Date('Y');?></p>
</div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>