<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/spinners.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @if(Auth::check())
          <header class="topbar">
            @include('partials.navbar')
          </header>
        @endif
        
        @if(Auth::check())
          @include('partials.sidebar')
        @endif

        <main class="{{ Auth::check() ? 'page-wrapper' : '' }}">
          @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/material/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/material/waves.js') }}"></script>
    <script src="{{ asset('js/material/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/material/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/material/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/material/custom.min.js') }}"></script>
</body>
</html>
