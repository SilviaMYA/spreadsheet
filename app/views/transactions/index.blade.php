@extends('layouts.master')

@section('content')
<h3>Last 10 Transactions</h3>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td><strong>Item</strong></td>
				<td class="nathanael"><strong>Nathanael</strong></td>
				<td class="indiana"><strong>IndiAna</strong></td>
				<td><strong>Time</strong></td>
				<td></td>
			</tr>
		</thead>
		<tbody>

@foreach($transactions as $key => $value)
			<tr>
				<td>{{ $value->item }}</td>
				@if($value->user->firstname == 'Nathanael')
					<td class="nathanael">{{ money_format('$%i', $value->amount) }}</td>

<td class="indiana">&nbsp;</td>
					@else
					<td class="nathanael">&nbsp;</td>
					<td class="indiana">{{ money_format('$%i', $value->amount) }}</td>
@endif
				<td>{{ date('l, F jS, Y', strtotime($value->date_purchased)) }}</td>
				<td>
					{{ Form::open(array('url' => 'transactions/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-small btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
	@endforeach
			<tr>
				<td class="total"><strong>Grand Total</strong></td>
				<td class="nathanael total"><strong>${{ money_format('%i', $n_total) }}</strong></td>
				<td class="indiana total"><strong>${{ money_format('%i', $i_total) }}</strong></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Difference</td>
				<td>
					{{ money_format('%i', $n_diff) }}
				</td>
				<td>
					{{ money_format('%i', $i_diff) }}
				</td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>

	<h2>Add Another Item</h2>

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