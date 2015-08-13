<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
    	<div class="large-12 columns">
			@if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div data-alert class="alert-box warning radius">
                        {{ $error }}
                        <a href="#" class="close">&times;</a>
                    </div>
                @endforeach
            @endif
    		<form action="" method="post">
    			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    			<div class="row">
    				<div class="large-12 columns">
    					<input type="email" name="email" placeholder="Email Address">
    				</div>
    			</div>
    			<div class="row">
    				<div class="large-12 columns">
    					<button type="submit" class="button radius">Reset Password</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>