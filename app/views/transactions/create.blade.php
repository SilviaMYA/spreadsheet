@extends('layouts.master')

@section('content')

@if($errors->has())
	@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
		@endforeach
@endif

{{ Form::open(array('url' => 'transactions', 'class' => 'form-inline')) }}

<div class="form-group">
	{{ Form::label('item', 'Item', array('class' => 'sr-only')) }}
	{{ Form::text('item', null, array('class' => 'form-control', 'placeholder' => 'Item', 'id' => 'item_input')) }}
</div>
<div class="form-group">
	<div class="input-group">
	<div class="input-group-addon">$</div>
	{{ Form::text('amount', null, array('class' => 'form-control', 'placeholder' => 'Amount')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('date_purchased', 'Date', array('class' => 'sr-only')) }}
	{{ Form::text('date_purchased', date('m/d/Y'), array('class' => 'form-control', 'placeholder' => 'Date')) }}
</div>

{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
<script>
	window.onload = function() {
		document.getElementById("item_input").focus();
	}

</script>

@stop