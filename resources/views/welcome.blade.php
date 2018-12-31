<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css')  }}">

    </head>
    <body>
        <div id="app">
            <example></example> 
            <blog></blog>
            
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/bar">Go to Bar</router-link>
            
            <route-view></route-view>

            <a href="{{ url('/task') }}">task</a>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
