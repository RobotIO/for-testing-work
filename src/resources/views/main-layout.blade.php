<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @section('header')
        <head>
            <meta charset="utf-8">
            <!-- Csrf -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
    @show

    <body class="antialiased">
      
        @yield('content')

        <script src="./js/app.js" charset="utf-8"></script>
    </body>
</html>
