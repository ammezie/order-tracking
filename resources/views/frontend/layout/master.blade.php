<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! asset('css/foundation.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <script src="{!! asset('js/vendor/modernizr.js') !!}"></script>
  </head>
  <body>
    @include('frontend.includes.nav')
    
    <div class="row text-center">
      @yield('content')
    </div>
    <div class="row">
      @include('footer')
    </div>
    
    <script src="{!! asset('js/vendor/jquery.js') !!}"></script>
    <script src="{!! asset('js/foundation.min.js') !!}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
