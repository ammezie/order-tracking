@extends('frontend.layout.master')

@section('title', 'Homepage')

@section('content')

	<div class="large-12 columns">
		<h2>Track Your Shapers9ja Orders</h2>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<p>Kindly enter your tracking number below and hit <strong>Track</strong>.</p>
		</div>
	</div>
	<div class="row">
		<div class="large-6 large-centered columns">
			@if (count($errors) > 0)
			    <div data-alert class="alert-box warning radius">
		        	@foreach ($errors->all() as $error)
		            	{{ $error }}
		       		@endforeach
			   	</div>
			@endif
			{!! Form::open(array('action' => 'TracksController@tracks', 'method' => 'GET')) !!}
				<div class="row">
					<div class="large-6 large-centered columns">
						{!! Form::text('track_code', null, array('required', 'placeholder' => 'Enter Your Tracking Number')) !!}
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-centered columns">
							{!! Form::submit('Track', ['class' => 'button large radius']) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
	
@endsection