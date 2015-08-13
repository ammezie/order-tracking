@extends('backend.layout.master')
@section('title', 'Clients')
@section('content')
	@if ($clients->isEmpty())
		<div class="panel radius">
			<p>There are currently no clients.</p>
		</div>
	@else
		<table width="100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Product</th>
					<th>Location</th>
					<th>Track Code</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($clients as $client)
					<tr>
						<td><a href="{!! action('Backend\CommentsController@show', $client->id) !!}">{{ $client->name }}</a></td>
						<td>{{ $client->product }}</td>
						<td>{{ $client->location }}</td>
						<td>{{ $client->track_code }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="pagination-centered">
		    {!! $clients->render() !!}
		</div>
	@endif
@endsection