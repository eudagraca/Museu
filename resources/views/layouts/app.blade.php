<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Museu Virtual da EDM</title>

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="app">

            <main data-uk-height-viewport="expand: true">
                @yield('content')
            </main>

        </div>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
    </body>

</html>
