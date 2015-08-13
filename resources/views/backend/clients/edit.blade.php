@extends('backend.layout.master')
@section('title', 'Update Client')
@section('content')
	<h2>Update Client</h2>
	@if (count($errors) > 0)
        <div data-alert class="alert-box warning radius">
        	There were some problems updating client:
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
	{!! Form::model($client, array('method' => 'put', 'route' => ['admin.clients.update', $client->id])) !!}
		<div class="row">
			<div class="large-6 columns">
				{!! Form::text('name', null, array('required')) !!}
			</div>
			<div class="large-6 columns">
				{!! Form::text('product', null, array('required')) !!}
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				{!! Form::text('location', null, array('required')) !!}
			</div>
			<div class="large-6 columns">
				{!! Form::text('phone', null, array('required')) !!}
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				{!! Form::label('Order Delivered?') !!}
				{!! Form::select('status', array('0' => 'No', '1' => 'Yes'), 0) !!}
			</div>
		</div>
		<div class="row text-center">
			<div class="large-12">
				{!! Form::submit('Update Client', array('class' => 'button large radius')) !!}				
			</div>
		</div>
	{!! Form::close() !!}
@endsection