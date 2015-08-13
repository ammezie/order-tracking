@extends('backend.layout.master')
@section('title', 'Update Order')
@section('content')
	<h2>Update Client Order</h2>
	<div class="row panel callout radius">
		<h4>Order Details</h4>
		<div class="large-6 columns">
			<p><strong>Name:</strong> {{ $client->name }}</p>
			<p><strong>Product:</strong> {{ $client->product }}</p>
		</div>
		<div class="large-6 columns">
			<p><strong>Destination:</strong> {{ $client->location }}</p>
			<p><strong>Track Number:</strong> {{ $client->track_code }}</p>
		</div>
	</div>
	@if (count($errors) > 0)
        <div data-alert class="alert-box warning radius">
        	There were some problems updating client order:
        	<ul>
	        	@foreach ($errors->all() as $error)
	            	<li>{{ $error }}</li>
	       		@endforeach
       		 </ul>
       	</div>
    @endif
    @if (session('message'))
		<div data-alert class="alert-box success radius">
			<a href="#" class="close">&times;</a>
			{{ session('message') }}
		</div>
    @endif
	{!! Form::model($client, array('method' => 'put', 'route' => ['admin.orders.update', $client->id])) !!}
		<div class="row">
			<div class="large-6 columns">
				{!! Form::textarea('comment', null, array('required', 'rows' => '5', 'cols' => '15', 'placeholder' => 'Comments')) !!}
			</div>
			<div class="row">
				<div class="large-6 columns">
					{!! Form::text('time', null, array('required', 'placeholder' => 'Time eg: 12:45AM')) !!}
				</div>
				<div class="large-6 columns">
					{!! Form::text('date', null, array('required', 'id' => 'datepicker', 'placeholder' => 'Date')) !!}
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="large-12">
				{!! Form::submit('Update Order', array('class' => 'button large radius')) !!}
			</div>
		</div>
	{!! Form::close() !!}

	@if ($client->comments->isEmpty())
		<div class="panel radius">
			<p>There are currently no updates for this order!</p>
		</div>
	@else
		<table width="100%">
			<thead>
				<tr>
					<th>Comments</th>
					<th>Time</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($client->comments as $comment)
				<tr>
					<td>{!! $comment['comments'] !!}</td>
					<td>{!! $comment['time'] !!}</td>
					<td>{!! $comment['date'] !!}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@endif
@endsection