@extends('backend.layout.master')
@section('title', 'Create New Client')
@section('content')
	<h2>Create New Client</h2>
	@if (count($errors) > 0)
        <div data-alert class="alert-box warning radius">
        	There were some problems creating a new client:
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
	{!! Form::open(array('route' => 'admin.clients.store')) !!}
		<div class="row">
			<div class="large-6 columns">
				{!! Form::label('Client Name') !!}
				{!! Form::text('name', null, array('required', 'placeholder' => 'Client Name')) !!}
			</div>
			<div class="large-6 columns">
				{!! Form::label('Product') !!}
				{!! Form::text('product', null, array('required', 'placeholder' => 'Product')) !!}
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				{!! Form::label('Destination') !!}
				{!! Form::text('location', null, array('required', 'placeholder' => 'Destination')) !!}
			</div>
			<div class="large-6 columns">
				{!! Form::label('Phone') !!}
				{!! Form::text('phone', null, array('required', 'placeholder' => 'Phone')) !!}
			</div>
		</div>
		<div class="row text-center">
			<div class="large-12 columns">
				{!! Form::submit('Create Client', array('class' => 'large radius button')) !!}	
			</div>
		</div>
	{!! Form::close() !!}
@endsection