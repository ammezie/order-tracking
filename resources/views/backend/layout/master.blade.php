<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! asset('css/foundation.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/jquery-ui.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <script src="{!! asset('js/vendor/modernizr.js') !!}"></script>
  </head>
  <body>
    @include('backend.includes.nav')
    <div class="row">
      <div class="large-3 columns">
        @include('backend.includes.sidenav')
      </div>
      <div class="large-9 columns">
        @yield('content')
      </div>
    </div>
    <div class="row">
      @include('footer')
    </div>
    
    <script src="{!! asset('js/vendor/jquery.js') !!}"></script>
    <script src="{!! asset('js/foundation.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-ui.min.js') !!}"></script>
    <script src="{!! asset('js/scripts.js') !!}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
