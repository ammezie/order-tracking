<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{!! asset('css/foundation.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/jquery-ui.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <script src="{!! asset('js/vendor/modernizr.js') !!}"></script>
  </head>
  <body>
    <div class="row text-center wrapper">
    	<div class="large-12 columns">
    		<form action="" method="post">
    			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    			<div class="row">
    				<div class="large-6 large-centered columns">
                    @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div data-alert class="alert-box warning radius">
                            {{ $error }}
                            <a href="#" class="close">&times;</a>
                        </div>
                    @endforeach
                @endif
    					<label for="email">Email</label>
    					<input type="email" name="email" placeholder="Email Address">
    				</div>
    			</div>
    			<div class="row">
    				<div class="large-6 large-centered columns">
    					<label for="password">Password</label>
    					<input type="password" name="password" placeholder="Password">
    				</div>
    			</div>
                <div class="row">
                    <div class="large-6 large-centered columns">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
    			<div class="row">
    				<div class="large-6 large-centered columns ">
    					<button type="submit" class="button small radius">Sign In</button>
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