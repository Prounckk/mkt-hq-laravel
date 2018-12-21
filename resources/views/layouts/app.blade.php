<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body class="site-body">
    <div class="site-body__container">
      {{-- @section('sidebar') --}}
      {{--   This is the master sidebar. --}}
      {{-- @show --}}
      <header class="site-header">
        <nav class="site-header__nav">
          <img class="site-header__logo">
          <ul class="site-header__nav-group">
            <li class="site-header__nav-element">Retail</li>
            <li class="site-header__nav-element">Restaurant</li>
          </ul>
          <ul class="site-header__nav-group -right">
            <li class="site-header__nav-element">About</li>
            <li class="site-header__nav-element">Blog</li>
            <li class="site-header__nav-element">Support</li>
            <li class="site-header__nav-element">Login</li>
            <li class="site-header__nav-element -highlight">866-932-1801</li>
          </ul>
          <button class="site-header__trial-button">Free trial</button>
        </nav>
      </header>

      <main class="site-main">
        @yield('content')
      </main>

      <footer class="site-footer">
        Footer
      </footer>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
