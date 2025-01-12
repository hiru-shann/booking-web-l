<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="{{ url('assets/img/favicon.ico') }}">
    <link rel="icon" href="{{ url('public/assets/frontend/images/logo3.png') }}">

    <title>Booking System</title>
        @include('libraries.frontend.styles')
        @stack('css')
    </head>
  <body>
        @include('components.frontend_nav')
        <div id="overlay" style="display: block;">
            <div class="loader"></div>
        </div>
        @yield('content')

        @include('components.frontend_footer')
        @include('libraries.frontend.scripts')
        @stack('scripts')
  </body>
</html>
