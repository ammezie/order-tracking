<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{!! asset('css/foundation.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/jquery-ui.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <script src="{!! asset('js/vendor/modernizr.js') !!}"></script>
  </head>
  <body>
    <div class="row wrapper text-center">
    	<div class="large-12 columns">
    		<form action="" method="post">
    			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    			<div class="row">
    				<div class="large-6 large-centered  columns">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div data-alert class="alert-box warning radius">
                                {{ $error }}
                                <a href="#" class="close">&times;</a>
                            </div>
                        @endforeach
                    @endif
    					<label for="name">Name</label>
    					<input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
    				</div>
    			</div>
    			<div class="row">
    				<div class="large-6 large-centered  columns">
    					<label for="email">Email</label>
    					<input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
    				</div>
    			</div>
    			<div class="row">
    				<div class="large-6 large-centered  columns">
    					<label for="password">Password</label>
    					<input type="password" name="password" placeholder="Password">
    				</div>
    			</div>
    			<div class="row">
    				<div class="large-6 large-centered  columns">
    					<label for="password_confirmation">Confirm Password</label>
    					<input type="password" name="password_confirmation" placeholder="Confirm Password">
    				</div>
    			</div>
    			<div class="row">
    				<div class="large-6 large-centered  columns">
    					<button type="submit" class="button radius">Sign Up</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
    
    <script src="{!! asset('js/vendor/jquery.js') !!}"></script>
    <script src="{!! asset('js/foundation.min.js') !!}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
