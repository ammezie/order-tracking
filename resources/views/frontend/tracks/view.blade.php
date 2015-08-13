@extends('frontend.layout.master')

@section('title', 'View Track')

@section('content')
	<div class="row">
		<div class="large-12 columns">
			<h2>Track Your Shapers9ja Orders</h2>
		<p>Here's is a fastest way to check the status of your orders. No need to get worried about your orders - our online results give you real-time, detailed progress as your orders speeds through Shapers9ja network. WE SERVE YOU BETTER.</p>
		</div>		
	</div>
	<div class="row panel callout radius">
		<h2>Order Details</h2>
		<div class="large-6 columns">
			<p><strong>Name:</strong> {{ $client->name }}</p>
			<p><strong>Product:</strong> {{ $client->product }}</p>
		</div>
		<div class="large-6 columns">
			<p><strong>Destination:</strong> {{ $client->location }}</p>
			<p><strong>Track Number:</strong> {{ $client->track_code }}</p>
		</div>
	</div>

	@if ($client->comments->isEmpty())
		<div class="panel radius">
			<p>There are currently no updates for this order!</p>
		</div>
	@else
		<h3>Result Summary</h3>
		<table width="100%">
			<thead>
				<tr>
					<th>Status</th>
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